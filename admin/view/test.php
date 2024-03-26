<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include_once('../widgets/FieldWithIcon.php');
include("../view/config.php");
$test=new FieldWithIcon(
    $type="text",
    // $placeholder="test",
    $class="icon",
    $label="Username",
    $icon=@images."/person.png"
);
$test->add();
?>
    
</body>
</html>