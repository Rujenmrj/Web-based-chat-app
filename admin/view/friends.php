<?php
    session_start();
    $_SESSION['uid']="newid";
    include_once "../widgets/MessageField.php";
    $messageField=new MessageField(
        $placeHolder="Enter Message",
        $class="icon"
    );
    // if(isset($_POST["submit"])){
    //     $getmessage=$_POST['message'];
    //     $uid=$_SESSION['uid'];
    //     session_destroy();
    //     include_once("../model/postmessage.php");
    //     $pm =new postMessage();
    //     $pm->postmessage($getmessage,"uid");
    // }
    include_once('nav.php');
    ?>
    <section class="section1">
    <div style="background:white;"><a href="#"><img src="../images/menu.png" alt="menu" width="30px"></a><span>Friend Request</span></div>
    </section>

    <section class="section2">
    <?php
        include('../widgets/requestbox.php');
    ?>
    </section>
    </div>