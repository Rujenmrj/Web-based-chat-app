<?php
include_once("../view/config.php");
include_once("../model/session.php");
include_once("../model/friends.php");
$friendlist=new Friend();
$result=$friendlist->friendrequestlist($_SESSION['user']);
$arr=[];
if($result !== ""){
    $count=mysqli_num_rows($result);
    if($count>0){
        while($row=mysqli_fetch_array($result)){
            $fullname=$row['fullname'];
            $usrname=$row['username'];
            $pic=$row['pic']==null ?'person.png':$row['pic'];
            $a=[$usrname=>[$fullname,$pic]];
            array_push($arr,$a);
    }
}
}
foreach($arr as $username=>$detail)
{
    foreach($detail as $user=>$ab){
        echo "<div class=\"profile \" id='$user'>
        <div class='profile_img' style=\"background-image:url('$ab[1]');background-size:48px;margin-right:5%;\">
                </div>
                <div class='box'>
                <strong>$ab[0]</strong>
                </div>
                <button id='addfriend' class='button'>Add Friend</button>
            </div>";
    }
}
//             $sql="SELECT pic,fullname,u.username,email from users as u JOIN profiles as p ON u.username=p.username WHERE u.username='$_SESSION[inchat]'";
//             $result=db->Selectqry($sql);
//             $row=$result->fetch_assoc();
//             $pic="../images/".$row['pic'];
//             $fullname=$row['fullname'];
//             $username=$row['username'];
//             $email=$row['email'];
//             echo "
//             <div class='profile_img' style=\"background-image:url('$pic');background-size:48px;margin-right:5%;\">
//                 </div>
//                 <div style='font-size:2em;'>$fullname</div>
//                 "
    // $user="Rujen";
    // $ab=['rujen','person.png','abd',123];
    // echo "<div class=\"profile \" id='$user'>
    //     <div class='profile_img' style=\"background-image:url('../images/$ab[1]'); background-size:48px;\">
    //             </div>
    //             <div class='box'>
    //             <strong>$ab[0]</strong>
    //             <div class='latestmessage'>
    //                 <span>$ab[1]</span>
    //                 <span>$ab[3]</span>
    //             </div>
    //             </div>
    //         </div>";
            ?>
</body>
</html>
<?php
// include_once("config.php");
// include_once("../model/friends.php");
// $friendlist=new Friend();
// $result=$friendlist->friendslist($_SESSION['user']);
// $arr=[];
// if($result !== ""){
//     $count=mysqli_num_rows($result);
//     if($count>0){
//         while($row=mysqli_fetch_array($result)){
//             $fullname=$row['fullname'];
//             $usrname=$row['username'];
//             $pic=$row['pic']==null ?'person.png':$row['pic'];
//             $message=$row['message'];
//             $readstatus=$row['readstatus'];
//             $a=[$usrname=>[$fullname,$pic,$message,$readstatus]];
//             array_push($arr,$a);
//     }
// }
// }
// // $a=['Rujen'=>['delivered','this is ssssssssssssssssssssssssssss1'],'Rujen123'=>['delivered',' message2'],'sita'=>['seen','message3']];
// foreach($arr as $username=>$detail)
// {
//     foreach($detail as $user=>$ab){
//         echo "<div class=\"profile \" id='$user'>
//         <div class='profile_img' style=\"background-image:url('../images/$ab[1]'); background-size:48px;\">
//                 </div>
//                 <div class='box'>
//                 <strong>$ab[0]</strong>
//                 <div class='latestmessage'>
//                     <span>$ab[1]</span>
//                     <span>$ab[3]</span>
//                 </div>
//                 </div>
//             </div>";
//     }
// }
?>
        
