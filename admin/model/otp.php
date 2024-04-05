<?php
include('session.php');
include('database.php');
class OTP{
 function createotp(){
        $otp=mt_rand(100000,999999);
        $username=$_SESSION['email'];
        $sql="INSERT IGNORE INTO `userotp`(`email`, `OTP`, `optstatus`) VALUES ('$username','$otp',1)";
        $db=new Database();
        $db->Insertqry($sql);
        return (string)$otp;
    }
    function createnewotp(){
        $otp=mt_rand(100000,999999);
        $username=$_SESSION['email'];
        $sql="UPDATE userotp SET OTP='$otp', optstatus=1 where email='$username'";
        $db=new Database();
        $db->Insertqry($sql);
        return $otp;
    }
    function otpused(){
        $username=$_SESSION['email'];
        $sql="UPDATE userotp SET optstatus=0 where email='$username'";
        $db=new Database();
        $db->Updateqry($sql);
    }
    function verifyotp(){
        $username=$_SESSION['email'];
        $sql="SELECT OTP FROM userotp WHERE optstatus=1 AND email='$username'";
        $db=new Database();
        $result=$db->Selectqry($sql);
        if($row = $result->fetch_assoc()){
            $this->otpused();
            return $row['OTP'];
        }
        return false;
    }
 }
?>