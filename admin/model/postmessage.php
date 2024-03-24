<?php
include_once("database.php");
class postMessage{
    function postmessage(){
        echo "reached herestart postmessage";
        $msg=$_REQUEST['msg'];
        $uid=$_REQUEST['uid'];
        $db=new Database();
        $db->postmes($msg,$uid);
        echo "reached here postmessage";
    }
}
$pm=new postMessage();
$pm->postmessage();
?>