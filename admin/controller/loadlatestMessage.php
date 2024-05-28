<?php
// include_once('../model/message.php');
// $message=new Message();
// $latest=$message->loadlastmessage();
// $latest=mysqli_fetch_array($latest);
// echo $latest['message'];
?>
<?php
include_once("../view/config.php");
include_once("../model/friends.php");
include_once("../model/session.php");
$friendlist=new Friend();
$result=$friendlist->friendslist($_SESSION['user']);
$arr=[];
if($result !== ""){
    $count=mysqli_num_rows($result);
    if($count>0){
        while($row=mysqli_fetch_array($result)){
            $fullname=$row['fullname'];
            $usrname=$row['username'];
            $pic=$row['pic']==null ?'person.png':$row['pic'];
            $messageresult=$friendlist->loadlatestmessage($usrname);
            $messagedetail=$messageresult->fetch_assoc();
            if(mysqli_num_rows($messageresult)>0){
                $message=$messagedetail['message'];
                $readstatus=$messagedetail['readstatus'];
            }
            else{
                $message="";
                $readstatus="";
            }
            $a=[$usrname=>[$fullname,$pic,$message,$readstatus]];
            array_push($arr,$a);
    }
}
}
foreach($arr as $username=>$detail)
{
    foreach($detail as $user=>$ab){
        if(isset($_SESSION['inchat']) && $user==$_SESSION['inchat']){
            echo "<div class=\"profile inchat\" id='$user'>";
        }
        else{
        echo "<div class=\"profile \" id='$user'>";
        }
        echo "<div class='profile_img' style=\"background-image:url('../images/$ab[1]'); background-size:48px;\">
                </div>
                <div class='box'>
                <strong>$ab[0]</strong>
                <div class='latestmessage'>
                    <span>$ab[2]</span>
                    <span>$ab[3]</span>
                </div>
                </div>
            </div>";
    }
}
?>
        
