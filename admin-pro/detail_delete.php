<?php
    include_once('connection.php');

    $sql_delete = "DELETE  FROM detail_tbl WHERE detail_id = '".$_GET['id']."'";
    $rs_view = mysqli_query($con,$sql_delete);
    if(!$rs_view)
    {
        die('Not Deleted.'.mysqli_error($con));
    }
    else
    {
        echo "<script>window.location = 'detail_view.php';</script>";
    }
?>