<?php
include 'logindbconnect.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $dsql="delete from login where id=$id";
    if(mysqli_query($con,$dsql)){
        header('Location:loginread.php?success=Record Deleted');
    }
    else{
        header('Location:read.php');
    }
}