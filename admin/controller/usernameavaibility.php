<?php
include_once('../model/database.php');
define('db',new Database);
$sql="SELECT username FROM users WHERE username='".$_POST['username']."'";
$result=@db->Selectqry($sql);
if($result->num_rows>0){
    echo 'true';
}
else{
    echo 'false';
}
?>