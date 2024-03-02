<?php
include_once('header.php');
if(isset($_POST['btn_service']))
{
    $img='';
    if (!empty($_FILES["img_profile"]["name"]))
    {
        $img = $_FILES["img_profile"]["name"];

        $tmp_name = $_FILES["img_profile"]["tmp_name"];
        if (is_uploaded_file($tmp_name))
        {
            copy($tmp_name,"photos/service-image/" . $img);
        }
    }
    $sql = "INSERT INTO service_tbl (service_type,title,tag_line,profile,description) VALUES ('".$_POST['src_type']."','".$_POST['src_title']."','".$_POST['src_tagline']."','".$img."','".$_POST['src_description']."')";
    $rs = mysqli_query($con,$sql);
    if(!$rs)
    {
        die('Not Inserted.'.mysqli_error($con));
    }
    else
    {
        echo "<script>window.location = 'service_view.php';</script>";
    }

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
            <h3 class="text-themecolor">Service's</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Form Layout</li>
            </ol>
        </div>
        <div class="">
        <a href="service_view.php"><button class="btn waves-effect waves-light btn-block btn-primary"><i class="mdi mdi-book-plus text-white"></i> View New Service</button></a>
            <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
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
                    <h4 class="m-b-0 text-white">Service's <i class="mdi mdi-wrench"></i></h4>
                </div>
                <div class="card-body">
                    <form action="" method="post" name="service_frm" id="service_frm" enctype="multipart/form-data">
                        <div class="form-body">
                            <!-- <h3 class="card-title">Person Info</h3> -->
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Service Type</label>
                                        <input type="text" id="src_type" name="src_type" class="form-control">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger">
                                        <label class="control-label">Title</label>
                                        <input type="text" id="src_title" name="src_title" class="form-control form-control-danger">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group has-success">
                                        <label class="control-label">Tagline</label>
                                        <input type="text" id="src_tagline" name="src_tagline" class="form-control form-control">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Service Image</label>
                                        <input type="file" id="input-file-now" class="dropify" name="img_profile" id="img_profile" accept="image*/">
                                    </div>
                                </div>
                                <!--/span-->

                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row page-titles">
                                <!-- <div class="col-md-5 align-self-center"> -->
                                <h3 class="">Service Description</h3>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <textarea class="summernote" name="src_description" id="src_description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-success" name="btn_service" id="btn_service"> <i class="fa fa-check"></i> Save</button>
                    <button type="button" class="btn btn-inverse">Cancel</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Row -->
<?php
include_once('footer.php');
?>