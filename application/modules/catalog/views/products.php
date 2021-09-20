<section id="bredcrumbs">
    <div class=" container-fluid site-container">
        <div class="col-xs-12 product_main_div null-padding">
            <ul class="breadcrumb about_page">
                <li><a href="<?= base_url() ?>">Home</a></li>
                <?= breadcrumb_navigation()  ?>
            </ul>
        </div>
    </div>
</section>
<?php
if ($sub_categories) {
?>
    <section id="category-listing-section">
        <div class="container-fluid">
            <div class="col-xs-12 category-listing-main-col null-padding">

                <div class="col-xs-12  left-content-col">

                    <div class="col-xs-12 common-heading-col low-margin">
                        <p class="arrow-heading"><?= $category['name'] ?></p>
                    </div>
                    <div class="col-xs-12 category-content-col null-padding">
                        <?= $category['description'] ?>
                    </div>

                    <div class="col-xs-12 category-listing-inner-col null-padding">
                        <?php

                        foreach ($sub_categories as $item) {
                            if (file_exists($this->config->item('CATEGORY_PATH') . $item['image']) && $item['image']) {
                                $image_url = resize($this->config->item('CATEGORY_PATH') . $item['image'], 523, 300, 'category-listing');
                            } else {
                                $image_url = resize(base_url() . 'images/a1.jpg', 523, 300, 'category-listing');
                            }
                        ?>
                            <div class="col-xs-12 col-sm-3 single-category-col">
                                <a href="<?php echo base_url() . $item['uri'] ?>">
                                    <div class="single-category-col-img-col">
                                        <img class=" img-responsive" class="" src="<?php echo $image_url ?>" alt="<?php echo $item['image_alt'] ?>">
                                    </div>
                                    <div class="single-category-col-descr-col">
                                        <p class="single-category-heading"><?php echo $item['name'] ?></p>
                                    </div>
                                </a>
                            </div>
                        <?php
                        }

                        ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php
}
?>
<section id="cat-list">
    <div class="container-fluid">
        <div class="col-xs-12 cat-list null-padding">

            <div class="col-xs-12  cat-list_right-col ">
                <div class="col-xs-12 products_col null-padding">
                    <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 products_left-col pro_full_width">
                        <div class="col-xs-12 cat-listing-main-div">
                            <div class="col-xs-12 common-heading-col">
                                <p class="arrow-heading"><?= $category['name'] ?></p>
                            </div>
                            <div class="col-xs-12 products-listing-ajx">
                                <?php
                                if (isset($products)) {
                                    foreach ($products as $item) :
                                        if (file_exists($this->config->item('PRODUCT_PATH') . $item['img']) && $item['img']) {
                                            $image_url = resize($this->config->item('PRODUCT_PATH') . $item['img'], 300, 300, 'product-listing-img');
                                        } else {
                                            $image_url = resize(FCPATH . 'images/a1.jpg', 300, 300, 'product-listing-img');
                                        }

                                ?>
                                        <div class="col-xs-12  col-sm-3 inner_products-outer ">
                                            <div class="col-xs-12  inner_products null-padding">
                                                <div class="product_img-col">
                                                    <a href="<?= base_url() . $item['uri']; ?>">
                                                        <img class=" img-responsive inner_pro_img" class="" src="<?= $image_url ?>" alt="<?= $item['imgalt']; ?>">
                                                    </a>
                                                </div>
                                                <div class="products-descr_col">
                                                    <p class="proheading-p">
                                                        <a class="product_heading" href="<?= base_url() . $item['uri']; ?>">
                                                            <?= $item['name']; ?>
                                                        </a>
                                                    </p>
                                                    <p class="products-dec">
                                                        <?= word_limiter(strip_tags($item['description']), 6) ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                <?php
                                    endforeach;
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 category-description-page-col null-padding">
                            <?= $category['description'] ?>
                        </div>
                    </div>

                    <?php if ($pagination) { ?>
                        <div class="product_pagination list-page-pagination">
                            <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12  pro_pagination_right null-padding">
                                <p class="tot-pro-detal" id="displaying-records">
                                    <?= "Displaying 1 -" . count($products) . ' ' . "of $pagination_data->total_rows products" ?>
                                </p>
                                <ul class="pagination">
                                    <div class="ajaxPagination">
                                        <?= $pagination; ?>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>


        </div>
    </div>
</section>






<!--shop by price-->
<link type="text/css" rel="stylesheet" href="<?= base_url() ?>css/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--shop by price-->
<script src="http://malsup.github.io/jquery.blockUI.js"></script>
<script type="text/javascript">
    var category_id = '<?php echo $category['id']; ?>';
    var category_url = '<?= $category_url ?>';
    var category_alias = '<?= $category_alias ?>';
    var min = parseInt('<?php echo intval($category_price_range['min_price']); ?>');
    var max = parseInt('<?php echo intval($category_price_range['max_price']); ?>');
    var minslider = parseInt('<?php echo intval($price_slider['min']); ?>');
    var maxslider = parseInt('<?php echo intval($price_slider['max']); ?>');
    var urlParameters = {
        attributes: {},
        brands: [],
        perpage: 0,
        maxprice: maxslider ? maxslider : max,
        minprice: minslider ? minslider : min,
        page: 1
    };
</script>

<script type="text/javascript">
    function changeTheUrl() {

        var urlShouldChange = false;
        var URL = '';

        if (Object.keys(urlParameters.attributes).length) {
            for (x in urlParameters.attributes)
                URL += "~" + x + "-" + urlParameters.attributes[x].join(',');
            urlShouldChange = true;
        }
        if (urlParameters.brands.length) {
            URL += "~brands-" + urlParameters.brands.join(',');
            urlShouldChange = true;
        }
        if (typeof urlParameters.maxprice == 'string' && typeof urlParameters.minprice == 'string') {
            URL += "~maxprice-" + urlParameters.maxprice + "~minprice-" + urlParameters.minprice;
            urlShouldChange = true;
        }
        if (urlParameters.perpage) {
            console.log(urlParameters.perpage);
            console.log(123);
            URL += "~perpage-" + urlParameters.perpage;
            urlShouldChange = true;
        }
        if (urlParameters.page > 0) {
            URL += "~page-" + urlParameters.page;
            urlShouldChange = true;
        }
        // if (!urlShouldChange)
        //     return;

        window.history.pushState('', '', category_url + URL);
        return URL;
    }

    $(document).ready(function() {
        var selected_min_price = 0;
        var selected_max_price = 0;
        var perPage = $('#perpagepro').val();
        var catURI = '<?php echo $this->uri->uri_string(); ?>';

        //Jaskaran filter code
        $(document).on('click', '.ajaxPagination a', function(e) {
            e.preventDefault();
            var objProp = $(this);
            var perpage = objProp.prop('href').split('/').pop();
            var perpage1 = objProp.prop('href').split('~page-').pop();
            var perPage = $('#perpagepro').val();
            var currentPage = +objProp.html();
            if (isNaN(currentPage))
                return;
            urlParameters.page = perpage1;
            filter("false", perpage, perPage);
        });
    });

    function filter(parameter) {
        if (parameter) {
            var no_offset = parameter;
        } else {
            var no_offset = '';
        }
        var url = category_alias + changeTheUrl();
        console.log(url);
        $('body').block({
            message: 'please wait...',
            css: {
                textAlign: 'center',
                color: '#fff',
                border: '0px solid #aaa',
                cursor: 'wait',
                backgroundColor: 'transparent'
            }
        });
        $.post('catalog/filter/index/' + url, {
            category_id,
            category_alias,
            url,
            no_offset
        }, function(data, status) {
            if (data)
                var re_data = data;
            else
                var re_data = '{"html":"<div>No records</div>"}';

            data = JSON.parse(re_data);

            if (data.html == '<div>No records</div>') {
                $('.products-listing-ajx').empty();
                $('#displaying-records').empty();
                $('body').unblock();
            } else {
                $('.ajaxPagination').html('');
                $('.products-listing-ajx').empty();
                $('#displaying-records').empty();

                $('.ajaxPagination').html(data.pagination);
                $('#displaying-records').html(data.displaying_records);
                $('.products-listing-ajx').html(data.html);
                $("HTML, BODY").animate({
                    scrollTop: 0
                }, 1000);

                $('body').unblock();
            }
        });
    }
</script>