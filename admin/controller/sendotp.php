<?php

include('../model/email.php');
    
    $mail=new Gmail();
$mail->sendmail("test after set up 4",'register');
?>