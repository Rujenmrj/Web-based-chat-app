<?php
include_once('database.php');
class friend{
    function sendfriendrequest($user,$befriend){
        $db=new Database();
        $sql="INSERT INTO `friends`(`requestID`, `receiveID`) VALUES ('$user','$befriend')";
        $db->Insertqry($sql);
    }
}
?>