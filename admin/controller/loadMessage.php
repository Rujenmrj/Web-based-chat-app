<?php
include_once("../model/message.php");
class LoadMessage{
    function loading(){
        $messages=new Message();
        $loadedmessages=$messages->loadmessage();
        // $a = array("Anna", "Brittany", "Cinderella", "Diana", "Eva", "Fiona", "Gunda", "Hege", "Inga", "Johanna", "Kitty", "Linda", "Nina", "Ophelia", "Petunia", "Amanda", "Raquel", "Cindy", "Doris", "Eve", "Evita", "Sunniva", "Tove", "Unni", "Violet", "Liza", "Elizabeth", "Ellen", "Wenche", "Vicky","hello","by");
        if($loadedmessages !== ""){
            $count=mysqli_num_rows($loadedmessages);
            if($count>0)
                while($row=mysqli_fetch_array($loadedmessages)){
                    $message=$row['message'];
                    $fromid=$row['messagefrom'];
                    $toid=$row['messageto'];
                if($fromid=="Rujen123"){
                    echo "<div class=\"message sent\">$message</div>";
                }
                else{
                    echo "<div class=\"message received\">$message</div>";
                }
            // foreach($lodedmessages as $text){
                
            // }
        }
    }
}}
$ld =new LoadMessage();
$ld->loading();
?>