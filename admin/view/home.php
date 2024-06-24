    <?php
    include_once("../model/session.php");
    $_SESSION['uid']="newid";
    include_once "../widgets/MessageField.php";
    $messageField=new MessageField(
        $placeHolder="Enter Message",
        $class="icon"
    );
    include_once('nav.php');
    ?>
    <section class="section1" id='section1'>
        <div style="background:white;" class="flexcenter">
            <a href="#"><img src="../images/menu.png" alt="" width="30px"></a>
            <span style="padding:10px">Messages</span>
         </div>
        <!-- <input type="text"> -->
        <?php
        include_once("../widgets/people.php");
        ?>
    </section>

    <section class="section2">
        <div id="messages">
        </div>
        <?php
        $messageField->add();
        ?>

    </section>
    <div id="error"></div>
<script src="../controller/backgroundload.js">
</script>
<script src="interactive.js"></script>
</body>
</html>