<?php
    include_once('header.php');
    $sql_edit = "SELECT * FROM form_tbl";
    $rs_edit = mysqli_query($con,$sql_edit);
    if(!$rs_edit)
    {
        die('No Record Found.'.mysqli_error($con));
    }
   $row_edit = mysqli_fetch_array($rs_edit);
?>
    <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">User Information</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Forms</li>
                        <li class="breadcrumb-item active">Form Layout</li>
                    </ol>
                </div>
                <div class="">
                <a href="form_view.php"><button class="btn waves-effect waves-light btn-block btn-primary"><i
                        class="mdi mdi-book-plus text-white"></i> View New User</button></a>
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
                                <h4 class="m-b-0 text-white">User Register  <i class="mdi mdi-account-circle"></i></h4>
                            </div>
                            <div class="card-body">
                                <form action="" method="post" name="form_user" id="form_user" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <h3 class="card-title">Person Info</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">First Name</label>
                                                    <input type="text" id="frst_name" name="frst_name" class="form-control" required value="<?php echo $row_edit['first_name']; ?>">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" id="lst_name" name="lst_name" class="form-control form-control-danger" required value="<?php echo $row_edit['last_Name']; ?>">
                                                 </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Gender</label>
                                                    <select class="form-control custom-select" name="slt_gender" id="slt_gender">
                                                    <option>--Select your Gender--</option>
                                                        <option value="Male" <?php if($row_edit['gender'] == 'Male'){echo "selected";} ?>>Male</option>
                                                        <option value="Female" <?php if($row_edit['gender'] == 'Female'){echo "selected";} ?>>Female</option>
                                                    </select>
                                                 </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Date of Birth</label>
                                                    <input type="date" class="form-control" name="frm_date" id="frm_date" value="<?php echo $row_edit['dob']; ?>">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" id="user_name" name="user_name" class="form-control form-control-danger" required value="<?php echo $row_edit['username']; ?>">
                                                 </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                     <label class="control-label">Password</label>
                                                    <input type="password" id="user_pswrd" name="user_pswrd" class="form-control form-control-danger" required value="<?php echo $row_edit['password']; ?>">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <h3 class="box-title m-t-40">Address</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Street</label>
                                                    <input type="text" class="form-control" name="txt_street" id="txt_street" value="<?php echo $row_edit['street']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" name="txt_city" id="txt_city" value="<?php echo $row_edit['city']; ?>">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <input type="text" class="form-control" name="txt_state" id="txt_state" value="<?php echo $row_edit['state']; ?>">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Post Code</label>
                                                    <input type="text" class="form-control" name="txt_post" id="txt_post" value="<?php echo $row_edit['post_code']; ?>">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <input type="text" class="form-control" name="txt_country"id="txt_country" value="<?php echo $row_edit['country']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                         <div class="form-group has-danger">
                                        <h4 class="card-title">Profile Photo</h4>
                                        <!-- <label for="input-file-now">Your so fresh input file — Default version</label> -->
                                        <input type="file" id="input-file-now" class="dropify" name="img_profile" id="img_profile" accept="image*/">
                                        <img src="photos/profile-image/<?php if ($row_edit['profile'] == "") 
                                        {
                                            echo 'user.png';
                                        } else {
                                            echo $row_edit['profile'];
                                        } ?>"
                                                width="50px" height="50px">
                                    </div>
                                            <!--/span-->
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success" name="btn_submit" id="btn_submit" onClick="return validForm()"> <i class="fa fa-check"></i> Save</button>
                                        <button type="button" class="btn btn-inverse" name="btn_cancel" id="btn_cancel">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
<?php

        if(isset($_POST['btn_submit']))
        {
            if (!empty($_FILES["img_profile"]["name"])) 
            {
                $filename = 'photos/profile-image/' . $row_edit['profile'];
                unlink($filename);
    
                $img = $_FILES["img_profile"]["name"];
    
                $tmp_name = $_FILES["img_profile"]["tmp_name"];
                if (is_uploaded_file($tmp_name)) 
                {
                    copy($tmp_name, "photos/profile-image/" . $img);
                }
            } else 
            {
                $img = $row_edit ['profile'];
            }
            $sql = "UPDATE form_tbl SET first_name = '".$_POST['frst_name']."',last_Name = '".$_POST['lst_name']."',gender = '".$_POST['slt_gender']."',dob = '".$_POST['frm_date']."',username = '".$_POST['user_name']."',password = '".$_POST['user_pswrd']."',street = '".$_POST['txt_street']."',city = '".$_POST['txt_city']."',state = '".$_POST['txt_state']."',post_code = '".$_POST['txt_post']."',country = '".$_POST['txt_country']."', profile = '".$img."'
            WHERE form_id = '".$_GET['id']."' ";
            $rs = mysqli_query($con,$sql);
            if(!$rs)
            {
                die('Not Updated.'.mysqli_error($con));
            }
            echo "<script>window.location = 'form_view.php';</script>";
        }
    include_once('footer.php');
?>