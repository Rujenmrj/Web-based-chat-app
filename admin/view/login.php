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
$loginEmailField=new FieldWithIcon(
    $type="text",
    $placeHolder="email or username",
    $class="icon",
    $label="username",
    $icon=@images."/person.png"
);
$loginPasswordField=new FieldWithIcon(
    $type="password",
    $placeHolder="password",
    $class="icon",
    $label="password",
    $icon= @images."/lock.png"
);
if(isset($_POST['submit'])){
    $user=$_POST['username'];
    $password=$_POST['password'];
    // echo "$user and $password";
    
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><?php
    echo "<link rel=\"stylesheet\" href=\"style.css?v=e031e80c3d8b\">"?>
</head>
<body>
    <div class="gridcenter">
    <form autocomplete="off" method="POST"> 
            <div class="form">
            <?php
                $loginEmailField->create();
                $loginPasswordField->create();
            ?>
            <input type="submit" id="submit" value="submit" name="submit">
        </div>
        </form>
    </div>
</body>
</html>