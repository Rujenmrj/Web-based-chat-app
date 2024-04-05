<?php
include('mailbody.php');
include('otp.php');
include('session.php');
class Gmail{
    private $sendto;
    private $subject;
    private $mailbody;
    
    function sendmail($subject,$sentfor){
        $test=new OTP();
        $test->createotp();
        $otp=(string)$test->createnewotp();
        $this->sendto=$_SESSION['email'];
        $this->subject=$subject;
        $this->mailbody=createmessage('user',$otp,$sentfor);
        $headers['From'] = 'zenmrj10@gmail.com';
        $headers['MIME-Version'] = 'MIME-Version: 1.0';
        $headers['Content-type'] = 'text/html; charset=iso-8859-1';
        if(mail($this->sendto,$this->subject ,$this->mailbody,$headers))
    {
        echo "Mail Sent $otp";
    }
    else{
        echo "Unable to send email";
    }

    }
}
?>