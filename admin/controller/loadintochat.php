<?php
include_once("../model/message.php");
class LoadInChat{
    function loadchat($inchatid){
        $_SESSION['inchat']=$inchatid;
        loadmessage();
    }
}
$pm=new LoadInChat();
$pm->loadchat();
?>