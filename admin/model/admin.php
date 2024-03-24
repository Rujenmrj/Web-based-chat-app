<?php
include_once "database.php";
class Admin{
    private $id;
    private $user_name;
    private $date_of_birth;
    private $email;
    private $password;
    private $friend_list=['a'];

    function login(){
        $for_connection=new Database();
        // $for_connection->conn;
    }

}
$test=new Admin();

$test->login();
?>