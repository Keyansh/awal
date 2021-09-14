<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<section id="bredcrumbs">
    <div class=" container-fluid site-container">
        <div class="col-xs-12 product_main_div null-padding">
            <ul class="breadcrumb about_page">
                <?php echo $breadcrumbs; ?>
                <li class="active"><a href="javascript:void(0)"><?= $product['name'] ?></a></li>
            </ul>
        </div>
    </div>
</section>


<section id="product-detail-section">
    <div class="container-fluid site-container">
        <div class="product-detail-section col-xs-12 padding-zero">
            <div class="product-inner-div col-xs-12 col-sm-6 padding-zero">
                <div class="owl-carousel owl-theme slider-images" id="product-detail-slider">

                    <?php
                    if ($multiImages) {
                        foreach ($multiImages as $item) {
                            if (file_exists($this->config->item('PRODUCT_PATH') . $item['img'])) {
                                // $image_url = resize($this->config->item('PRODUCT_PATH') . $item['img'], 97, 103, 'product-main-image');
                                $main_image_url = resize($this->config->item('PRODUCT_PATH') . $item['img'], 453, 600, 'product-main-image');
                            } else {
                                // $image_url = resize(FCPATH . 'images/a1.jpg', 97, 103, 'product-main-image');
                                $main_image_url = resize(FCPATH . 'images/img-default.jpg', 453, 600, 'product-main-image');
                            }
                    ?>
                            <div class="item">
                                <a data-fancybox="gallery" href="<?= $main_image_url ?>">
                                    <img class="img-responsive product-img" src="<?= $main_image_url ?>" alt="<?= $item['imgalt'] ?>" data-imgid="<?= $item['sort_order']; ?>">
                                </a>
                            </div>
                        <?php
                        }
                    } else {
                        ?>
                        <div class="item">
                            <a href="images/img-default.jpg" data-fancybox="gallery">
                                <img class="img-responsive product-img" src="images/img-default.jpg" alt="img">
                            </a>
                        </div>

                    <?php } ?>

                </div>

                <?php if (count($multiImages) > 1) { ?>
                    <div id="project-thumb-slider" class="owl-carousel owl-theme">
                        <?php if ($multiImages) { ?>
                            <?php foreach ($multiImages as $item) {
                                if (file_exists($this->config->item('PRODUCT_PATH') . $item['img'])) {
                                    // $image_url = resize($this->config->item('PRODUCT_PATH') . $item['img'], 97, 103, 'product-main-image');
                                    $main_image_url = resize($this->config->item('PRODUCT_PATH') . $item['img'], 453, 600, 'product-main-image');
                                } else {
                                    // $image_url = resize(FCPATH . 'images/a1.jpg', 97, 103, 'product-main-image');
                                    $main_image_url = resize(FCPATH . 'images/img-default.jpg', 453, 600, 'product-main-image');
                                }
                            ?>
                                <div class="item ">
                                    <div class="product-thumb-div">
                                        <img class="img-responsive product-img" src="<?= $main_image_url ?>" alt="<?= $item['imgalt'] ?>" data-imgid="<?= $item['sort_order']; ?>">
                                    </div>
                                </div>
                            <?php }
                        } else {
                            ?>
                            <div class="item ">
                                <div class="product-thumb-div">
                                    <img src="images/img-default.jpg" alt="<?= $product['name'] ?>" class="img-responsive">
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>

            </div>
            <div class="product-inner-text-div col-xs-12 col-sm-6 ">
                <div class="product-desc-div col-xs-12 padding-zero">
                    <p class="hardware-consort-heading product-heading"> <?= $product['cname'] ?> - <?= $product['name'] ?></p>


                    <form name="cart_frm" method="post" action="" id="cart_frm">
                        <div class="attributesContainer col-xs-12 detail-page padding-zero">
                            <input type="hidden" name="pid" value="<?php echo $product['product_id'] ?>" />
                            <input type="hidden" name="cid" value="<?php echo $product['cid'] ?>" />
                            <input type="hidden" id="refresh" value="no">
                            <ul class="product-text-div col-xs-12 padding-zero">
                                <?php $getProductBulletPoints = getProductBulletPoints($product['product_id']);
                                foreach ($getProductBulletPoints as $bulletPoints) { ?>
                                    <li><?= $bulletPoints['bullet_points'] ?></li>
                                <?php } ?>
                                <li>
                                    <?php
                                    if (!empty($assigned_attrs)) {
                                    ?>
                                        <?php foreach ($assigned_attrs as $key => $attributes) {
                                            $OptionLable = OptionLable($key);
                                            if ($OptionLable['front_view'] == 'list') { ?>
                                                <ul class="product-listing-div list-inline">
                                                    <li class="product-attr-label"><?php echo $OptionLable['label']; ?></li>
                                                    <?php foreach ($attributes as $attribute) { ?>
                                                        <li>
                                                            <?php if ($attribute['option']) { ?>
                                                                <?php echo $attribute['option']; ?>
                                                            <?php } ?>
                                                            <?php if ($attribute['icon']) { ?>
                                                                <span>
                                                                    <img src="<?= $this->config->item('ATTRIBUTE_OPTION_ICON_URL') . $attribute['icon']; ?>" class="img-responsive" />
                                                                </span>
                                                            <?php } ?>

                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php } ?>

                                </li>
                                <li style="list-style: none;background: none;">
                                    <?php

                                    if (!empty($assigned_attrs)) {
                                    ?>
                                        <?php foreach ($assigned_attrs as $key => $attributes) {
                                            $OptionLable = OptionLable($key);
                                            if ($OptionLable['front_view'] == 'dropdown') { ?>

                                                <div class="product-listing-div ">
                                                    <p class="product-attr-label selectoption"><?php echo $OptionLable['label']; ?></p>
                                                    <select name="<?php echo str_replace(" ", "_", $OptionLable['label']); ?>" id="" class="form-control">
                                                        <?php foreach ($attributes as $attribute) { ?>
                                                            <option>
                                                                <?php if ($attribute['option']) { ?>
                                                                    <?php echo $attribute['option']; ?>
                                                                <?php } ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                        <?php }
                                        } ?>
                                    <?php } ?>

                                </li>
                            </ul>
                        </div>
                    </form>

                    <div class="pdf-link-div col-xs-12 padding-zero">
                        <?php if ($product['certification']) { ?>
                            <div class="pdf-main-div col-xs-12 col-sm-6">
                                <a href="<?= $this->config->item('PDF_URL') . $product['certification'] ?>" target="blank" style="display: inherit;">
                                    <div class="pdf-inner-div">
                                        <img src="images/adobe.png" alt="adobe-alt" class="adobe-img">
                                    </div>
                                    <p class="download-text">Download Certification</p>
                                </a>
                            </div>
                        <?php } ?>
                        <?php if ($product['datasheet']) { ?>
                            <div class="pdf-main-div col-xs-12 col-sm-6">
                                <a href="<?= $this->config->item('PDF_URL') . $product['datasheet'] ?>" target="blank" style="display: inherit;">
                                    <div class="pdf-inner-div">
                                        <img src="images/adobe.png" alt="adobe-alt" class="adobe-img">
                                    </div>
                                    <p class="download-text">Download DataSheet</p>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    $(document).ready(function() {

        var sync1 = $("#product-detail-slider");
        var sync2 = $("#project-thumb-slider");
        var slidesPerPage = 4; //globaly define number of elements per page
        var syncedSecondary = true;

        sync1.owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: false,
            // autoplay: true,
            dots: false,
            loop: false,
            margin: 10,
            responsiveRefreshRate: 200,

        }).on('changed.owl.carousel', syncPosition);

        sync2
            .on('initialized.owl.carousel', function() {
                sync2.find(".owl-item").eq(0).addClass("current");
            })
            .owlCarousel({
                items: 4,
                dots: false,
                nav: false,
                smartSpeed: 200,
                slideSpeed: 500,
                slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                responsiveRefreshRate: 100
            }).on('changed.owl.carousel', syncPosition2);

        function syncPosition(el) {
            //if you set loop to false, you have to restore this next line
            var current = el.item.index;

            //if you disable loop you have to comment this block
            // var count = el.item.count - 1;
            // var current = Math.round(el.item.index - (el.item.count / 2) - .5);

            // if (current < 0) {
            //     current = count;
            // }
            // if (current > count) {
            //     current = 0;
            // }

            //end block

            sync2
                .find(".owl-item")
                .removeClass("current")
                .eq(current)
                .addClass("current");
            var onscreen = sync2.find('.owl-item.active').length - 1;
            var start = sync2.find('.owl-item.active').first().index();
            var end = sync2.find('.owl-item.active').last().index();

            if (current > end) {
                sync2.data('owl.carousel').to(current, 100, true);
            }
            if (current < start) {
                sync2.data('owl.carousel').to(current - onscreen, 100, true);
            }
        }

        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                sync1.data('owl.carousel').to(number, 100, true);
            }
        }

        sync2.on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = $(this).index();
            sync1.data('owl.carousel').to(number, 300, true);
        });
    });
</script>

<section id="you-may-also-like-product">
    <?php $this->load->view('themes/' . THEME . '/layout/inc-you-may-like');
    ?>
</section>

<script>
    $(document).ready(function() {
        $('#you-may-like-product').owlCarousel({
            loop: false,
            margin: 10,
            nav: false,
            dots: false,
            items: 4,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1
                },
                767: {
                    items: 4
                }
            }
        })
    });

    $('[data-fancybox="gallery"]').fancybox({
        loop: true,
    });
</script>