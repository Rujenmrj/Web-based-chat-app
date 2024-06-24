<?php
include_once("../model/session.php");
include_once("../model/database.php");
define("db", new Database());
$sql="SELECT pic,username,fullname from profiles where username or fullname LIKE '%$_POST[search]%'";
$result=@db->Selectqry($sql);
while($row=$result->fetch_assoc()){
    if($row['pic']==null){
        $row['pic']='person.png';
    }
    $pic="../images/".$row['pic'];
    $fullname=$row['fullname'];
    $username=$row['username'];
    echo "<div class=\"profile \" id='$username'>
    <div class='profile_img' style=\"background-image:url('$pic');background-size:48px;margin-right:5%;\">
            </div>
            <div class='box'>
            <strong>$fullname</strong>
            </div>
            <button id='addfriend' class='button'>Add Friend</button>
        </div>";
}
if($result->num_rows==0){
    echo "no result found.....";
}

?>