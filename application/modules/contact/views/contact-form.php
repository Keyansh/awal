<?php //e($address); 
?>
<style>
    #testimonals,
    #latest-project {
        display: none;
    }
</style>
<section id="single_product_col">
    <div class="container-fluid site-container">
        <div class="col-xs-12 product_main_div null-padding">
            <ul class="breadcrumb about_page">
                <li><a href="<?= base_url() ?>">Home</a></li>
                <li class="active"><a href="javascript:void(0)"><?= $page['title'] ?></a></li>
            </ul>
        </div>
    </div>
</section>

<section id="contact-parent-div">
    <div class="container-fluid site-container">
        <div class="contact-parent-div col-xs-12 padding-zero">
            <div class="contact-inner-div col-xs-12">

                <div class="head-contact col-xs-12 col-sm-3">
                    <ul class="contact-div customer-list list-inline col-xs-12 padding-zero">
                        <li class="list-div col-xs-12 col-sm-3">
                            <img src="images/4.jpg" alt="logo" class="img-responsive con-img">
                        </li>
                        <li class="list-inner col-xs-12 col-sm-9">
                            <p class="cust-text">customer service</p>
                            <a href="tel:<?= DWS_CALL_CUSTOMER_SERVICE ?>" class="con-tel"><?= DWS_CALL_CUSTOMER_SERVICE ?></a>
                        </li>
                    </ul>

                </div>
                <div class="head-contact col-xs-12 col-sm-3">
                    <ul class="contact-div list-inline  col-xs-12 padding-zero">
                        <li class="list-div col-xs-12 col-sm-3">
                            <img src="images/3.jpg" alt="logo" class="img-responsive con-img">
                        </li>
                        <li class="list-inner col-xs-12 col-sm-9">
                            <p class="cust-text">Join our mailing list</p>
                            <form action="" id="newsletterbtm">
                                <span id="error" style="display:none;color:red;">Wrong email</span>
                                <input type="text" id="newsletteremail" class="simple_div form-control" name="email_newsletter" required placeholder="Enter you email here">
                                <button type="submit" class="send-div">Join Now</button>
                            </form>
                        </li>
                    </ul>

                </div>
                <div class="head-contact col-xs-12 col-sm-3">
                    <ul class="contact-div list-inline  col-xs-12 padding-zero">
                        <li class="list-div col-xs-12 col-sm-3">
                            <img src="images/2.jpg" alt="logo" class="img-responsive con-img">
                        </li>
                        <li class="list-inner col-xs-12 col-sm-9">
                            <p class="cust-text">Email us</p>
                            <p class="email-text">click a button to fill out a brief form to email us directly.</p>
                            <a href="mailto:<?= DWS_EMAIL_ADMIN ?>" class="send-div">Send Email</a>
                        </li>
                    </ul>

                </div>
                <div class="head-contact col-xs-12 col-sm-3">
                    <ul class="contact-div list-inline  col-xs-12 padding-zero">
                        <li class="list-div col-xs-12 col-sm-3">
                            <img src="images/1.jpg" alt="logo" class="img-responsive con-img">
                        </li>
                        <li class="list-inner col-xs-12 col-sm-9">
                            <p class="cust-text">Become a Distributor</p>
                            <p class="email-text">click a button to fill out a brief form to become a distributor.
                            </p>
                            <a href="mailto:<?= DWS_EMAIL_CUSTOMER_SERVICE ?>" class="send-div">Send Email</a>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </div>
</section>





<section id="form-section">
    <div class="container-fluid site-container">
        <div class="form-section col-xs-12 padding-zero">
            <p class="hard-form-heading">get in touch</p>
            <?php $this->load->view('inc-messages'); ?>
            <form id="contact-form" name="form1" method="post" action="contact-us">
                <div class="form-inner-div col-xs-12">
                    <div class="form-inner-main-div col-xs-12">

                        <div class="simple-div col-xs-12 col-sm-5">
                            <li>
                                <label for="name">First name</label>
                                <input type="text" name="name" class="simple-text" value="<?= set_value('name'); ?>">
                            </li>
                        </div>
                        <div class="simple-div col-xs-12 col-sm-5">
                            <li>
                                <label for="name">Last name</label>
                                <input type="text" name="last_name" class="simple-text" value="<?= set_value('last_name'); ?>">
                            </li>
                        </div>

                        <div class="simple-div col-xs-12 col-sm-5">
                            <li>
                                <label for="email">Email</label>
                                <input type="text" name="email" class="simple-text" value="<?= set_value('email'); ?>">
                            </li>
                        </div>
                        <div class="simple-div col-xs-12 col-sm-5">
                            <li>
                                <label for="Contact Number">Contact number</label>
                                <input type="text" name="phone" class="simple-text" value="<?= set_value('phone'); ?>">
                            </li>
                        </div>
                    </div>

                    <div class="simple-div col-xs-12">
                        <li>
                            <label for="Company">Company</label>
                            <input type="text" name="company" class="simple-text" value="<?= set_value('company'); ?>">
                        </li>
                    </div>

                    <div class="message_div col-xs-12">
                        <li>
                            <label for="Message">Location</label>
                            <input type="text" name="location" class="simple-text" value="<?= set_value('location'); ?>">
                        </li>
                    </div>
                    <div class="contact-cstm-checkbox col-xs-12">
                        <label class="containerContact"> Agree to be contacted by our team
                            <input type="checkbox" value="1" name="contact_by_team" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="join-cstm-checkbox col-xs-12 form-group">
                        <label class="containerContact"> Agree to join our mailing list
                            <input type="checkbox" value="1" name="join_mail_list" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="recaptcha-form-div col-xs-12 form-group">
                        <div class="g-recaptcha cap-width-100" data-sitekey="<?= DWS_RECAPTCHA_SITE_KEY ?>"></div>
                    </div>
                    <div class="send-submit-div col-xs-12">
                        <li>
                            <button type="submit" class="send_div">Submit</button>
                        </li>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<div id="newsLetterPop" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title" >.</h4> -->
            </div>
            <div class="modal-body">
                <div class="main-pop-up-div">
                    <p class="product-to-view"> loading.. </p>
                </div>
            </div>

        </div>

    </div>
</div>


<script>
    $("#newsletterbtm").submit(function(e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        var inputval = $("#newsletteremail").val();
        var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(inputval);
        if (!re) {
            $('#error').show();
        } else {
            $('#error').hide();
            $.ajax({
                url: '<?php echo base_url(); ?>newsletter',
                type: "POST",
                data: $("#newsletterbtm").serialize(),
                success: function(data) {
                    var obj = JSON.parse(data);
                    if (obj['content']) {
                        $('#newsletteremail').val('');
                        $('#newsLetterPop .product-to-view').html(obj['content']);
                        $('#newsLetterPop').modal("show");
                        setTimeout(function() {
                            $('#newsLetterPop').modal("hide");
                            $('#newsLetterPop .product-to-view').html('loading..');
                        }, 3000);
                    } else {
                        if (obj['status'] == true) {
                            $('#newsletteremail').val('');
                            $('#newsLetterPop .product-to-view').html("Thankyou for joining our mailing list!");
                            $('#newsLetterPop').modal("show");
                            setTimeout(function() {
                                $('#newsLetterPop').modal("hide");
                                $('#newsLetterPop .product-to-view').html('loading..');
                            }, 3000);
                        } else {
                            alert("Error");
                        }
                    }
                }
            });
        }
    });
</script>