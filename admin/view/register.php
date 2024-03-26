<?php
// echo '
//         <!-- <div>
//                 <label for="field_name">Name of Field</label><br>
//             <div class="field">
//             <img src="person.png" alt="" srcset=""> -->
//                 <input type="text" name="field_name" id="uid" class="class_name" placeholder="username or email">
//             <!-- </div>
//         </div> -->';
include_once "../widgets/FieldWithIcon.php";
include_once('config.php');
$registerEmailField=new FieldWithIcon(
    $type="text",
    // $placeHolder="email",
    $class="icon",
    $label="Username",
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
    $label="Confirm Password",
    $icon= @images."/lock.png"
);

$DOBField=new FieldWithIcon(
    $type="date",
    $class="icon",
    $label="Date of Birth",
    $icon= @images."/lock.png"  
);

if(isset($_POST['register'])){
    $user=$_POST['username'];
    $password=md4($_POST['password']);
    //validating username/email
    if(validate($user)){
        if($password!=""){
            register();
            header("Location:login.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="gridcenter">
    <form method="POST"> 
            <div class="form">
        <?php
        $registerEmailField->add();
        $registerPasswordField->add();
        // $DOBField->add();
        ?>
        <input type="submit" class="button" id="register" value="Register" name="register">
        </div>
    </form>
</div>
</body>
</html>