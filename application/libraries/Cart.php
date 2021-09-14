<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2006 - 2012, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Shopping Cart Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Shopping Cart
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/cart.html
 */
class CI_Cart
{

	// These are the regular expression rules that we use to validate the product ID and product name
	var $product_id_rules	= '\.a-z0-9_-'; // alpha-numeric, dashes, underscores, or periods
	var $product_name_rules	= '\.\:\-_ a-z0-9'; // alpha-numeric, dashes, underscores, colons or periods

	// Private variables.  Do not change!
	var $CI;
	var $_cart_contents	= array();


	/**
	 * Shopping Class Constructor
	 *
	 * The constructor loads the Session class, used to store the shopping cart contents.
	 */
	public function __construct($params = array())
	{
		// Set the super object to a local variable for use later
		$this->CI = &get_instance();

		// Are any config settings being passed manually?  If so, set them
		$config = array();
		if (count($params) > 0) {
			foreach ($params as $key => $val) {
				$config[$key] = $val;
			}
		}

		// Load the Sessions class
		$this->CI->load->library('session', $config);

		// Grab the shopping cart array from the session table, if it exists
		if ($this->CI->session->userdata('cart_contents') !== FALSE) {
			$this->_cart_contents = $this->CI->session->userdata('cart_contents');
		} else {
			// No cart exists so we'll set some base values
			$this->_cart_contents['cart_total'] = 0;
			$this->_cart_contents['subtotal'] = 0;
			$this->_cart_contents['total_vat'] = 0;
			$this->_cart_contents['total_items'] = 0;
			$this->_cart_contents['total_weights'] = 0;
			$this->_cart_contents['shipping'] = 0;
			$this->_cart_contents['discount'] = 0;
		}
		log_message('debug', "Cart Class Initialized");
	}

	// --------------------------------------------------------------------

	/**
	 * Insert items into the cart and save it to the session table
	 *
	 * @access	public
	 * @param	array
	 * @return	bool
	 */
	function insert($items = array())
	{

		// Was any cart data passed? No? Bah...
		if (!is_array($items) or count($items) == 0) {
			log_message('error', 'The insert method must be passed an array containing data.');
			return FALSE;
		}



		// You can either insert a single product using a one-dimensional array,
		// or multiple products using a multi-dimensional one. The way we
		// determine the array type is by looking for a required array key named "id"
		// at the top level. If it's not found, we will assume it's a multi-dimensional array.

		$save_cart = FALSE;
		if (isset($items['id'])) {
			if (($rowid = $this->_insert($items))) {
				$save_cart = TRUE;
			}
		} else {
			foreach ($items as $val) {
				if (is_array($val) and isset($val['id'])) {
					if ($this->_insert($val)) {
						$save_cart = TRUE;
					}
				}
			}
		}


		// Save the cart data if the insert was successful
		if ($save_cart == TRUE) {
			$this->_save_cart();
			return isset($rowid) ? $rowid : TRUE;
		}

		//return $save_cart;
		return FALSE;
	}

	// --------------------------------------------------------------------

