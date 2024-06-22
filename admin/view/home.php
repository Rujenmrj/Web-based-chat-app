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
        <div style="width:100%; height:10%;background-color:var(--light-mode-secondary-color);display:flex;" >
        <?php
            $sql="SELECT pic,fullname,u.username,email from users as u JOIN profiles as p ON u.username=p.username WHERE u.username='$_SESSION[inchat]'";
            $result=db->Selectqry($sql);
            $row=$result->fetch_assoc();
            $pic="../images/".$row['pic'];
            $fullname=$row['fullname'];
            $username=$row['username'];
            $email=$row['email'];
            echo "
            <div class='profile_img' style=\"background-image:url('$pic');background-size:48px;margin-right:5%;\">
                </div>
                <div style='font-size:2em;'>$fullname</div>
                "
            ?>
        </div>
        <!-- test -->
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