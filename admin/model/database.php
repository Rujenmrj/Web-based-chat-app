<?php

class Database{
    public $conn;
    function __construct(){
        $this->con();
    }
    function con(){
        $this->conn = new mysqli('localhost','root','','webapp');
        if(!$this->conn){
            die(mysqli_error($conn));
        }
        else {
            // echo '<script>console.log("database connected")</script>';
            // echo "Database connected<br>";
        }
    }
    function discon(){
        $this->conn=null;
    }
    function Insertqry($sql){
        $qry=mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
        if($qry){
            echo "Inserted";
        }
    }
    function Selectqry($sql){
        $qry=mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
        if($qry){
            // echo "Retrieved";
            return $qry;
        }
    }
    function Updateqry($sql){
        $qry=mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
        if($qry){
            echo "Updated";
            return qry;
        }
    }
    
    // function login($username,$password){
    //     $sql="SELECT * FROM users WHERE username=$user AND password=$password";
    //     $qry=mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
    //     if($qry){
    //         //uploading the file to uploads folder 
    //         echo "record found";
    //     }
    // }
    // function register($email,$password,$DOB){
        
        
    // }
    function __destruct() {
        $this->discon();
        // echo "Database disconnected";
    }
}
// $Apikey="A5bw60cb4fkdq4qi2p68dzc3ezrud7yvr44zein9iwd0g88n086";
// $test=new Database();

?>
<!-- CREATE TABLE friends(
    friendID int,
	requestID int,
    receiveID int,
    PRIMARY KEY(requestID,receiveID)
);
create TABLE profiles(
	profileID int PRIMARY KEY,
    pic VARCHAR,
    username varchar NOT NULL,
    online boolean DEFAULT 0,
    lastonline datetime,
    FOREIGN KEY(username) REFERENCES users(username) ON DELETE CASCADE on UPDATE CASCADE
); -->