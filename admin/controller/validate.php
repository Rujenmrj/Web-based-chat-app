<?php
include_once('../widgets/errordisplay.php');
include_once('../model/database.php');
define("password_regex", "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/");
function validate($user,$password){
    if($user!='' && $password!=''){
        $encptpassword=md5($password);
        if(filter_var($user, FILTER_VALIDATE_EMAIL)){
            $sql="SELECT * FROM users WHERE email='$user' AND password='$encptpassword'";
        }
        else{
            $sql="SELECT * FROM users WHERE username='$user' AND password='$encptpassword'";
        }
        if(preg_match(@password_regex, $password)){
            $db=new Database();
            $result=$db->Selectqry($sql);
            if(mysqli_num_rows($result)==1){
                $row=mysqli_fetch_array($result);
                $usrname=$row['username'];
                $role=$row['role'];
                $status=$row['status'];
                //setting the username and password cookie
                setcookie("user", $usrname, time()+60*60*24*15,"/");
                //redirect to admin/dashboard.php
                if($status==1){
                    if("admin"=="$role" ){
                        header("Location:home.php");
                    }
                    else{
                        header("Location:home.php");
                    }
                }
            }
            else{
                throws("wrong credentials");
            }
        }
        else{
            throws("password should be minimum 8 characters must contain
            at least one uppercase letter
            at least one lowercase letter
            at least one digit
            at least one special character");
            return false;
        }
    }
    else{
        throws("Field is left empty");
        return false;
    }
    return true;
}


function registervalidation($user,$password,$confirmpassword){
    if($user!='' && $password!='' && $confirmpassword!=''){
        if($password!=$confirmpassword){
            throws("passwords do not match");
            return false;
        }
        $encptpassword=md5($password);
        if(preg_match(@password_regex, $password)){
            $db=new Database();
            $sql="INSERT INTO users(email, password) VALUES ('$user','$encptpassword')";
            $result=$db->Insertqry($sql);
            if($result){
                header("Location:verify.php");
            //     $row=mysqli_fetch_array($result);
            //     $usrname=$row['username'];
            //     $role=$row['role'];
            //     $status=$row['status'];
            //     //setting the username and password cookie
            //     setcookie("username", $usrname, time()+60*60*24*15,"/");
            //     //redirect to admin/dashboard.php
            //     $_SESSION["username"]=$usrname;
            //     $_SESSION["accesstime"]=date("YmdhisaD");
            //     if($status==1){
            //         if("admin"=="$role" ){
            //             header("Location:home.php");
            //         }
            //         else{
            //             header("Location:home.php");
            //         }
            //     }
            }
        }
        else{
            throws("password should be minimum 8 characters must contain
            at least one uppercase English letter
            at least one lowercase English letter
            at least one digit
            at least one special character");
            return false;
        }
    }
    else{
        throws("Field is left empty");
        return false;
    }
    return true;
}
?>