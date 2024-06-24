<?php
include_once("../model/message.php");
include_once("../model/session.php");
define('db',new Database());
class LoadMessage{
    function loading(){
        $messages=new Message();
    echo"
        <div style='width:100%; height:10%;background-color:var(--light-mode-secondary-color);display:flex;max-height:70px;position:fixed;z-index:3;'>";
            if(isset($_SESSION['inchat'])){
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
                    ";
            }
            echo "</div>";
        $loadedmessages=$messages->loadmessage();
        echo "<div id='messageinchat'>";
        // $a = array("Anna", "Brittany", "Cinderella", "Diana", "Eva", "Fiona", "Gunda", "Hege", "Inga", "Johanna", "Kitty", "Linda", "Nina", "Ophelia", "Petunia", "Amanda", "Raquel", "Cindy", "Doris", "Eve", "Evita", "Sunniva", "Tove", "Unni", "Violet", "Liza", "Elizabeth", "Ellen", "Wenche", "Vicky","hello","by");
        if($loadedmessages !== ""){
            $count=mysqli_num_rows($loadedmessages);
            if($count>0){
                while($row=mysqli_fetch_array($loadedmessages)){
                    $message=$row['message'];
                    $fromid=$row['messagefrom'];
                    $toid=$row['messageto'];
                    if(next($row)){
                        if($fromid==$_SESSION['user']){
                            echo "<div class=\"message sent\">$message</div>";
                        }
                        else{
                            echo "<div class=\"message received\">$message</div>";
                        }
                    }
                    else{
                        echo "<div class=\"message received\" id='popup'>$message</div>";
                    }
                }
            }
        }
        echo "</div>";
    }
}
$ld =new LoadMessage();
$ld->loading();
// $_SESSION['user']='Rujen';
// $username=$_SESSION['user'];
//         $inchat="Rujen123";
//         $inchat=$_SESSION['inchat'];
//         echo "username:$username       chatma:$inchat";
//         echo "<br>";
//         print_r($_SESSION);
?>