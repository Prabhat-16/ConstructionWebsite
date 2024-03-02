<?php
include_once('header.php');
if(isset($_POST['btn_gallery']))
{
    $img = '';
    {
        if(!empty($_FILES["img_gallery"]["name"]))
        $img = $_FILES["img_gallery"]["name"];

        $tmp_name = $_FILES["img_gallery"]["tmp_name"];
        if(is_uploaded_file($tmp_name))
        {
            copy($tmp_name,"photos/service-image/" . $img);
        }
    }
    $sql = "INSERT INTO gallery_tbl (service_id,gallery) VALUES ('".$_POST['cmb_type']."','".$img."')";
    $rs = mysqli_query($con,$sql);
    if(!$rs)
    {
        die('Not Inserted.'.mysqli_error($con));
    }
    echo "<script>window.location = 'gallery_view.php';</script>";
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
            <h3 class="text-themecolor">Gallery</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Form Layout</li>
            </ol>
        </div>
        <div class="">
            <a href="gallery_view.php"><button class="btn waves-effect waves-light btn-block btn-primary"><i class="mdi mdi-book-plus text-white"></i> View New Gallery</button></a>
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
                    <h4 class="m-b-0 text-white">Gallery <i class="mdi mdi-image-multiple"></i></h4>
                </div>
                <div class="card-body">
                    <form action="" method="post" name="frm_gallery" id="frm_gallery" enctype="multipart/form-data">
                        <div class="form-body">
                            <!-- <h3 class="card-title">Blog Adding</h3> -->
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Service Type</label>
                                        <select class="form-control custom-select" name="cmb_type" id="cmb_type">
                                            <option>Select Your Service</option>
                                            <?php
                                                    $sql_service = "SELECT service_id,service_type FROM service_tbl";
                                                    $rs_service = mysqli_query($con,$sql_service);
                                                    if(!$rs_service)
                                                    {
                                                        die('No Record Found.'.mysqli_error($con));
                                                    }
                                                    while($row_service = mysqli_fetch_array($rs_service))
                                            {?>
                                            <option value="<?php echo $row_service['service_id']; ?>"><?php echo $row_service['service_type']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger">
                                        <h4 class="card-title">Gallery</h4>
                                        <!-- <label for="input-file-now">Your so fresh input file — Default version</label> -->
                                        <input type="file" id="input-file-now" class="dropify" name="img_gallery" id="img_gallery" accept="image*/">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->



                        </div>


                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success" name="btn_gallery" id="btn_gallery" onClick="return validForm()"> <i class="fa fa-check"></i> Save</button>
                    <button type="button" class="btn btn-inverse" name="btn_cancel" id="btn_cancel">Cancel</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include_once('footer.php');
?>