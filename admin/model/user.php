<?php
include_once('../controller/validate.php');
include_once('../model/session.php');
class User{
    private $id;
    private $user_name;
    private $date_of_birth;
    private $email;
    private $password;
    private $friend_list;
    // private $db=new Database;

    function __construct(){
        $this->friend_list=array();
    }
    function getfriendlist(){
        $username=$_SESSION['username'];
    }
    function login(){
        $this->user_name=$_POST['Username'];
        $this->password=$_POST['Password'];
        //validate
        if(!validate($this->user_name,$this->password)){
            unset($_POST);
            return;
        }
        $_SESSION['username']=$this->user_name;
    }
    function register(){
        //get values form input
        $username=$_POST['User'];
        $password=$_POST['Password'];
        // validate
        // insert into db
        //conect to db
        //run sql
        // prepare sql statement
        $sql="INSERT INTO users(email, password, created_at, updated_at) VALUES ('$email','$passeord',CURRENT_TIMESTAMP)";
        Insertqry($sql);
        //validate
        $db=new Database();
        // $db=new Database();
        if(!validate($username,$password)){
            if (count($_POST) > 0) {
                $_POST = array();
           }
            return;
        }
        $sql="SELECT * FROM users WHERE $user='$username' AND password='$password'";
        $result=$db->Selectqry($sql);
        while($row=mysqli_fetch_array($result)){
            $usrname=$row['username'];
            $pwd=$row['password'];
            $role=$row['role'];
            $status=$row['status'];
            //setting the username and password cookie
            setcookie("username", $uname, time()+60*60*24*15,"/");
            //redirect to admin/dashboard.php
            $_SESSION["username"]=$usname;
            $_SESSION["accesstime"]=date("YmdhisaD");
            if("admin"=="$role" ){
                header("Location:admin/dashboard.php");
            }
            else{
                header("Location:user/index.php");
            }
        }
    }
    function logout(){
        if (count($_POST) > 0 || count($_GET)>0) {
            $_POST = array();
            $_GET =array();
        }
        if(count($_SESSION)>0){
            $_SESSION = array();
        }
       header("Location:login.php");
    }

}
?>