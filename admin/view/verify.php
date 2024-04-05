<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="progress_bars/style.css"> -->
</head>
<body>
<?php
include_once("progress_bars/progress.html");
include_once "../widgets/FieldWithIcon.php";
include_once "../widgets/CustomFileInputField.php";
include_once('config.php');
$FirstNameField=new FieldWithIcon(
    $type="text",
    $class="icon",
    $label="FirstName",
    $icon=@images."/name.png"
);
$LastNameField=new FieldWithIcon(
    $type="text",
    $class="icon",
    $label="LastName",
    $icon=@images."/name.png"
);
$usernameField=new FieldWithIcon(
    $type="text",
    // $placeHolder="email",
    $class="icon",
    $label="Username",
    $icon=@images."/person.png"
);
$pictureField=new CustomFileInputField(
    $type="file",
    // $placeHolder="email",
    $class="custom-file-upload",
    $label="profilepic",
    $icon=''
);
$otpField=new FieldWithIcon(
    $type="text",
    // $placeHolder="email",
    $class="icon",
    $label="OTP",
    $icon=@images."/key.png"
);
    echo "<form action='verifyuser.php' method='post' id='validatewithotp'>
            <main class='flexcenter'>
            <section class='form' id='form1'>";
    $FirstNameField->add();
    $LastNameField->add();
    echo "</section>
    <section class='form' id='form2'>";
    $pictureField->add();
    $usernameField->add();
    ?>
<?php
echo "</section>
<section class='form' id='form3'>";
$otpField->add();
?>
<?php
echo "</section></main>";
include_once("progress_bars/progressbuttons.html");
echo "</form>";
?>
</body>
</html>