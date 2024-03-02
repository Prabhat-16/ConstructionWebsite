<?php
include_once('header.php');

$sql_view = "SELECT * FROM service_tbl WHERE  service_id = '" . $_GET['id'] . "'";
$rs_view = mysqli_query($con, $sql_view);
if (!$rs_view) {
    die('No Record Found.' . mysqli_error($con));
}
$row_view = mysqli_fetch_array($rs_view);
?>

<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Services <i class="mdi-wrench"></i></h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">service</li>
            </ol>
        </div>
        <div class="">
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
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Services <i class=" mdi mdi-wrench"></i></h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">service</li>
                </ol>
            </div>
            <div class="">
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

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <h4 class="m-b-0 text-white">Add New Services</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" name="frm_service" id="frm_service" enctype="multipart/form-data">
                            <div class="form-body">

                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label>Type Of Services</label>
                                            <input type="text" name="txt_type" id="txt_type"
                                                Value="<?php echo $row_view['service_type']; ?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Services Title</label>
                                            <input type="text" name="txt_title" id="txt_title"
                                                Value="<?php echo $row_view['title']; ?>" class="form-control">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Services Tag Line</label>
                                            <input type="text" name="txt_tag" id="txt_tag" class="form-control"
                                                Value="<?php echo $row_view['tag_line']; ?>">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Services's Image</h4>
                                                <input type="file" name="img_profile" id="img_profile" class="dropify"
                                                    accept="image/*" />
                                                <img src="photos/service-image/<?php if ($row_view['profile'] == "") 
                                                {
                                                    echo 'download.png';
                                                } 
                                                    else 
                                                {
                                                    echo $row_view['profile'];
                                                } ?>"
                                                    width="50px" height="50px">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <textarea class="summernote" name="txt_description"
                                                    id="txt_description"><?php echo $row_view['description'];?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="btn_service" id="btn_service"> <i
                                        class="fa fa-check"></i> Save</button>
                                <button type="button" class="btn btn-inverse">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->

    <?php
    include_once('footer.php');
    ?>

    <!-- wysuhtml5 Plugin JavaScript -->
    <script src="assets/plugins/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="assets/plugins/html5-editor/bootstrap-wysihtml5.js"></script>

    <script>
        $(document).ready(function () {

            $('.textarea_editor').wysihtml5();
        });
    </script>


    <?php
    if (isset($_POST['btn_service'])) 
    {
        if (!empty($_FILES["img_profile"]["name"])) 
        {
            $filename = 'photos/' . $row_view['profile'];
            unlink($filename);

            $img = $_FILES["img_profile"]["name"];

            $tmp_name = $_FILES["img_profile"]["tmp_name"];
            if (is_uploaded_file($tmp_name)) 
            {
                copy($tmp_name, "photos/service-image/" . $img);
            }
        } else {
            $img = $row_view['profile'];
        }

        $sql = "UPDATE service_tbl SET service_type = '" . $_POST['txt_type'] . "',title = '" . $_POST['txt_title'] . "',tag_line = '" . $_POST['txt_tag'] . "',profile = '" . $img . "',description = '" . $_POST['txt_description'] . "'
            WHERE service_id = '" . $_GET['id'] . "'";
        $rs = mysqli_query($con, $sql);
        if (!$rs) {
            die('Not Updated.' . mysqli_error($con));
        }
        echo "<script>window.location = 'service_view.php';</script>";
    }

    include_once('footer.php');
    ?>