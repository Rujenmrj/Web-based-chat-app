<?php
// including widget, config, validation file
include_once('config.php');
include_once('../widgets/FieldWithIcon.php');
// include_once('../controller/validate.php');
include_once('../model/user.php');

//creating fields for email/username and password
$loginEmailField=new FieldWithIcon(
    $type="text",
    // $placeHolder="email or username",
    $class="icon",
    $label="Username",
    $icon=@images."/person.png"
);
$loginPasswordField=new FieldWithIcon(
    $type="password",
    // $placeHolder="password",
    $class="icon",
    $label="Password",
    $icon= @images."/lock.png"
);
// checking for username password in db and validating
if(isset($_POST['Login'])){
    $usr=new User();
    $usr->login($_POST['Username'],$_POST['Password']);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title><?php
    echo "<link rel=\"stylesheet\" href=\"style.css?v=e031e80c3d8b\">"?>
    <link rel="shortcut icon" href="../images/logov3.png" type="image/x-icon">
</head>
<body>
    <div class="gridcenter">
    <form method="POST"> 
            <div class="form">
            <?php
                $loginEmailField->add();
                $loginPasswordField->add();
            ?>
            <input type="submit" class="button" id="Login" value="Login" name="Login">
            <p>don't have an account?<a href="register.php">register here</a></p>
        </div>
        </form>
    </div>
</body>
</html>