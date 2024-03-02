<?php
    include_once('connection.php');

    $sql_view = "SELECT photos 
                 FROM blog_tbl
                 WHERE blog_id = '".$_GET['id']."'";
$rs_view = mysqli_query($con,$sql_view);
if(!$rs_view)
{
die('No record Found.'.mysqli_error($con));
}
$row_view = mysqli_fetch_array($rs_view);

//echo $row_view['profile'];

if($row_view['photos'] != "")
{
//DELETE IMAGE IN FOLDER 'IMAGE/IMAGE_NAME'
$filename = 'photos/blog-image/'.$row_view['photos'];
unlink($filename);
}


    $sql_delete = "DELETE FROM blog_tbl WHERE blog_id = '".$_GET['id']."'";
    $rs_view = mysqli_query($con,$sql_delete);
    if(!$rs_view)
    {
        die('Not Deleted.'.mysqli_error($con));
    }
    // else
    // {
    //     header('location:register_view.php');
    // }
    echo "<script>window.location = 'blog_view.php';</script>";
    ?>