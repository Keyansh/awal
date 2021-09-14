<script src="<?= base_url() ?>assets/ckeditor/ckeditor.js"></script>
<script src="<?= base_url() ?>assets/ckfinder/ckfinder.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>
<style>
    .main-div #procat li,
    #subcat li {
        width: 100%;
        margin-bottom: 15px;
        list-style: none;
    }

    .main-div #procat li label,
    #subcat li label {
        width: 100%;
    }

    #mayalsolike {
        max-width: 80%;
    }

    .main-div .block-element {
        font-size: 18px;
        font-weight: bold;
        text-align: left;
        color: #263388;
    }

    .left-div .btn.dropdown-toggle.btn-default {
        height: 45px;
    }

    .middle-div .list-inline,
    #procat .list-inline {
        border: 1px solid lightgray;
        padding: 0 10px;
    }

    .sub-a-cat {
        display: inline-block;
        margin: auto;
        border: 1px solid lightgray;
        padding: 0px 20px 0 20px;
        background: #495d80;
        color: white;
        text-transform: capitalize;
    }

    .submit-sub-cat {
        text-align: center;
    }

    .sub-a-cat:hover {
        color: white;
    }

    .middle-div .col-sm-2.control-label.block-element {
        width: 100%;
    }

    .right-div .col-sm-2.control-label.block-element {
        width: 100%;
    }

    .main-div {
        margin-bottom: 100px;
    }
</style>
<h3 class="title-hero clearfix">
    Add Projects
    <a href="projects" class="pull-right btn btn-primary">Manage Projects</a>
</h3>
<div class="panel">
    <div class="panel-body">
        <?php $this->load->view('inc-messages'); ?>
        <form action="projects/add" method="post" enctype="multipart/form-data" name="add_frm" id="add_frm">
            <div class="example-box-wrapper">
                <ul id="myTab" class="nav clearfix nav-tabs">
                    <li class="active"><a href="#main" data-toggle="tab">Main</a></li>
                    <li><a href="#tabs-3" data-toggle="tab">Images</a></li>
                    <li class="tabs-6"><a href="#tabs-4" data-toggle="tab">Product used</a></li>
                    <li><a href="#tabs-5" data-toggle="tab">Video</a></li>
                    <li><a href="#tabs-7" data-toggle="tab">Fields</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="main">
                        <div class="form-group clearfix">
                            <label class="col-sm-2 control-label">Title <span class="error">*</span></label>
                            <div class="col-sm-6">
                                <input name="title" type="text" class="form-control" id="title" value="<?php echo set_value('title'); ?>" size="40">
                            </div>
                        </div>
                        <!-- <div class="form-group clearfix">
                            <label class="col-sm-2 control-label">Architect <span class="error">*</span></label>
                            <div class="col-sm-6">
                                <input name="architect" type="text" class="form-control" id="architect" value="<?php echo set_value('architect'); ?>" size="40">
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-sm-2 control-label">Contractor <span class="error">*</span></label>
                            <div class="col-sm-6">
                                <input name="contractor" type="text" class="form-control" id="contractor" value="<?php echo set_value('contractor'); ?>" size="40">
                            </div>
                        </div> -->
                        <div class="form-group clearfix">
                            <label class="col-sm-2 control-label">URI</label>
                            <div class="col-sm-6">
                                <input name="url_alias" type="text" class="form-control" id="url_alias" value="<?php echo set_value('url_alias'); ?>" size="40">
                                &nbsp;(Will be auto-generated if left blank)
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-sm-2 control-label">Project Type</label>
                            <div class="col-sm-6">
                                <select name="project_cat" id="" class="form-control">
                                    <option value="">--select--</option>
                                    <?php foreach ($projecttype as $item) { ?>
                                        <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <?php $this->load->view("cropimage"); ?>
                        <div class="form-group clearfix">
                            <label class="col-sm-2 control-label">Short Description</label>
                            <div class="col-sm-10">
                                <textarea cols="80" class="ckeditor" name="short_contents" rows="10">
                            </textarea>
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-sm-2 control-label">Full Description</label>
                            <div class="col-sm-10">
                                <textarea cols="80" class="ckeditor" name="contents" rows="10">

                            </textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 main-div main-div-top">
                            <div class="form-group clearfix col-xs-12 ">
                                <label class="col-sm-2 control-label block-element">New</label>
                                <div class="col-sm-6 ">
                                    <input type="radio" name="homepage_active" value="1" <?php echo set_radio('is_like_active', '1'); ?> /> Yes&nbsp;&nbsp;
                                    <input type="radio" name="homepage_active" value="0" <?php echo set_radio('is_like_active', '0', TRUE); ?> /> No
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-3">
                        <div id="my-dropzone" class="dropzone dz-clickable ">
                            <div class="dz-default dz-message">
                                <span>Drop files here to upload</span>
                            </div>
                        </div>
                        <p class="text-center">Upload size around 513*548. Max upload size limit <?= ini_get('upload_max_filesize') ?> </p>
                    </div>
                    <div class="tab-pane fade" id="tabs-4">
                        <div class="col-xs-12 main-div main-div-top">
                            <div class="form-group clearfix col-xs-12 ">
                                <label class="col-sm-2 control-label block-element">Want to active</label>
                                <div class="col-sm-6 ">
                                    <input type="radio" name="is_like_active" value="1" <?php echo set_radio('is_like_active', '1'); ?> /> Yes&nbsp;&nbsp;
                                    <input type="radio" name="is_like_active" value="0" <?php echo set_radio('is_like_active', '0', TRUE); ?> /> No
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 main-div">
                            <div class="col-xs-4 left-div">
                                <label class="col-sm-12 control-label block-element">Select Categorie </label>
                                <select name="maya" id="mayalsolike" class="form-control col-xs-12 selectpicker" data-live-search="true" data-live-search-style="startsWith">
                                    <option value="">--select--</option>
                                    <?php foreach ($parentcat  as $item) { ?>
                                        <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-xs-4 middle-div">
                                <div id="subcat"></div>
                            </div>
                            <div class="col-xs-4 right-div">
                                <div id="procat"></div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="tabs-5">
                        <div class="form-group clearfix">
                            <label class="col-sm-2 control-label">Video Thumb</label>
                            <div class="col-sm-6">
                                <input name="video_thumb" type="file" class="form-control">
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-sm-2 control-label">Video Link</label>
                            <div class="col-sm-6">
                                <input name="video_link" type="text" class="form-control" id="video_link" value="<?php echo set_value('video_link'); ?>" size="40">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-7">
                        <div class="col-xs-12 pluse-icon"><i class="fa fa-plus-square" style="font-size:30px;cursor:pointer;padding-left: 30px;" aria-hidden="true"></i></div>
                        <div class="col-xs-12 fields-main-div">

                        </div>
                    </div>
                    <p align="center"><input type="submit" name="button" id="button" value="Submit" class="btn btn-lg btn-primary"></p>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="<?= base_url() ?>assets/widgets/dropzone/dropzone.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        Dropzone.autoDiscover = false;
        $("#my-dropzone").dropzone({
            addRemoveLinks: true,
            init: function() {
                // Hack: Add the dropzone class to the element
                $(this.element).addClass("dropzone");
                this.on("removedfile", function(file) {
                    if (file) {
                        $.ajax({
                            url: "projects/deleteimg",
                            type: "POST",
                            data: {
                                "fileList": file.name
                            }
                        });
                    }
                });
                this.on("addedfile", function(file) {
                    alt = file.alt == undefined ? "" : file.alt;
                    file._captionLabel = Dropzone.createElement("<input type='hidden' name='image[]' value='" + file.name + "' >")
                    file._captionBox = Dropzone.createElement("<input type='hidden' class='productmain'  name='main[]' value='0' >");
                    file._captionRadio = Dropzone.createElement("<input type='radio' class='productradio' name='favradio'>");
                    file.previewElement.appendChild(file._captionLabel);
                    file.previewElement.appendChild(file._captionBox);
                    file.previewElement.appendChild(file._captionRadio);
                });
                this.on("sending", function(file, xhr, formData) {
                    formData.append('alt_text', file._captionBox.value);
                });
            },
            url: "<?php echo base_url(); ?>projects/upload"
        });
        $(document).on('click', '.productradio', function() {
            $('.productmain').val('0');
            $(this).prev('.productmain').val('1');
        });
    });
