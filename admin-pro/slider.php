<?php
    include_once('header.php');
    if(isset($_POST['btn_slider']))
    {
        $img = '';
        {
            if(!empty($_FILES["img_slider"]["name"]))
            $img = $_FILES["img_slider"]["name"];

            $tmp_name = $_FILES["img_slider"]["tmp_name"];
            if(is_uploaded_file($tmp_name))
            {
                copy($tmp_name,"photos/slider-image/" . $img);
            }
        }
        $sql = "INSERT INTO slider_tbl (slider_title,semi_title,tag_1,tag_2,tag_3,profile) VALUES ('".$_POST['txt_title']."','".$_POST['txt_semi']."','".$_POST['txt_tag1']."','".$_POST['txt_tag2']."','".$_POST['txt_tag3']."','".$img."')";
        $rs = mysqli_query($con,$sql);
        if(!$rs)
        {
            die('no Record Found.'.mysqli_error($con));
        }
        echo "<script>window.location = 'slider_view.php';</script>";
    }
?>
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Slider <i class="mdi mdi-arrange-bring-forward"></i></h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Slider</li>
            </ol>
        </div>
        <div class="col-md-12x align-self-center">
            <a href="slider_view.php"><button class="btn waves-effect waves-light btn-block btn-primary"><i
                        class="mdi mdi-book-plus text-white"></i> View New Slider</button></a>

            <button
                class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i
                    class="ti-settings text-white"></i></button>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Add New Slider</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post" name="frm_slider" id="frm_slider" enctype = "multipart/form-data">
                        <div class="form-body">
                            <div class="row">
                                <!-- <div class="row p-t-20"> -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Slider Title</label>
                                        <input type="text" id="txt_title" name="txt_title" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                                <!-- URL -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Semi Title</label>
                                        <input type="text" id="txt_semi" name="txt_semi" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tag 1</label>
                                        <input type="text" id="txt_tag1" name="txt_tag1" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tag 2</label>
                                        <input type="text" id="txt_tag2" name="txt_tag2" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tag 3</label>
                                        <input type="text" id="txt_tag3" name="txt_tag3" class="form-control"
                                            required>
                                    </div>
                                </div>
                                </div>
                        

                                <!-- IMAGE -->
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Slider Image Upload</h4>
                                            <!-- <label for="input-file-now">Your so fresh input file — Default
                                                version</label> -->
                                            <input type="file" id="input-file-now" class="dropify" name="img_slider" id="img_slider"  accept="image*/"/>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success" name="btn_slider" id="btn_slider"
                                onClick="return validForm()"> <i class="fa fa-check"></i> Save</button>
                                <button type="button" class="btn btn-inverse">Cancel</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->

    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
<?php
    include_once('footer.php');
?>