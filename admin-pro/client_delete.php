<?php
    include_once('connection.php');
    $sql_view = "SELECT profile 
    FROM client_tbl
    WHERE client_id = '".$_GET['id']."'";
$rs_view = mysqli_query($con,$sql_view);
if(!$rs_view)
{
die('No record Found.'.mysqli_error($con));
}
$row_view = mysqli_fetch_array($rs_view);

//echo $row_view['profile'];

if($row_view['profile'] != "")
{
//DELETE IMAGE IN FOLDER 'IMAGE/IMAGE_NAME'
$filename = 'photos/client-image/'.$row_view['profile'];
unlink($filename);
}

$sql_delete = "DELETE FROM client_tbl WHERE client_id = '".$_GET['id']."'";
$rs_view = mysqli_query($con,$sql_delete);
if(!$rs_view)
{
    die('Not Deleted.'.mysqli_error($con));
}
echo "<script>window.location = 'client_view.php';</script>";
?>