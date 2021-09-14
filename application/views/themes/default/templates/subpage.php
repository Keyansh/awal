<!DOCTYPE html>
<html lang="en-gb">

<head>
    <?php $this->load->view('themes/' . THEME . '/layout/inc-analytic.php'); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php echo cms_meta_tags(); ?>
    <?php $this->load->view("themes/" . THEME . "/meta/meta_index.php"); ?>
    <base href="<?php echo cms_base_url(); ?>" />
    <?php
    $this->load->view("themes/" . THEME . "/headers/global.php");
    echo cms_head();
    echo cms_css();
    echo cms_js();
    $this->load->view("themes/" . THEME . "/layout/inc-before-head-close.php");
    ?>
</head>

<body>
    <header id="header">
        <?php $this->load->view("themes/" . THEME . "/layout/inc-header.php"); ?>
    </header>


    <section id="single_product_col">
        <div class="container-fluid site-container">
            <div class="col-xs-12 product_main_div null-padding">
                <ul class="breadcrumb about_page">
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li class="active"><a href="javascript:void(0)"><?= $page['title'] ?></a></li>
                </ul>
            </div>
            <div class="col-xs-12 about_us_content cms-pages-main-col">
                <div class="col-xs-12 common-heading-col">
                    <p class="arrow-heading"><?php echo $page['title']; ?></p>
                </div>
                <?php
                if (isset($contents)) {
                    echo $contents;
                }
                ?>
            </div>
        </div>
    </section>

    <?php $this->load->view('themes/' . THEME . '/layout/inc-testimonals'); ?>

    <footer id="footer-section">
        <?php $this->load->view('themes/' . THEME . '/layout/inc-footer.php'); ?>
    </footer>
    <?php $this->load->view("themes/" . THEME . "/layout/inc-before-body-close.php"); ?>
</body>

</html>