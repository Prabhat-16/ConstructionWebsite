<?php
include_once('header.php');
?>

<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Profile</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">pages</li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </div>
        <div>
            <button
                class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10">
                <i class="ti-settings text-white"></i>
            </button>
        </div>
    </div>

    

    <div class="row">
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <div class="profile-image">
                        <img src="photos/profile-image/<?php echo $row_user_data['profile']; ?>" height="110" width="110" class="rounded-circle" alt="">
                    </div>
                    <h4>
                        <?php echo $row_user_data['first_name'] . " " . $row_user_data['last_Name']; ?>
                    </h4>
                    <h6 class="card-subtitle"></h6>
                </div>
            </div>
        </div>

        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" name="form_profile" id="form_profile">
                        <div class="form-group">
                            <label class="col-md-12">First Name</label>
                            <div class="col-md-12">
                                <input type="text" name="f_name" id="f_name"
                                    value="<?php echo $row_user_data['first_name']; ?>"
                                    class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Last Name</label>
                            <div class="col-md-12">
                                <input type="text" name="l_name" id="l_name"
                                    value="<?php echo $row_user_data['last_Name']; ?>"
                                    class="form-control form-control-line">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control custom-select" name="slt_gender" id="slt_gender">
                                    <option>--Select your Gender--</option>
                                    <option value="Male" <?php if ($row_user_data['gender'] == 'Male') {
                                        echo "selected";
                                    } ?>>Male</option>
                                    <option value="Female" <?php if ($row_user_data['gender'] == 'Female') {
                                        echo "selected";
                                    } ?>>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Date Of Birth</label>
                                <input type="date" class="form-control" name="frm_date" id="frm_date"
                                    value="<?php echo $row_user_data['dob']; ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="frm_user" id="frm_user"
                                    value="<?php echo $row_user_data['username']; ?>">
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <label class="col-md-12">Password</label>
                            <div class="col-md-12">
                                <input type="password" value="password" nam="frm_password" id="frm_password"
                                    class="form-control form-control-line"
                                    value="<?php echo $row_user_data['password']; ?>">
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Street</label>
                                <input type="text" class="form-control" name="txt_street" id="txt_street"
                                    value="<?php echo $row_user_data['street']; ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control" name="txt_city" id="txt_city"
                                    value="<?php echo $row_user_data['city']; ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" class="form-control" name="txt_state" id="txt_state"
                                    value="<?php echo $row_user_data['state']; ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Postcode</label>
                                <input type="text" class="form-control" name="txt_postcode" id="txt_postcode"
                                    value="<?php echo $row_user_data['post_code']; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12">Select Country</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" name="txt_country" id="txt_country"
                                    value="<?php echo $row_user_data['country']; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success" name="btn_success"
                                    id="btn_success">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once('footer.php');
if (isset($_POST['btn_success'])) 
{
    $sql = "UPDATE form_tbl SET first_name = '" .$_POST['f_name']."',last_Name ='".$_POST['l_name']."',gender = '" . $_POST['slt_gender'] . "',dob = '" . $_POST['frm_date'] . "',username = '" . $_POST['frm_user'] . "',street = '" . $_POST['txt_street'] . "',city = '" . $_POST['txt_city'] . "',state = '" . $_POST['txt_state'] . "',post_code = '" . $_POST['txt_postcode'] . "',country = '" . $_POST['txt_country'] . "'
    WHERE form_id ='".$row_user_data['form_id']."'";
    $rs = mysqli_query($con, $sql);
    if (!$rs) 
    {
        die('Not Updated.' . mysqli_error($con));
    } 
    else 
    {
        echo "<script>window.location = 'profile.php';</script>";
    }

}
?>