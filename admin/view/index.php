<?php
include_once('admin/model/user.php');
session_start();
if(!isset($_SESSION['username'])&&!isset($_SESSION['password'])){
    header("Location:../view/login.php");
}
else{
    // $user=$_SESSION['user'];
    // $password=$_SESSION['password'];
    // $usr=new User();
    // $user->login($user,$password);
    header("Location:../view/home.php");
}
?>