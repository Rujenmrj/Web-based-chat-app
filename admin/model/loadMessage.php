<?php
include_once("database.php");
class LoadMessage{
    function loading(){
        $db=new Database();
        $lodedmessages=$db->loadMessage();
        // $a = array("Anna", "Brittany", "Cinderella", "Diana", "Eva", "Fiona", "Gunda", "Hege", "Inga", "Johanna", "Kitty", "Linda", "Nina", "Ophelia", "Petunia", "Amanda", "Raquel", "Cindy", "Doris", "Eve", "Evita", "Sunniva", "Tove", "Unni", "Violet", "Liza", "Elizabeth", "Ellen", "Wenche", "Vicky","hello","by");
        if($lodedmessages !== ""){
            foreach($lodedmessages as $text){
                echo "<div class=\"message\">$text</div>";
            }
        }
    }
}
$ld =new LoadMessage();
$ld->loading();
?>