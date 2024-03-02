<?php
    include_once('header.php');
    $sql_view = "SELECT * FROM client_tbl";
    $rs_view = mysqli_query($con,$sql_view);
    if(!$rs_view)
    {
        die('No Record Found.'.mysqli_error($con));
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
            <h3 class="text-themecolor"> Client View </h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">pages</li>
                <li class="breadcrumb-item active">Table basic</li>
            </ol>
        </div>
        <div>
            <div class="col-md-12x align-self-center">
                <a href="client.php"><button class="btn waves-effect waves-light btn-block btn-primary"><i
                            class=" mdi  mdi-tag-faces"></i> Add New Client</button></a>
            </div>
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
    <div class="row">

        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <!-- <h4 class="card-title">Row grouping 123 </h4>
                        <h6 class="card-subtitle">Data table example</h6> -->
                    <div class="table-responsive m-t-40">
                        <table id="example" class="table display table-bordered table-striped">
                            <thead>
                                <tr>
                                      <th>#</th>
                                    <th>Profile</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                     <th>#</th>
                                    <th>Profile</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>

                            <?php
                                $counter = 0;
                                while ($row_view = mysqli_fetch_array($rs_view)) { ?>


                                    <tr>
                                        <td>
                                            <?php echo ++$counter; ?>
                                        </td>
                                       
                                        <td><img src="photos/client-image/<?php if ($row_view['profile'] == "") {
                                            echo 'user.png';
                                        } else {
                                            echo $row_view['profile'];
                                        } ?>"
                                                width="200px" height="150px"></td>
                                        <td class="text-nowrap">
                                            <a href="client_delete.php?id=<?php echo $row_view['client_id']; ?>"
                                                data-toggle="tooltip" data-original-title="Close"> <i
                                                    class="fa fa-close text-danger"></i> </a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content========================= -->  
<?php
    include_once('footer.php');
?>