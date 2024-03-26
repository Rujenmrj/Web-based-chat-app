
<?php
include_once("config.php");
$a=['Rujen'=>['delivered','this is 1'],'Rujen123'=>['delivered',' message2'],'sita'=>['seen','message3']];
foreach($a as $username=>$status)
{
echo "<div class=\"profile\" id='$username'>
        <div class='profile_img'>
        <img src=\"../images/person.png\">
        </div>
        <p><strong>$username</strong></p>
        <span>$status[0]</span>
        <p>$status[1]</p>
    </div>";
}
?>
        
