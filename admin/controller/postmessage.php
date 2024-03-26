<?php
include_once("../model/message.php");
class postMessage{
    function postmessage(){
        $messages=new Message();
        $messages->postmessage($_POST['msg']);
    }
}
$pm=new postMessage();
$pm->postmessage();
?>