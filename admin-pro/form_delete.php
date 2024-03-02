<?php
    include_once('connection.php');
    $sql_delete = "DELETE FROM form_tbl WHERE form_id = '".$_GET['id']."'";
    $rs_delete = mysqli_query($con,$sql_delete);
    if(!$rs_delete)
    {
        die('Not Deleted.'.mysqli_error($con));
    }
    echo "<script>window.location = 'form_view.php';</script>";
?>