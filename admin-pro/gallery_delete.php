<?php
    include_once('connection.php');
    $sql_view = "SELECT gallery FROM gallery_tbl WHERE gallery_id = '".$_GET['id']."'";
    $rs_view = mysqli_query($con,$sql_view);
    if(!$rs_view)
    {
        die('No Record Found.'.mysqli_error($con));
    }
    $row_view = mysqli_fetch_array($rs_view);

    if ($row_view['gallery'] != "") 
{
    $filename = 'photos/service-image/' . $row_view['gallery'];
    unlink($filename);
}
$sql_delete = "DELETE FROM gallery_tbl WHERE gallery_id = '".$_GET['id']."'";
$rs_delete = mysqli_query($con,$sql_delete);
if(!$rs_delete)
{
    die('NoT Deleted.'.mysqli_error($con));
}
echo "<script>window.location = 'gallery_view.php';</script>";
?>