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
    function loadmessage(){
        $sql="SELECT * FROM messages ORDER BY sentdate DESC";
        $qry=mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
        $count=mysqli_num_rows($qry);
        if($count>=1){
            $arr = [];
            // echo "<h3>We have $count records.</h3>";
            while($row=mysqli_fetch_array($qry)){
                array_push($arr,$row['message']);
                // echo "<tr>";
                // echo "<td>".$row['id']."</td>";
                // echo "<td>".$row['name']."</td>";
                // echo "<td>".$row['description']."</td>";
                // echo "<td><img src=../uploads/".$row['thumb']." width=200px></td>";
                // echo "<td>".$row['status']."</td>";
                // echo "<td> <a href=editdeletecategory.php?id=".$row['id']."&action=edit>EDIT</a> | <a href=editdeletecategory.php?id=".$row['id']."&action=delete>DELETE</a> </td>";
                // echo "</tr>";
            }
        }
        else{
            echo "<h1>Sorry no record Found</h1>";
        }
        return $arr;
    }
    function postmes($message,$sent){
        echo "reached postmes function";
        // $sql="INSERT INTO messages VALUES ($id,$message,$sent,currenttimestamp) ";
        $sql="INSERT INTO `messages`( `message`, `sender`, `sentdate`) VALUES ('$message','$sent',CURRENT_TIMESTAMP)";
        // mysqli_execute_query($this->conn, $sql) or die(mysqli_error($this->conn));
        $qry=mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
        if($qry){
            //uploading the file to uploads folder 
            echo "inserted $id $message $sent";
        }
    }
    function login($username,$password){
        $sql="SELECT * FROM users WHERE username=$user AND password=$password";
        $qry=mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
        if($qry){
            //uploading the file to uploads folder 
            echo "record found";
        }
    }
    function __destruct() {
        $this->discon();
        // echo "Database disconnected";
    }
}
// $Apikey="A5bw60cb4fkdq4qi2p68dzc3ezrud7yvr44zein9iwd0g88n086";
// $test=new Database();

?>