<?php
    include_once('connection.php');
    $sql_delete = "DELETE FROM enquiry_tbl WHERE enquiry_id = '".$_GET['id']."'";
    $rs_view = mysqli_query($con,$sql_delete);
    if(!$rs_view)
    {
        die('Not Deleted.'.mysqli_error($con));
    }
    echo "<script>window.location = 'contact_view.php';</script>";
?>