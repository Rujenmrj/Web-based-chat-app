<?php
include_once("../widgets/FieldWithIcon.php");
// include_once("../controller/validate.php");
include_once('../model/user.php');
include_once('config.php');
$registerEmailField=new FieldWithIcon(
    $type="email",
    // $placeHolder="email",
    $class="icon",
    $label="Email",
    $icon=@images."/person.png"
);
$registerPasswordField=new FieldWithIcon(
    $type="password",
    // $placeHolder="password",
    $class="icon",
    $label="Password",
    $icon= @images."/lock.png"
);
$registerConfirmPasswordField=new FieldWithIcon(
    $type="password",
    // $placeHolder="password",
    $class="icon",
    $label="Confirm-Password",
    $icon= @images."/lock.png"
);

if(isset($_POST['Register'])){
    $usr=new User();
    $usr->register();
}
// if(isset($_POST['register'])){
//     $user=$_POST['Email'];
//     $password=$_POST['Password'];
//     $confirmpassword=$_POST['Confirm-Password'];
//     registervalidation($user,$password,$confirmpassword);
//         $user=new User();
//         $user->register();
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../images/person.png" type="image/x-icon">
</head>
<body>
<div class="gridcenter">
    <form method="POST"> 
            <div class="form">
        <?php
        $registerEmailField->add();
        $registerPasswordField->add();
        $registerConfirmPasswordField->add();
        ?>
        <input type="submit" class="button" id="Register" value="Register" name="Register">
        <p>already have an account?<a href="login.php">login here</a></p>
        </div>
    </form>
</div>
</body>
</html>