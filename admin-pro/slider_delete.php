<?php
    include_once('connection.php');
 $sql_view = "SELECT profile FROM slider_tbl WHERE slider_id = '".$_GET['id']."'";
 $rs_view = mysqli_query($con,$sql_view);
 if(!$rs_view)
 {
    die('No Record Found.'.mysqli_error($con));
 }
 $row_view = mysqli_fetch_array($rs_view);

 if($row_view['profile'] !="")
 {
    $filename = 'photos/slider-image/'.$row_view['profile'];
    unlink($filename);
 }

 $sql_delete = "DELETE  FROM slider_tbl WHERE slider_id = '".$_GET['id']."'";
 $rs_delete = mysqli_query($con,$sql_delete);
 if(!$rs_delete)
 {
    die('Not Deleted.'.mysqli_error($con));
 }
 echo "<script>window.location = 'slider_view.php';</script>";
 ?>