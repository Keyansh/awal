<?php
$featured_products = offer_and_latest_and_new_products('featured');
?>
<section id="products">
    <div class="container-fluid">
        <div class="col-xs-12 homeproducts common-padding">
            <ul class="nav nav-pills" style="display: none;">
                <?php
                if ($featured_products) {
                ?>
                    <li class="active">
                        <a data-toggle="pill" href="#featured-prods">Featured Products</a>
                    </li>
                <?php } ?>
            </ul>
            <div class="tab-content">
                <?php
                if ($featured_products) {
                ?>
                    <div id="featured-prods" class="tab-pane fade in active">

                        <div class="col-xs-12 null-padding">
                            <p class="offer_heading">Featured Products</p>
                        </div>

                        <div class="products-main clear-parent">
                            <div class="col-xs-12 feature-pro-main-div-home">
                                <div class="" id="featureJK">
                                    <?php
                                    foreach ($featured_products as $featured) :
                                        if (file_exists($this->config->item('PRODUCT_PATH') . $featured['img']) && $featured['img']) {
                                            $featured_img = resize($this->config->item('PRODUCT_PATH') . $featured['img'], 248, 264, 'featured-products');
                                        } else {
                                            $featured_img = resize(FCPATH . 'images/a1.jpg', 248, 264, 'featured-products');
                                        }
                                        $least_price = $featured['price'];
                                        if ($least_price == 0 || $least_price == 0.00) {
                                            $least_price = get_least_child_price($featured['product_id']);
                                        }
                                        if (!$least_price) {
                                            $least_price = '0.00';
                                        }
                                    ?>
                                        <div class="item">
                                            <div class="col-xs-12  feature-pro-main-div-home-inner">
                                                <div class="feature-pro-main-div-home-img">
                                                    <a href="<?= base_url() . $featured['uri'] ?>">
                                                        <img class="img-responsive" src="<?= $featured_img ?>" alt="<?= $featured['imgalt'] ?>">
                                                    </a>
                                                </div>
                                                <div class="feature-pro-main-div-home-content">
                                                    <a href="<?= base_url() . $featured['uri'] ?>">
                                                        <p><?= $featured['name'] ?></p>
                                                    </a>
                                                    <?php
                                                    //                                                if ($this->session->userdata('CUSTOMER_ID')) {
                                                    echo "<p class='product_price'>";
                                                    if ($this->session->userdata('SELECTED_VAT') == 'exclusive_vat') {
                                                        if ($featured['is_offer_discount']) {
                                                            echo '<tree class="your_price"> </tree>' . ' <span class="pound-sim">' . DWS_CURRENCY_SYMBOL . '</span>' . number_format($featured['is_offer_discount'], 2);
                                                            echo "<span class='your_price strip-price'>" . DWS_CURRENCY_SYMBOL . $least_price . "</span><br>";
                                                            if ($featured['is_taxable'] == 1) {
                                                                echo '<span style="color:#999999" class="your_price">(' . DWS_CURRENCY_SYMBOL . number_format(($featured['is_offer_discount'] + $featured['is_offer_discount'] * DWS_TAX / 100), 2) . ' ' . 'Inc. VAT)</span>';
                                                            }
                                                        } else {
                                                            echo '<tree class="your_price"> </tree>' . ' <span class="pound-sim">' . DWS_CURRENCY_SYMBOL . '</span>' . number_format($least_price, 2) . '<br>';
                                                            if ($featured['is_taxable'] == 1) {
                                                                echo '<span style="color:#999999" class="your_price">(' . DWS_CURRENCY_SYMBOL . number_format(($least_price + $least_price * DWS_TAX / 100), 2) . ' ' . 'Inc. VAT)</span>';
                                                            }
                                                        }
                                                    } elseif ($this->session->userdata('SELECTED_VAT') == 'inclusive_vat') {
                                                        if ($featured['is_offer_discount']) {
                                                            echo '<tree class="your_price"> </tree>' . ' <span class="pound-sim">' . DWS_CURRENCY_SYMBOL . '</span>' . number_format(($featured['is_offer_discount'] + $featured['is_offer_discount'] * DWS_TAX / 100), 2);
                                                            echo "<span class='your_price strip-price'>" . DWS_CURRENCY_SYMBOL . $least_price . "</span><br>";
                                                            if ($featured['is_taxable'] == 1) {
                                                                echo '<span style="color:#999999" class="your_price">(' . DWS_CURRENCY_SYMBOL . number_format($featured['is_offer_discount'], 2) . ' ' . 'Excl. VAT)</span>';
                                                            }
                                                        } else {
                                                            echo '<tree class="your_price"> </tree>' . ' <span class="pound-sim">' . DWS_CURRENCY_SYMBOL . '</span>' . number_format(($least_price + $least_price * DWS_TAX / 100), 2) . '<br>';
                                                            if ($featured['is_taxable'] == 1) {
                                                                echo '<span style="color:#999999" class="your_price">(' . DWS_CURRENCY_SYMBOL . number_format($least_price, 2) . ' ' . 'Excl. VAT)</span>';
                                                            }
                                                        }
                                                    } else {
                                                        if ($featured['is_offer_discount']) {
                                                            echo '<tree class="your_price"> </tree>' . ' <span class="pound-sim">' . DWS_CURRENCY_SYMBOL . '</span>' . number_format($featured['is_offer_discount'], 2);
                                                            echo "<span class='your_price strip-price'>" . DWS_CURRENCY_SYMBOL . $least_price . "</span><br>";
                                                            if ($featured['is_taxable'] == 1) {
                                                                echo '<span style="color:#999999" class="your_price">(' . DWS_CURRENCY_SYMBOL . number_format(($featured['is_offer_discount'] + $featured['is_offer_discount'] * DWS_TAX / 100), 2) . ' ' . 'Inc. VAT)</span>';
                                                            }
                                                        } else {
                                                            echo '<tree class="your_price"> </tree>' . ' <span class="pound-sim">' . DWS_CURRENCY_SYMBOL . '</span>' . number_format($least_price, 2) . '<br>';
                                                            if ($featured['is_taxable'] == 1) {
                                                                echo '<span style="color:#999999" class="your_price">(' . DWS_CURRENCY_SYMBOL . number_format(($least_price + $least_price * DWS_TAX / 100), 2) . ' ' . 'Inc. VAT)</span>';
                                                            }
                                                        }
                                                    }
                                                    echo "</p>";
                                                    //                                                }
                                                    ?>

                                                    <ul class="list-inline product-list-page-btn-ul">
                                                        <?php if (isset($featured['product_stock_status']) && $featured['product_stock_status'] == 0) { ?>
                                                            <li><a class="common_button product-list-page-btn" href="javascript:void(0)">Out of Stock !</a></li>
                                                        <?php } elseif (isset($featured['product_stock_status']) && $featured['product_stock_status'] == 1) { ?>
                                                            <li><a class="common_button product-list-page-btn" href="javascript:void(0)">Coming Soon !</a></li>
                                                        <?php } ?>
                                                    </ul>


                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>