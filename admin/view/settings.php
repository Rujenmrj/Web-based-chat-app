<?php
    session_start();
    $_SESSION['uid']="newid";
    include_once('nav.php');
    ?>
    <section class="section1">
        <div style="background:white;">
            <a href="#">
                <img src="../images/menu.png" alt="menu" width="30px">
            </a>
            <span>Friend Request</span>
        </div>
        <?php
            include_once('../widgets/clickablebox.php');
            $editprofile = new clickablebox('edit_profile', '../images/person.png', 'edit profile', 'profile', 'box');
            $logout = new clickablebox('logout', '../images/log-out.png', 'Logout', 'profile', 'box');
        ?>
    </section>
    
    <section class="section2" id="friendsection2">
        <?php 
        include_once('../view/profile.php');
        ?>
    </section>
    </div>
    <script>
        document.getElementById('logout').onclick=()=>{
    window.location.href = "../view/logout.php";

}
    </script>
    <script src="../controller/backgroundload.js"></script>