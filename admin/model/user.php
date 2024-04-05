<?php
// include_once('../widgets/errordisplay.php');
include_once('../controller/validate.php');
include_once('session.php');
class User{
    private $id;
    private $user_name;
    private $date_of_birth;
    private $email;
    private $password;
    private $friend_list;
    // private $db=new Database;

    function __construct(){
    }
    function getfriendlist(){
        $username=$_SESSION['username'];
    }
    function login($user='',$password=''){
        $this->user_name=isset($_POST['Username'])?$_POST['Username']:$user;
        $this->password=isset($_POST['Password'])?$_POST['Password']:$password;
        if(!validate($this->user_name,$this->password)){
            unset($_POST);
            return;
        }
        $_SESSION['user']=$this->user_name;
        $_SESSION['password']=$this->password;
        $_SESSION["accesstime"]=date("YmdhisaD");
    }
    function register(){
        $this->email=isset($_POST['Email'])?$_POST['Email']:'';
        $this->password=isset($_POST['Password'])?$_POST['Password']:'';
        $confirmpassword=isset($_POST['Confirm-Password'])?$_POST['Confirm-Password']:'';
        // validate
        if(!registervalidation($this->email,$this->password,$confirmpassword)){
            unset($_POST);
            return;
        }
        $_SESSION['email']=$this->email;
        $_SESSION['password']=$this->password;
        $_SESSION["accesstime"]=date("YmdhisaD");
    }
    function logout(){
        if (count($_POST) > 0 || count($_GET)>0) {
            $_POST = array();
            $_GET =array();
        }
        if(count($_SESSION)>0){
            unset($_SESSION);
        }
        session_destroy();
       header("Location:login.php");
    }

}
?>