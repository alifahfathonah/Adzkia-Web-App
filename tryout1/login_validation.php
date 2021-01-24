<?php
    session_start();
    $username=$_SESSION['username'];
    $id_user=$_SESSION['id_user'];
    $status = $_SESSION['status'];
    //echo $id_user;

    if ($status == "admin") {
        header("location: ../admin");  
    }
    elseif ($status == "teamleader") {
    	header("location: ../admin");
    }
    elseif ($status == "cs") {
        header("location: ../admin");
    }
?>