	/**
	 * Insert
	 *
	 * @access	private
	 * @param	array
	 * @return	bool
	 */
	function _insert($items = array())
	{
		// Was any cart data passed? No? Bah...
		if (!is_array($items) or count($items) == 0) {
			log_message('error', 'The insert method must be passed an array containing data.');
			return FALSE;
		}

		// --------------------------------------------------------------------

		// Does the $items array contain an id, quantity, price, and name?  These are required
		if (!isset($items['id']) or !isset($items['qty']) or !isset($items['price']) or !isset($items['name'])) {
			log_message('error', 'The cart array must contain a product ID, quantity, price, and name.');
			return FALSE;
		}

		// --------------------------------------------------------------------

		// Prep the quantity. It can only be a number.  Duh...
		$items['qty'] = trim(preg_replace('/([^0-9])/i', '', $items['qty']));
		// Trim any leading zeros
		$items['qty'] = trim(preg_replace('/(^[0]+)/i', '', $items['qty']));

		// If the quantity is zero or blank there's nothing for us to do
		if (!is_numeric($items['qty']) or $items['qty'] == 0) {
			return FALSE;
		}

		// --------------------------------------------------------------------

		// Validate the product ID. It can only be alpha-numeric, dashes, underscores or periods
		// Not totally sure we should impose this rule, but it seems prudent to standardize IDs.
		// Note: These can be user-specified by setting the $this->product_id_rules variable.
		if (!preg_match("/^[" . $this->product_id_rules . "]+$/i", $items['id'])) {
			log_message('error', 'Invalid product ID.  The product ID can only contain alpha-numeric characters, dashes, and underscores');
			return FALSE;
		}

		// --------------------------------------------------------------------

		// Validate the product name. It can only be alpha-numeric, dashes, underscores, colons or periods.
		// Note: These can be user-specified by setting the $this->product_name_rules variable.
		if (!preg_match("/^[" . $this->product_name_rules . "]+$/i", $items['name'])) {
			log_message('error', 'An invalid name was submitted as the product name: ' . $items['name'] . ' The name can only contain alpha-numeric characters, dashes, underscores, colons, and spaces');
			//return FALSE;
		}

		// --------------------------------------------------------------------

		// Prep the price.  Remove anything that isn't a number or decimal point.
		// $items['price'] = trim(preg_replace('/([^0-9\.])/i', '', $items['price']));
		// Trim any leading zeros
		// $items['price'] = trim(preg_replace('/(^[0]+)/i', '', $items['price']));

		// Is the price a valid number?
		if (!is_numeric($items['price'])) {
			log_message('error', 'An invalid price was submitted for product ID: ' . $items['id']);
			return FALSE;
		}

		// --------------------------------------------------------------------

		// We now need to create a unique identifier for the item being inserted into the cart.
		// Every time something is added to the cart it is stored in the master cart array.
		// Each row in the cart array, however, must have a unique index that identifies not only
		// a particular product, but makes it possible to store identical products with different options.
		// For example, what if someone buys two identical t-shirts (same product ID), but in
		// different sizes?  The product ID (and other attributes, like the name) will be identical for
		// both sizes because it's the same shirt. The only difference will be the size.
		// Internally, we need to treat identical submissions, but with different options, as a unique product.
		// Our solution is to convert the options array to a string and MD5 it along with the product ID.
		// This becomes the unique "row ID"
		if (isset($items['options']) and count($items['options']) > 0) {
			$rowid = md5($items['id'] . implode('', $items['options']));
		} else {
			// No options were submitted so we simply MD5 the product ID.
			// Technically, we don't need to MD5 the ID in this case, but it makes
			// sense to standardize the format of array indexes for both conditions
			$rowid = md5($items['id']);
		}




		// --------------------------------------------------------------------

		// Now that we have our unique "row ID", we'll add our cart items to the master array

		// let's unset this first, just to make sure our index contains only the data from this submission
		unset($this->_cart_contents[$rowid]);
		//echo $rowid;
		//print_r($items);
		//exit();


		// Create a new index with our new row ID
		$this->_cart_contents[$rowid]['rowid'] = $rowid;



		// And add the new items to the cart array
		foreach ($items as $key => $val) {

			$this->_cart_contents[$rowid][$key] = $val;
		}
		/*echo "<pre>";
		print_r($this->_cart_contents[$rowid]);
		echo "</pre>";
*/
		// Woot!
		//return $rowid;
		return $this->_cart_contents[$rowid];
	}

	// --------------------------------------------------------------------

