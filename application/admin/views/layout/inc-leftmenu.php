<style>
    .collapseBtn {
        position: absolute;
        right: -26px;
        z-index: 1;
        background: #5e5858;
        color: black;
        border: none;
        font-size: 20px;
        padding: 0 6px 0 6px;
    }

    .barPageActive {
        margin-left: 0px !important;
    }

    .barActive {
        margin-left: -259px;
    }
</style>
<?php
$module = $CI->router->class;
$method = $CI->router->method;
?>
<!-- <button type="button" class="collapseBtn"><i class="fa fa-chevron-left" aria-hidden="true"></i></button> -->
<!-- <button type="button" class="collapseBtn"><i class="fa fa-bars"></i></button> -->
<div class="scroll-sidebar">
    <?php
    if ($CI->getUser()) {
        if (!$CI->isAccountType()) {
    ?>
            <ul id="sidebar-menu">
                <!-- <li class="<?= ($module == 'slideshow') ? 'current' : ''; ?>">
                    <a href="slideshow" title="Manage  Slider">
                        <i class="fa fa-desktop"></i>
                        <span>Manage Slider</span>
                    </a>
                </li> -->
                <li class="<?= ($module == 'customer') ? 'current' : ''; ?>">
                    <a href="customer/" title="Customer">
                        <i class="fa fa-stack-exchange"></i>
                        <span>Manage Customer</span>
                    </a>
                </li>
                <li class="<?= ($module == 'category') ? 'current' : ''; ?>">
                    <a href="catalog/category/" title="Elements">
                        <i class="fa fa-stack-exchange"></i>
                        <span>Manage Categories</span>
                    </a>
                </li>
                <!-- <li class="<?= ($module == 'userjourney') ? 'current' : ''; ?>">
                    <a href="userjourney" title="Elements">
                        <i class="fa fa-stack-exchange"></i>
                        <span>Manage User Journey</span>
                    </a>
                </li> -->

                <li class="<?= ($module == 'attribute') ? 'current' : ''; ?>">
                    <a href="catalog/attribute" title="Manage Attributes">
                        <i class="fa fa-list"></i>
                        <span>Manage Attributes</span>
                    </a>
                </li>

                <li class="<?= ($module == 'attrset') ? 'current' : ''; ?>">
                    <a href="catalog/attrset" title="Manage Attributes Set">
                        <i class="fa fa-bars"></i>
                        <span>Manage Attributes Set</span>
                    </a>
                </li>

                <li class="<?= ($module == 'product') ? 'current' : ''; ?>">
                    <a href="catalognew/product" title="Buttons">
                        <i class="fa fa-coffee"></i>
                        <span>Manage Products</span>
                    </a>
                </li>

                <li class="<?= ($module == 'newsletter') ? 'current' : ''; ?>">
                    <a href="newsletter" title="Manage Mailing List">
                        <i class="fa fa-desktop"></i>
                        <span>Manage Mailing List</span>
                    </a>
                </li>
                <li class="<?= ($module == 'enquiry') ? 'current' : ''; ?>">
                    <a href="enquiry" title="Manage Contact Enquiries">
                        <i class="fa fa-desktop"></i>
                        <span>Manage Contact Enquiries</span>
                    </a>
                </li>

                <li class="<?= ($module == 'projects') ? 'current' : ''; ?>">
                    <a href="projects" title="Manage Studio">
                        <i class="fa fa-desktop"></i>
                        <span>Manage Studio</span>
                    </a>
                </li>
                <li class="<?= ($module == 'projecttype') ? 'current' : ''; ?>">
                    <a href="projecttype" title="Manage Studio Category">
                        <i class="fa fa-desktop"></i>
                        <span>Manage Studio Category</span>
                    </a>
                </li>

                <!-- <li class="<?= ($module == 'cms') ? 'current' : ''; ?>">
                    <a href="#" title="Manage Enquiries">
                        <i class="fa fa-desktop"></i>
                        <span>Manage Enquiries</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li><a href="enquiry">Manage Contact Enquiries</a></li>
                            <li><a href="productenquiries">Manage Product Enquiries</a></li>
                        </ul>
                    </div>
                </li> -->
                <li class="<?= ($module == 'testimonial') ? 'current' : ''; ?>">
                    <a href="testimonial" title="Manage Testimonials">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                        <span>Manage Testimonials</span>
                    </a>
                </li>


                <li class="<?= ($module == 'cms') ? 'current' : ''; ?>">
                    <a href="#" title="Manage CMS">
                        <i class="fa fa-desktop"></i>
                        <span>Manage CMS</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li><a href="cms/page">Manage Pages</a></li>
                            <!-- <li><a href="cms/globalblock">Manage Globalblocks</a></li> -->
                            <li><a href="homepage">Manage Homepage Slides</a></li>
                            <li><a href="cms/menu">Manage Menus</a></li>
                        </ul>
                    </div>
                </li>

                <li class="<?= ($module == 'settings') ? 'current' : ''; ?>">
                    <a href="setting/settings" title="Manage CMS">
                        <i class="fa fa-cog"></i>
                        <span>Manage Config</span>
                    </a>
                </li>
            </ul>
        <?php
        } else {
        ?>
            <ul id="sidebar-menu">
                <li class="<?= ($module == 'catalog/product') ? 'current' : ''; ?>">
                    <a href="catalog/product" title="Manage Products">
                        <i class="fa fa-coffee"></i>
                        <span>Manage Products</span>
                    </a>
                </li>
            </ul>
    <?php
        }
    }
    ?>

</div>
<script>
    // $(document).ready(function() {
    //     $('.collapseBtn').click(function() {
    //         $('#page-sidebar').toggleClass('barActive');
    //         $('#page-content-wrapper #page-content').toggleClass('barPageActive');
    //         $('.collapseBtn .fa').toggleClass('fa-chevron-left fa-chevron-right');
    //     });
    // });
    $(document).ready(function() {
        $('.collapseBtn').click(function() {
            $('#page-sidebar').toggleClass('barActive');
            $('#page-content-wrapper #page-content').toggleClass('barPageActive');
            $('.collapseBtn .fa').toggleClass('fa-chevron-left fa-chevron-right');
        });
    });
</script>