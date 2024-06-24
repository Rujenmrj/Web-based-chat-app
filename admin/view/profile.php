    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Section</title>
    <style>
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
$result=@db->Selectqry($sql);
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
