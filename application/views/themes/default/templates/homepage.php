<!DOCTYPE html>
<html lang="en-gb">

<head>
    <?php $this->load->view('themes/' . THEME . '/layout/inc-analytic.php'); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php echo cms_meta_tags(); ?>
    <?php $this->load->view('themes/' . THEME . '/meta/meta_index.php'); ?>
    <base href="<?php echo cms_base_url(); ?>" />
    <?php
    $this->load->view('themes/' . THEME . '/headers/global.php');
    echo cms_head();
    echo cms_css();
    echo cms_js();
    $this->load->view('themes/' . THEME . '/layout/inc-before-head-close.php');
    ?>
</head>

<body>
    <header id="header">
        <?php $this->load->view('themes/' . THEME . '/layout/inc-header'); ?>
    </header>
    <div class="wrapper">
        <?php $this->load->view('themes/' . THEME . '/layout/inc-homepage-slider'); ?>
        <?php $this->load->view('themes/' . THEME . '/layout/inc-all-products'); ?>
        <section class="blockes">
            <div class="container-fluid">
                <?php foreach ($blocks as $item) {
                    if ($item['type'] == "full_image") {
                        echo $item['content'];
                ?>
                <?php }
                } ?>
            </div>
        </section>

        <?php $this->load->view('themes/' . THEME . '/layout/inc-testimonals'); ?>
    </div>
    <footer id="footer-section">
        <?php $this->load->view('themes/' . THEME . '/layout/inc-footer.php'); ?>
    </footer>
    <?php $this->load->view('themes/' . THEME . '/layout/inc-before-body-close.php'); ?>
</body>

</html>