	/**
	 * Update the cart
	 *
	 * This function permits the quantity of a given item to be changed.
	 * Typically it is called from the "view cart" page if a user makes
	 * changes to the quantity before checkout. That array must contain the
	 * product ID and quantity for each item.
	 *
	 * @access	public
	 * @param	array
	 * @param	string
	 * @return	bool
	 */
	function update($items = array())
	{
		// Was any cart data passed?
		if (!is_array($items) or count($items) == 0) {
			return FALSE;
		}

		// You can either update a single product using a one-dimensional array,
		// or multiple products using a multi-dimensional one.  The way we
		// determine the array type is by looking for a required array key named "id".
		// If it's not found we assume it's a multi-dimensional array
		$save_cart = FALSE;
		if (isset($items['rowid']) and isset($items['qty'])) {
			if ($this->_update($items) == TRUE) {
				$save_cart = TRUE;
			}
			//print_r($items);
		} else {

			foreach ($items as $val) {
				if (is_array($val) and isset($val['rowid']) and isset($val['qty'])) {
					if ($this->_update($val) == TRUE) {
						$save_cart = TRUE;
					}
				}
			}
		}

		// Save the cart data if the insert was successful
		if ($save_cart == TRUE) {
			$this->_save_cart();
			// e($this->_cart_contents,1);
			return TRUE;
		}
		// e('helo',0);
		// e($this->_cart_contents,1);

		return FALSE;
	}

	// --------------------------------------------------------------------

