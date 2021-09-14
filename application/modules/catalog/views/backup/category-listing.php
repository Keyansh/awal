<style>
    .cat-banner {
        font-size: 25px;
    }

    .red-color {
        color: red;
    }
</style>

<?php if (file_exists($this->config->item('CATEGORY_BANNER_PATH') . $category['category_banner']) && $category['category_banner']) { ?>
    <section id="page-banner-section">
        <div class="container-fluid">
            <div class="col-xs-12 null-padding">
                <img src="<?php echo $this->config->item('CATEGORY_BANNER_URL') . $category['category_banner'] ?>" class="img-responsive" />
            </div>
        </div>
    </section>
<?php } ?>

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
// e($sub_categories);
if ($sub_categories) {
?>
    <section id="category-listing-section">
        <div class="container-fluid">
            <div class="col-xs-12 category-listing-main-col null-padding">

                <div class="col-xs-12 col-sm-8 left-content-col">

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
                            <div class="col-xs-12 col-sm-6 single-category-col">
                                <a href="<?php echo base_url() . $item['uri'] ?>">
                                    <div class="single-category-col-img-col">
                                        <img class=" img-responsive" class="" src="<?php echo $image_url ?>" alt="<?php echo $item['image_alt'] ?>">
                                    </div>
                                    <div class="single-category-col-descr-col">
                                        <p class="single-category-heading"><?php echo $item['name'] ?></p>
                                        <div class="col-xs-12 single-category-description null-padding">
                                            <?php echo word_limiter(strip_tags($item['description']), 15); ?>
                                        </div>
                                        <a href="<?php echo base_url() . $item['uri'] ?>" class="site-outline-btn">View Products</a>
                                    </div>
                                </a>
                            </div>
                        <?php
                        }

                        ?>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-4 right-sidebar-col">
                    <?php $this->load->view('themes/' . THEME . '/layout/inc-latest-news-widget'); ?>
                </div>

            </div>
        </div>
    </section>
<?php
}
?>