</script>
<script>
    var editor = CKEDITOR.replace('ckeditor');
    CKFinder.setupCKEditor(editor);
</script>

<script>
    $(document).ready(function() {
        $('.fa-plus-square').click(function(e) {
            var html = '';
            html += '<div class="form-group clearfix">';
            html += '<div class="col-lg-5">';
            html += '<input name="fieldname[]" class="form-control" placeholder="Name" required/>';
            html += '</div>';
            html += '<div class="col-lg-5">';
            html += '<input name="fieldvalue[]" class="form-control" placeholder="Value" required/>';
            html += '</div>';
            html += '<div class="col-lg-2">';
            html += '<i class="fa fa-window-close fa-4 fielddel" style="font-size:30px;cursor:pointer" aria-hidden="true"></i>';
            html += '</div>';
            html += '</div>';
            $('.fields-main-div').append(html);
        });
        $(document).on('click', '.fa-window-close.fielddel', function(e) {
            $(this).parent().parent().remove();
        });
    });
</script>
<script>
    $(document).ready(function() {


        $(document).on('change', '#mayalsolike', function() {
            var selcted_option = $(this).val();
            $.post('catalognew/product/getchildcat', {
                'selcted_option': selcted_option
            }, function(data) {
                var decode = jQuery.parseJSON(data);

                if (decode['subcat']) {
                    $('#procat').html('');
                    $('.middle-div').addClass('col-xs-4');
                    $('#subcat').html(decode['subcat']);
                }
                if (decode['products']) {
                    $('#subcat').html('');
                    $('.middle-div').removeClass('col-xs-4');
                    $('#procat').html(decode['products']);
                }
                if (decode['noproduct']) {
                    $('#procat').html('');
                    $('#subcat').html(decode['noproduct']);
                }
                console.log("true");
            });
        });
        $(document).on('click', '.submit-sub-cat .sub-a-cat', function(e) {
            e.preventDefault();
            var subcatlist = [];
            $("#subcat input:checked").each(function() {
                subcatlist.push($(this).val());
            });
            $.ajax({
                url: "catalognew/product/catGetProducts",
                type: 'POST',
                data: {
                    subcat_id: subcatlist,
                },
                success: function(data) {
                    var decode = jQuery.parseJSON(data);

                    if (decode['products']) {
                        $('#procat').html(decode['products']);
                    }
                }
            });
        });

    });
</script>