	/**
	 * Update the cart
	 *
	 * This function permits the quantity of a given item to be changed.
	 * Typically it is called from the "view cart" page if a user makes
	 * changes to the quantity before checkout. That array must contain the
	 * product ID and quantity for each item.
	 *
	 * @access	private
	 * @param	array
	 * @return	bool
	 */
	function _update($items = array())
	{
		// Without these array indexes there is nothing we can do
		if (!isset($items['qty']) or !isset($items['rowid']) or !isset($this->_cart_contents[$items['rowid']])) {
			return FALSE;
		}

		// Prep the quantity
		$items['qty'] = preg_replace('/([^0-9])/i', '', $items['qty']);

		// Is the quantity a number?
		if (!is_numeric($items['qty'])) {
			return FALSE;
		}

		// Is the new quantity different than what is already saved in the cart?
		// If it's the same there's nothing to do
		if ($this->_cart_contents[$items['rowid']]['qty'] == $items['qty']) {
			return FALSE;
		}

		if ($this->_cart_contents[$items['rowid']]['price'] != $items['price']) {
			$this->_cart_contents[$items['rowid']]['price'] = $items['price'];
		}

		// Is the quotemeta(str)antity zero?  If so we will remove the item from the cart.
		// If the quantity is greater than zero we are updating
		if ($items['qty'] == 0) {
			unset($this->_cart_contents[$items['rowid']]);
		} else {
			$this->_cart_contents[$items['rowid']]['qty'] = $items['qty'];

			if (isset($items['actual_price'])) {
				$this->_cart_contents[$items['rowid']]['actual_price'] = $items['actual_price'];
			}
			if (isset($items['discounting_type'])) {
				$this->_cart_contents[$items['rowid']]['discounting_type'] = $items['discounting_type'];
			}
			if (isset($items['special_price_type'])) {
				$this->_cart_contents[$items['rowid']]['special_price_type'] = $items['special_price_type'];
			}
			if (isset($items['special_price'])) {
				$this->_cart_contents[$items['rowid']]['special_price'] = $items['special_price'];
			}
			if (isset($items['tier_price'])) {
				$this->_cart_contents[$items['rowid']]['tier_price'] = $items['tier_price'];
			}
			if (isset($items['weight'])) {
				$this->_cart_contents[$items['rowid']]['weight'] = $items['weight'];
			}
		}

		return TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * Save the cart array to the session DB
	 *
	 * @access	private
	 * @return	bool
	 */
	function _save_cart()
	{
		// Unset these so our total can be calculated correctly below
		unset($this->_cart_contents['total_items']);
		unset($this->_cart_contents['total_vat']);
		unset($this->_cart_contents['total_weights']);
		unset($this->_cart_contents['cart_total']);

		// Lets add up the individual prices and set the cart sub-total
		$total = 0;
		$tax_total = 0;
		$subtotal = 0;
		$items = 0;
		$weights = 0;
		$tax_amount = defined('DWS_TAX') ? DWS_TAX : 0.00;
		$discountedAmount = 0;
		$discount_type   = $this->CI->session->userdata('discount_type');
		$discount_amount = $this->CI->session->userdata('discount_amount');

		foreach ($this->_cart_contents as $key => $val) {
			$taxableAmount = 0;
			// We make sure the array contains the proper indexes
			if (!is_array($val) or !isset($val['price']) or !isset($val['qty'])) {
				continue;
			}
			$is_taxable = $val['is_taxable'];
			$this->_cart_contents[$key]['discount'] = 0;
			if($discount_amount > 0) {
				if($discount_type == 'percentage') {
					$this->_cart_contents[$key]['discount'] = round(floatval($val['price']) * floatval($val['qty']) * floatval($discount_amount) / 100.00,2);
				}
			}
			else {
				$this->_cart_contents[$key]['discount'] = 0;
				// unset($this->_cart_contents[$key]['discount']);
			}
			$discountedAmount += $this->_cart_contents[$key]['discount'];
			$item_price = round(floatval($val['price']) * floatval($val['qty']) - $this->_cart_contents[$key]['discount'],2);
			if ($is_taxable) {
				$tmp = floatval($val['price'])  * floatval($val['qty']) - $this->_cart_contents[$key]['discount'];
				$tmp = $tmp * floatval($tax_amount) / 100.00;
				$this->_cart_contents[$key]['vat'] = round($tmp,2);
				$tax_total += $tmp;
			}
			else {
				$this->_cart_contents[$key]['vat'] = 0.00;
			}
			$total += $item_price;
			$items += $val['qty'];
			$weights += ($val['weight'] * $val['qty']);
			// Set the subtotal
			$this->_cart_contents[$key]['subtotal'] = $item_price;
		}

		// Set the cart total and total items.
		$this->_cart_contents['total_discounted_amount'] = $discountedAmount;
		$this->_cart_contents['total_items'] = $items;
		$this->_cart_contents['total_weights'] = $weights;
		$this->_cart_contents['cart_total'] = $total;
		$this->_cart_contents['subtotal'] = $total;
		$this->_cart_contents['total_vat'] = $tax_total;
		// Is our cart empty?  If so we delete it from the session
		if (count($this->_cart_contents) <= 2) {
			$this->CI->session->unset_userdata('cart_contents');

			// Nothing more to do... coffee time!
			return FALSE;
		}

		// If we made it this far it means that our cart has data.
		// Let's pass it to the Session class so it can be stored
		$this->CI->session->set_userdata(array('cart_contents' => $this->_cart_contents));

		// Woot!
		return TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * Cart Total
	 *
	 * @access	public
	 * @return	integer
	 */
	function total()
	{
		return $this->_cart_contents['cart_total'];
	}

	// --------------------------------------------------------------------

	/**
	 * Total Items
	 *
	 * Returns the total item count
	 *
	 * @access	public
	 * @return	integer
	 */
	function total_items()
	{
		return $this->_cart_contents['total_items'];
	}

	/**
	 * Total Items
	 *
	 * Returns the total item count
	 *
	 * @access	public
	 * @return	integer
	 */
	function total_weights()
	{
		return $this->_cart_contents['total_weights'];
	}

	/**
	 * Total Items
	 *
	 * Returns the total item count
	 *
	 * @access	public
	 * @return	integer
	 */
	function total_vat()
	{
		return $this->_cart_contents['total_vat'];
	}


	// --------------------------------------------------------------------

	/**
	 * Cart Contents
	 *
	 * Returns the entire cart array
	 *
	 * @access	public
	 * @return	array
	 */
	function contents()
	{
		$cart = $this->_cart_contents;

		// Remove these so they don't create a problem when showing the cart table

		unset($cart['total_items']);
		unset($cart['cart_total']);

		if (isset($cart['total_discounted_amount'])) {
			unset($cart['total_discounted_amount']);
		}

		if (isset($cart['total_vat'])) {
			unset($cart['total_vat']);
		}

		if (isset($cart['total_weights'])) {
			unset($cart['total_weights']);
		}

		if (isset($cart['coupon_code'])) {
			unset($cart['coupon_code']);
		}
		if (isset($cart['coupon_type'])) {
			unset($cart['coupon_type']);
		}
		if (isset($cart['coupon_value'])) {
			unset($cart['coupon_value']);
		}
		if (isset($cart['discounted_amount'])) {
			unset($cart['discounted_amount']);
		}
		if (isset($cart['subtotal'])) {
			unset($cart['subtotal']);
		}

		if (isset($cart['shipping'])) {
			unset($cart['shipping']);
		}
		if (isset($cart['discount'])) {
			unset($cart['discount']);
		}
		if (isset($cart['coupon_type']) || empty($cart['coupon_type'])) {
			unset($cart['coupon_type']);
		}
		if (isset($cart['coupon_value']) || empty($cart['coupon_type'])) {
			unset($cart['coupon_value']);
		}

		return $cart;
	}

	// --------------------------------------------------------------------
	//
	//	/**
	//	 * Total Items
	//	 *
	//	 * Returns the total item count
	//	 *
	//	 * @access	public
	//	 * @return	integer
	//	 */
	function extraData($shipping = FALSE)
	{
		$data = [];
		$cart = $this->_cart_contents;

		if (isset($cart['total_discounted_amount'])) {
			$data['total_discounted_amount'] = $cart['total_discounted_amount'];
		}

		if (isset($cart['total_vat'])) {
			$data['total_vat'] = $cart['total_vat'];
		}

		if (isset($cart['coupon_code'])) {
			$data['coupon_code'] = $cart['coupon_code'];
		}
		if (isset($cart['coupon_type'])) {
			$data['coupon_type'] = $cart['coupon_type'];
		}
		if (isset($cart['coupon_value'])) {
			$data['coupon_value'] = $cart['coupon_value'];
		}
		if (isset($cart['coupon_value'])) {
			$data['coupon_value'] = $cart['coupon_value'];
		}
		if (isset($cart['discounted_amount'])) {
			$data['discounted_amount'] = $cart['discounted_amount'];
		}
		if (isset($shipping)) {
			$data['shipping'] = $shipping;
		}
		if (isset($cart['tax'])) {
			$data['tax'] = $cart['tax'];
		}
		if (isset($cart['subtotal'])) {
			$data['subtotal'] = $cart['subtotal'];
		}
		if (isset($cart['cart_total'])) {
			$data['cart_total'] = $cart['cart_total'] + $shipping;
		}
		if (isset($cart['discount'])) {
			$data['discount'] = $cart['discount'];
		}
		return $data;
	}

	// --------------------------------------------------------------------
	/**
	 * Has options
	 *
	 * Returns TRUE if the rowid passed to this function correlates to an item
	 * that has options associated with it.
	 *
	 * @access	public
	 * @return	array
	 */
	function has_options($rowid = '')
	{
		if (!isset($this->_cart_contents[$rowid]['options']) or count($this->_cart_contents[$rowid]['options']) === 0) {
			return FALSE;
		}

		return TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * Product options
	 *
	 * Returns the an array of options, for a particular product row ID
	 *
	 * @access	public
	 * @return	array
	 */
	function product_options($rowid = '')
	{
		if (!isset($this->_cart_contents[$rowid]['options'])) {
			return array();
		}

		return $this->_cart_contents[$rowid]['options'];
	}

	// --------------------------------------------------------------------

	/**
	 * Format Number
	 *
	 * Returns the supplied number with commas and a decimal point.
	 *
	 * @access	public
	 * @return	integer
	 */
	function format_number($n = '')
	{
		if ($n == '') {
			return '';
		}

		// Remove anything that isn't a number or decimal point.
		$n = trim(preg_replace('/([^0-9\.])/i', '', $n));

		return number_format($n, 2, '.', ',');
	}

	// --------------------------------------------------------------------

	/**
	 * Destroy the cart
	 *
	 * Empties the cart and kills the session
	 *
	 * @access	public
	 * @return	null
	 */
	function destroy()
	{
		unset($this->_cart_contents);

		$this->_cart_contents['cart_total'] = 0;
		$this->_cart_contents['total_items'] = 0;
		$this->_cart_contents['total_weights'] = 0;

		$this->CI->session->unset_userdata('cart_contents');
	}

	function applyCouponCode()
	{
		return $this->_save_cart();
	}
}
// END Cart Class

/* End of file Cart.php */
/* Location: ./system/libraries/Cart.php */
