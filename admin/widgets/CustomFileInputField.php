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
        placeholder='$this->placeholder' onchange='getimg(event)'>
        <label for='$this->label' id='profilepreview'><img src='$this->icon' ></label>
        </div>";
}
}
?>