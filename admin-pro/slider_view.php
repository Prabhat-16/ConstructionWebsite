<?php
    include_once('header.php');
    $sql_view = "SELECT * FROM slider_tbl";
    $rs_view = mysqli_query($con,$sql_view);
    if(!$rs_view)
    {
        die('No Record Found.'.mysqli_error($con));
    }
?>
   <!-- ============================================================== -->
   <!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor"> User Slider Lists</h3>
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
                <a href="slider.php"><button class="btn waves-effect waves-light btn-block btn-primary"><i
                            class=" mdi mdi-arrange-bring-forward"></i> Add New Slider</button></a>
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
                                <th>SR.No</th>
                                        <th>Slider Title</th>
                                        <th>Semi Title</th>
                                        <th>Tag 1</th>
                                        <th>Tag 2</th>
                                        <th>Tag 3</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                        <th>SR.No</th>
                                        <th>Slider Title</th>
                                        <th>Semi Title</th>
                                        <th>Tag 1</th>
                                        <th>Tag 2</th>
                                        <th>Tag 3</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>



                            <?php
                                        $counter = 0;
                                        while($row_view = mysqli_fetch_array(($rs_view)))
                                    {?>
                                    <tr>
                                        <td><?php echo ++$counter; ?></td>
                                        <td><?php echo $row_view['slider_title']; ?></td>
                                        <td><?php echo $row_view['semi_title']; ?></td>
                                        <td><?php echo $row_view['tag_1']; ?></td>
                                        <td><?php echo $row_view['tag_2']; ?></td>
                                        <td><?php echo $row_view['tag_3']; ?></td>
                                        <td><img src="photos/slider-image/<?php if($row_view['profile'] == ""){echo 'user.png';} else {echo $row_view['profile'];} ?>"width="200px" height="150px"></td>
                                        <td class="text-nowrap">
                                            <a href="slider_edit.php?id=<?php echo $row_view['slider_id']; ?>" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="slider_delete.php?id=<?php echo $row_view['slider_id']; ?>" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
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
    <!-- End PAge Content ========================= -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                        <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                        <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme working">7</a></li>
                        <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                    </ul>
                    <ul class="m-t-20 chatonline">
                        <li><b>Chat option</b></li>
                        <li>
                            <a href="javascript:void(0)"><img src="assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
<?php
    include_once('footer.php');
?>