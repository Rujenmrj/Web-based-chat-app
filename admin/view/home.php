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
    <section class="section1" id='section1'>
        <div style="background:white;"><a href="#"><img src="../images/menu.png" alt="" width="30px"></a>Messages </div>
        <!-- <input type="text"> -->
        <?php
        include_once("../widgets/people.php");
        ?>
    </section>

    <section class="section2">
        <!-- test -->
        <?php
            // include('profile.php');
        ?>
        <!-- test -->

        <div id="messages"></div>
        <!-- <form action="" method="post" class="messagebo"> don't -->
        <?php
        $messageField->add();
        ?>
        <!-- </form> -->

    </section>
    <div id="error"></div>
<script src="../controller/backgroundload.js">
</script>
<script src="interactive.js"></script>
</body>
</html>