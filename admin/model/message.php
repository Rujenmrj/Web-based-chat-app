<?php
include_once('database.php');
include_once('session.php');
class Message{
    function postmessage($mess){
        $username=$_SESSION['user'];
        $inchat=$_SESSION['inchat'];
        $message=trim($mess," ");
        if($message!=''){
            $sql="INSERT INTO message(message, messagefrom, messageto, sentdatetime) VALUES ('$message','$username','$inchat',CURRENT_TIMESTAMP)";
            $message=new Database();
            $message->Insertqry($sql);
        }
        return;
    }
    function loadmessage(){
        $username=$_SESSION['user'];
        $inchat=isset($_SESSION['inchat'])?$_SESSION['inchat']:'';
        // $inchat=$_SESSION['inchat'];
        $sql="SELECT * FROM message WHERE messagefrom='$inchat' and messageto='$username' or messagefrom='$username' and messageto='$inchat' ORDER BY sentdatetime DESC";
        $message=new Database();
        $arr=$message->Selectqry($sql);
        if(!isset($_SESSION['inchat'])){
            echo "<div class='emptychat flexcenter' style='position: relative; bottom: 50%;'><p style='font-size:30; font-weight:bold;'>Start a conversation</p></div>";
        }

        return $arr;
    }
}
?>