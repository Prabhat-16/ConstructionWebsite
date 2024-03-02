<?php
    
    session_start();  
    if(!$_SESSION['username'])
    {
        echo "<script>window.location = 'login.php';</script>";
    }
    else
    {
        unset($_SESSION['username']);      
        session_destroy();  
        echo "<script>window.location = 'login.php';</script>";
    }
    

?>