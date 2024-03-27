<?php
include_once("../model/message.php");
include_once("loadMessage.php");
// include("../model/session.php");
class LoadInChat{
    function loadchat(){
        echo "hello".$_POST['usertoload'];
        $_SESSION['inchat']=$_POST['usertoload'];
        $ld =new LoadMessage();
        $ld->loading();
    }
}
$pm=new LoadInChat();
$pm->loadchat();
$ld =new LoadMessage();
$ld->loading();
?>