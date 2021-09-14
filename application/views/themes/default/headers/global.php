<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script type="text/javascript">
    var DWS_BASE_URL = '<?php echo base_url(); ?>';
</script>
<?php $siteColor = getsitecolor();
$mainColor = json_decode($siteColor['config_json']);

?>
<style>
    :root {
        --blue: <?= $mainColor->color ?>;
    }
</style>

<script type="text/javascript">
    var DWS_TWITTER_ACCOUNT = '<?php echo DWS_TWITTER_ACCOUNT; ?>';
</script>

<link rel="shortcut icon" href="<?= $this->config->item('CONTACT_US_FILE_URL') . DWS_FAV_ICON ?>" />
<link rel="alternate" href="<?php echo current_url(); ?>" hreflang="en-gb" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

<?php
global $DWS_MIN_JS_ARR, $DWS_MIN_CSS_ARR, $DWS_JS_ARR, $DWS_CSS_ARR;

$DWS_MIN_CSS_ARR[] = 'css/bootstrap.min.css';

$DWS_MIN_CSS_ARR[] = 'css/slider/owl.theme.default.css';
// $DWS_MIN_CSS_ARR[] = 'css/animate.css';
$DWS_MIN_CSS_ARR[] = 'css/font-awesome.min.css';
$DWS_MIN_CSS_ARR[] = 'css/font-awesome.css';
$DWS_MIN_CSS_ARR[] = 'css/fancybox.css';
// $DWS_MIN_CSS_ARR[] = 'css/style_b.css';

$DWS_MIN_CSS_ARR[] = 'css/main.css';
$DWS_MIN_CSS_ARR[] = 'css/style.css';
$DWS_MIN_CSS_ARR[] = 'css/default_theme.css';
$DWS_MIN_CSS_ARR[] = 'css/my_theme.css';
$DWS_MIN_CSS_ARR[] = 'css/default_css.css';
$DWS_MIN_CSS_ARR[] = 'css/responsive.css';
$DWS_MIN_CSS_ARR[] = 'css/responsive1.css';

$DWS_MIN_JS_ARR[] = 'js/jquery.js';
$DWS_MIN_JS_ARR[] = 'js/bootstrap.js';
$DWS_MIN_JS_ARR[] = 'js/bootstrap-clockpicker.min.js';
$DWS_MIN_JS_ARR[] = 'js/jqueryuiblock.js';
$DWS_MIN_JS_ARR[] = 'js/jquery.fancybox.min.js';
$DWS_MIN_JS_ARR[] = 'js/grid-gallery.min.js';
$DWS_MIN_JS_ARR[] = 'js/owl.js';
$DWS_MIN_JS_ARR[] = 'js/jquery.lazy.min.js';
$DWS_MIN_JS_ARR[] = 'js/main.js';

//$DWS_MIN_JS_ARR[] = 'js/jquery-min.js';
?>