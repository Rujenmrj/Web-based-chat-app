<?php
session_start();
// to upload file of type jpeg, jpg, png
$id=$_SESSION['user'];
        if(($_FILES["profilepic"]["type"])=="image/jpeg" || ($_FILES["profilepic"]["type"])=="image/jpg" || ($_FILES["profilepic"]["type"])=="image/png")
        {
            if(isset($_POST['submit'])){
                $_FILES['profilepic']['name']=$id."profilepic.".ltrim($_FILES['profilepic']['type'],"image/");
                if(move_uploaded_file($_FILES['profilepic']['tmp_name'],"uploads/".$_FILES['profilepic']['name'])){
                    echo "File uploaded successfully";
                }
            }
            
        }
?>