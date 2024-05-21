<?php
include_once('database.php');
define('db',new Database);
class Friend{
    function sendfriendrequest($user,$befriend){
        $sql="INSERT INTO `friends`(`requestID`, `receiveID`) VALUES ('$user','$befriend')";
        @db->Insertqry($sql);
    }
    function loadfriendrequest($user){
        $sql="SELECT * FROM `friends` AS F JOIN `profiles` AS P ON username=requestID or username=receiveID JOIN message AS M ON messagefrom=username or messageto=username LIMIT 1" ;
        $arr=[];
        $result=@db->Selectqry($sql);
        while($row=mysqli_fetch_array($result)){
            $friend=$row['receiveID'];
            $arr=$friend;
        }
        return $arr;
    }
    function acceptfriendrequest($user,$befriend){
        $sql="UPDATE `Friends` SET `Status`=1 WHERE requestID=$befriend AND receiveID=$user";
    }
    function searchfriend($befriend){
        $sql="SELECT * FROM users WHERE username=$befriend OR fullname=$befriend";
        $result=@db->Selectqry($sql);
        if($result){
            return $result;
        }
    }
    function friendslist($user){
        $sql="SELECT receiveID,username,fullname,pic,acceptstatus,requestID FROM friends JOIN profiles ON requestID=username OR receiveID=username Group BY username HAVING acceptstatus=1 AND username <>'$user' AND (requestID='$user' OR receiveID='$user')";
        $result=@db->Selectqry($sql);
        if($result){
            return $result;
        }
    }
    function friendrequestlist($user){
        $sql="SELECT receiveID,username,fullname,pic,acceptstatus,requestID FROM friends JOIN profiles ON requestID=username OR receiveID=username Group BY username HAVING acceptstatus=0 AND username <>'$user' AND (requestID='$user' OR receiveID='$user')";
        $result=@db->Selectqry($sql);
        if($result){
            return $result;
        }
    }
    function loadlatestmessage($befriend){
        $user=$_SESSION['user'];
        $sql="SELECT message,readstatus FROM message WHERE (messagefrom='$user' AND messageto='$befriend') OR (messagefrom='$befriend' AND messageto='$user') ORDER BY sentdatetime DESC LIMIT 1";
        $result=@db->Selectqry($sql);
        if($result){
            return $result;
        }
    }
}
?>
<!-- SELECT * FROM `profiles` AS p RIGHT JOIN friends ON username=requestID -->