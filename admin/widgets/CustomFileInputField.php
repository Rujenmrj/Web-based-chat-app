<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/style.css">
</head>
<body>
    
</body>
</html>
<?php
class CustomFileInputField{
    private $class;
    private $label;
    private $placeholder;
    private $icon,$iconSize="30px";
    private $type;
    function __construct($type="text",$class="",$label="",$icon=""){
        $this->placeholder=$label;
        $this->class=$class;
        $this->label=$label;
        $this->icon=$icon==''?"../images/person.png":$icon;
        $this->type=$type;  
    }
    function add(){
    echo "<div class='$this->class'>
        
        <input type='$this->type' 
        id='$this->label' 
        name='$this->label'
        placeholder='$this->placeholder'>
        <label for='$this->label'><img src='$this->icon'></label>
        </div>";
}
}
// include("../view/config.php");
// $test=new CustomFileInputField(
//     $type="file",
//     // $placeHolder="email",
//     $class="custom-file-upload",
//     $label="profilepic",
//     $icon=@images."/person.png"
// );
// $test->add();
?>