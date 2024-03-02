<?php
    include_once('header.php');
    $sql_edit = "SELECT * FROM detail_tbl";
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
                    <h3 class="text-themecolor">Detail's</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Forms</li>
                        <li class="breadcrumb-item active">Form Layout</li>
                    </ol>
                </div>
                <div class="">
                <a href="detail_view.php"><button class="btn waves-effect waves-light btn-block btn-primary"><i
                        class="mdi mdi-book-plus text-white"></i> View New Detail</button></a>
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
                                <h4 class="m-b-0 text-white">Details  <i class="mdi mdi-account-card-details"></i></h4>
                            </div>
                            <div class="card-body">
                                <form action="" method="post" name="form_detail" id="form_detail">
                                    <div class="form-body">
                                        <h3 class="card-title">Client Detail</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Header Ph:No</label>
                                                    <input type="text" id="header_num" name="header_num"class="form-control" value="<?php echo $row_edit['header_no']; ?>" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Footer Ph:No</label>
                                                    <input type="text" id="footer_num" name="footer_num"  class="form-control form-control-danger" value="<?php echo $row_edit['footer_no']; ?>"required>
                                                 </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Email</label>
                                                    <input type="email" id="txt_email" name="txt_email" class="form-control form-control-danger" value="<?php echo $row_edit['detail_email']; ?>"required>
                                                 </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group has-success">
                                                    <label class="control-label"> 2nd Email</label>
                                                    <input type="email" id="txt_email2" name="txt_email2" class="form-control form-control-danger" value="<?php echo $row_edit['detail_email2']; ?>"required>
                                                 </div>
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
        $sql = "UPDATE detail_tbl SET header_no = '".$_POST['header_num']."',footer_no = '".$_POST['footer_num']."',detail_email = '".$_POST['txt_email']."',detail_email2 = '".$_POST['txt_email2']."'
        WHERE detail_id = '".$_GET['id']."' ";
        $rs = mysqli_query($con,$sql);
        if(!$rs)
        {
            die('Not Updated.'.mysqli_error($con));
        }
        echo "<script>window.location = 'detail_view.php';</script>";
    }
    include_once('footer.php');
?>