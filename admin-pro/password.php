<?php
include_once('header.php');
?>
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Password <i class="mdi mdi-key-change"></i></h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Form Layout</li>
            </ol>
        </div>
        <!-- <div class="col-md-12x align-self-center">
            <a href="register_view.php"><button class="btn waves-effect waves-light btn-block btn-primary"><i
                        class="mdi mdi-book-plus text-white"></i> View New Image</button></a>

            <button
                class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i
                    class="ti-settings text-white"></i></button>
        </div> -->
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
                    <h4 class="m-b-0 text-white">Change Password</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post" name="frm_password" id="frm_password"
                        onsubmit="return validatePassword()">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" class="form-control" name="pass_password"
                                            id="pass_password">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Confirm New Password</label>
                                        <input type="password" class="form-control" name="new_password"
                                            id="new_password">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->


                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success" name="btn_password" id="btn_password"
                                onClick="return validForm()"> <i class="fa fa-check"></i>Change Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
</div>
<script>
    function validatePassword() 
    {
        var newPassword = document.getElementById("pass_password").value;
        var confirmNewPassword = document.getElementById("new_password").value;

        if (newPassword === "" || confirmNewPassword === "") 
        {
            alert("Please fill in both password fields.");

            return false;
        }

        if (newPassword !== confirmNewPassword) 
        {
            alert("New password and confirm password do not match.");
            return false;
        }

        return true;
    }
</script>
<?php
include_once('footer.php');
if (isset($_POST['btn_password'])) 
{
    $sql = "UPDATE form_tbl SET password = '" . $_POST['pass_password'] . "'
    WHERE form_id ='" . $row_user_data['form_id'] . "'";
    $rs = mysqli_query($con, $sql);
    if (!$rs) 
    {
        die('Password Not Updated.' . mysqli_error($con));
    } 
        else 
    {
        echo "<script>window.location = 'password.php';</script>";
    }
}
?>