<?php
    include_once('header.php');
    if(isset($_POST['btn_client']))
    {
        $img = '';
        {
            if(!empty($_FILES['img_profile']["name"]))

            $img = $_FILES["img_profile"]["name"];

            $tmp_name = $_FILES["img_profile"]["tmp_name"];
            if(is_uploaded_file($tmp_name))
            {
                copy($tmp_name,"photos/client-image/" . $img);
            }
        }
        $sql = "INSERT INTO client_tbl (profile) VALUES ('".$img."')";
        $rs = mysqli_query($con,$sql);
        if(!$rs)
        {
            die('No Record Found.'.mysqli_error($con));
        }
        echo "<script>window.location = 'client_view.php';</script>";
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
            <h3 class="text-themecolor">Our Clients <i class="mdi mdi-tag-faces"></i></h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Slider</li>
            </ol>
        </div>
        <div class="col-md-12x align-self-center">
            <a href="client_view.php"><button class="btn waves-effect waves-light btn-block btn-primary"><i
                        class="mdi mdi-book-plus text-white"></i> View New Client</button></a>

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
                    <h4 class="m-b-0 text-white">Add New Image</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post" name="form_client" id="form_client" enctype="multipart/form-data">
                        <div class="form-body">
                            <div class="row">
                                <!-- </div> -->
                                <!-- IMAGE -->
                                <!-- <div class="row"> -->
                                <div class="col-lg-06 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Client Image Upload</h4>
                                            <input type="file" id="input-file-now" class="dropify" name="img_profile"
                                                id="img_profile" accept="image*/" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success" name="btn_client" id="btn_client"
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