<?php
include_once('database.php');
include_once('session.php');
class Message{
    function postmessage($message){
        $username=$_SESSION['username'];
        $inchat="Rujen";
        if($message!=''){
            $sql="INSERT INTO message(message, messagefrom, messageto, sentdatetime) VALUES ('$message','$username','$inchat',CURRENT_TIMESTAMP)";
            $message=new Database();
            $message->Insertqry($sql);
        }
        return;
    }
    function loadmessage(){
        $username=$_SESSION['username'];
        $inchat="Rujen";
        // $inchat=$_SESSION['inchat'];
        $sql="SELECT * FROM message WHERE messagefrom='$inchat' and messageto='$username' or messagefrom='$username' and messageto='$inchat' ORDER BY sentdatetime DESC";
        $message=new Database();
        $arr=$message->Selectqry($sql);
        return $arr;
    }
}
?>