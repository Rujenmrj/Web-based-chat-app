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
        <div style="background:white;" class="flexcenter">
            <a href="#">
                <img src="../images/menu.png" alt="menu" width="30px">
            </a>
            <span style="padding:10px">Friend Request</span>
        </div>
        <?php
            include_once('../widgets/clickablebox.php');
            $received = new clickablebox('request_received', '../images/person.png', 'Request Received', 'profile', 'box');
            $sent = new clickablebox('request_sent', '../images/person.png', 'Request Sent', 'profile', 'box');
        ?>
    </section>
    <section class="section2" id="friendsection2">
        <div style="width:100%; height:10%;background-color:var(--light-mode-secondary-color);display:flex;" >
            <input type="search" onkeyup="searchuser()" name="searchprofile" id="searchingprofile" style="height:30%;margin:4% 0 0 10%;" placeHolder="Search">
        </div>
        <div id="requestsection"></div>
    </section>
    </div>
<script src="../controller/backgroundload.js"></script>
<script src="interactive.js"></script>