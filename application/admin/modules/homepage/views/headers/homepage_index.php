<script>
    var DWS_SLIDESHOW_ID = <?php echo $slideshow['slideshow_id']; ?>
</script>
<?php
global $DWS_MIN_JS_ARR, $DWS_JS_ARR, $DWS_MIN_CSS_ARR;

$DWS_MIN_CSS_ARR[] = 'css/menutree.css';
$DWS_JS_ARR[] = 'js/website/slide.js';
$DWS_JS_ARR[] = 'js/website/usp.js';
$DWS_JS_ARR[] = 'js/website/topcat.js';
$DWS_JS_ARR[] = 'js/website/homecat.js';
$DWS_JS_ARR[] = 'js/website/homeoffers.js';
?>