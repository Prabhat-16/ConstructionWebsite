<?php
include_once('header.php');
if (isset($_POST['btn_blog'])) 
{
    $img = ''; 

    if (!empty($_FILES["img_profile"]["name"])) 
    {
        $img = $_FILES["img_profile"]["name"];
        // echo "Uploaded Image: " . $img . "<br>";

        $tmp_name = $_FILES["img_profile"]["tmp_name"];
        if (is_uploaded_file($tmp_name)) 
        {
            copy($tmp_name, "photos/blog-image/" . $img);

        }
    }
    $sql = "INSERT INTO blog_tbl (blog_title,blog_tags,blog_category,photos,blog_description) VALUES('".$_POST['blg_title'] . "','" . $_POST['tag_line'] . "','" . $_POST['blg_category'] . "','".$img."','".$_POST['txt_description'] . "')";
    $rs = mysqli_query($con, $sql);
    if (!$rs) 
    {
        die('Not Inserted.' . mysqli_error($con));
    } 
    else 
    {
        // echo "Inserted";
        echo "<script>window.location = 'blog_view.php';</script>";
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
            <h3 class="text-themecolor">Blog's</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Form Layout</li>
            </ol>
        </div>
        <div class="">
            <a href="blog_view.php"><button class="btn waves-effect waves-light btn-block btn-primary"><i class="mdi mdi-book-plus text-white"></i> View New Blog</button></a>
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
                    <h4 class="m-b-0 text-white">Blog's <i class="mdi mdi-web"></i></h4>
                </div>
                <div class="card-body">
                    <form action="" method="post" name="frm_blog" id="frm_blog" enctype="multipart/form-data">
                        <div class="form-body">
                            <!-- <h3 class="card-title">Blog Adding</h3> -->
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Blog Title</label>
                                        <input type="text" id="blg_title" name="blg_title" class="form-control" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger">
                                        <label class="control-label">Tag Line</label>
                                        <input type="text" id="tag_line" name="tag_line" class="form-control form-control-danger" required>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group has-danger">
                                        <label class="control-label">Blog Category</label>
                                        <input type="text" id="blg_category" name="blg_category" class="form-control form-control-danger" required>
                                    </div>
                                </div>
                                </div>
                            

                            <div class="col-lg-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Blog Image</h4>
                                        <!-- <label for="input-file-now">Your so fresh input file — Default version</label> -->
                                        <input type="file" id="input-file-now" class="dropify" name="img_profile" id="img_profile" accept="image*/">
                                    </div>
                                </div>
                            </div>
                                        <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <!-- <div class="col-md-5 align-self-center"> -->
                    <h3 class="">Blog Description</h3>
                </div>
                
               
            </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <textarea class="summernote" name="txt_description"
                            id="txt_description"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                          
                    </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success" name="btn_blog" id="btn_blog" onClick="return validForm()"> <i class="fa fa-check"></i> Save</button>
                            <button type="button" class="btn btn-inverse" name="btn_cancel" id="btn_cancel">Cancel</button>
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