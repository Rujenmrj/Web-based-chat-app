<?php
include_once("../model/otp.php");
include_once("../model/database.php");
include_once("../model/session.php");
print_r($_POST);
if(isset($_POST['OTP'])){
        $otp=new OTP();
        if($_POST['OTP']===$otp->verifyotp()){
            $username=$_POST['Username'];
            $fullname=$_POST['FirstName']." ".$_POST['LastName'];
            $pic=$_POST['profilepic'];
            $email=$_SESSION['email'];
            $_SESSION['user']=$username;
            $_SESSION['fullname']=$fullname;
            $sql="UPDATE `users` SET username='$username',status=1 where email='$email'";
            $sql2="INSERT INTO `profiles`(`fullname`, `pic`, `username`, `onlinestatus`) VALUES ('$fullname','$pic','$username',1)";
            $db=new Database();
            if($db->Updateqry($sql) && $db->Insertqry($sql2)){
                header("location:home.php");
                return true;
            }
            return false;
        }
        else{
            header("location:verify.php");
            echo 'failed to verify';
            return false;
        }
    }
?>