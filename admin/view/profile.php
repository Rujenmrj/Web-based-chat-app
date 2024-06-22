<!-- <div class="container">
    <div class="profile"><img src="" alt=""></div>
    <span class="username"></span>-->
    <?php
    // include_once('../model/session.php');
    // include_once('../model/database.php');
    // $sql="SELECT * FROM profile WHERE username='".$_SESSION['username']."'";
    // $result=@db->Selectqry($sql);
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Section</title>
    <style>
         /* body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }  */
        /* .profiles1 {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        } */
        .imgprofile {
            border-radius: 50%;
            width: 200px;
            aspect-ratio: 1/1;
            object-fit: cover;
        }
        .full-name {
            font-size: 24px;
            font-weight: bold;
            margin-top: 15px;
        }
        .username {
            color: gray;
            margin-top: 5px;
            font-size: 18px;
        }
        .email {
            margin-top: 5px;
            font-size: 16px;
            color: #777;
        }
    </style>
</head>
<body>
<?php
include_once("../model/Database.php");
// include_once("../model/session.php");
define('db',new Database);
$sql="SELECT pic,fullname,u.username,email from users as u JOIN profiles as p ON u.username=p.username WHERE u.username='$_SESSION[user]'";
$result=db->Selectqry($sql);
$row=$result->fetch_assoc();
$pic=$row['pic'];
$fullname=$row['fullname'];
$username=$row['username'];
$email=$row['email'];
echo "
    <img class='imgprofile' src='../images/$pic' alt='Profiles Picture'>
    <div class='full-name'>$fullname</div>
    <div class='username'>@$username</div>
    <div class='email'>$email</div>
    </div>"
?>


</body>
</html>
