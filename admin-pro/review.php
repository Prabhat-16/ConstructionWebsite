<?php
    include_once('header.php');
    if (isset($_POST['btn_review'])) 
    {
        $img = ''; // Initialize the $img variable
        {
            if (!empty($_FILES["img_profile"]["name"]))
    
                $img = $_FILES["img_profile"]["name"];
            // echo "Uploaded Image: " . $img . "<br>";
    
            $tmp_name = $_FILES["img_profile"]["tmp_name"];
            if (is_uploaded_file($tmp_name)) 
            {
                copy($tmp_name, "photos/review-image/" . $img);
            }
        }
        $sql = "INSERT INTO review_tbl(name,profile,review) VALUES('".$_POST['txt_name']."','".$img."','".$_POST['txt_review']."')";
        $rs = mysqli_query($con,$sql);
        if(!$rs)
        {
            die('No Review Found.'.mysqli_error($con));
        }
        else
        {
            echo "Inserted";
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
            <h3 class="text-themecolor">Review <i class="mdi mdi-television-guide"></i></h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Form Layout</li>
            </ol>
        </div>
        <div class="col-md-12x align-self-center">
            <a href="review_view.php"><button class="btn waves-effect waves-light btn-block btn-primary"><i
                        class="mdi mdi-book-plus text-white"></i> View New Review</button></a>

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
                <h4 class="m-b-0 text-white">Leave Your Review Here</h4>
            </div>
            <div class="card-body">
                <form action="" method="post" name="frm_review" id="frm_review" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label> Name</label>
                                    <input type="text" class="form-control" name="txt_name" id="txt_name" required>
                                </div>
                            </div>
                            <!--/span-->
                            <!--/span-->
                        </div>
                        

                        <!--/row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Photo</label>
                                    <input type="file" id="input-file-now" class="dropify" name="img_profile"
                                                id="img_profile" accept="image*/" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <textarea class="summernote" name="txt_review"
                                            name="txt_review"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success" name="btn_review" id="btn_review" onClick="return validForm()"> <i
                                class="fa fa-check"></i> Save</button>
                        <button type="button" class="btn btn-inverse" name="btn_reset" id="btn_reset">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Row -->
</div>
<?php
    include_once('footer.php');
?>