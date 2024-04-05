<?php
include_once('database.php');
define('db',new Database);
class Friend{
    function sendfriendrequest($user,$befriend){
        $sql="INSERT INTO `friends`(`requestID`, `receiveID`) VALUES ('$user','$befriend')";
        @db->Insertqry($sql);
    }
    function loadfriendrequest($user){
        // $db=new Database();
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
        // $db=new Database();
        $sql="SELECT * FROM users WHERE username=$befriend OR fullname=$befriend";
        $result=@db->Selectqry($sql);
        if($result){
            return $result;
        }
    }
    function friendslist($user){
        // $db=new Database();
        $sql="SELECT receiveID,username,fullname,readstatus,pic,message,acceptstatus,requestID,receiveID FROM friends JOIN profiles ON requestID=username OR receiveID=username LEFT JOIN message ON requestID=messagefrom OR receiveID=messagefrom GROUP BY username HAVING acceptstatus=1 AND username <>'Rujen123' AND requestID='$user' OR receiveID='$user'";
        $result=@db->Selectqry($sql);
        if($result){
            return $result;
        }
    }
}
?>
<!-- SELECT * FROM `profiles` AS p RIGHT JOIN friends ON username=requestID -->