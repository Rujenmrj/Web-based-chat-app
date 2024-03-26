<?php
class FieldWithIcon{
    private $class;
    private $label;
    private $placeholder;
    private $icon,$iconSize="30px";
    private $type;
    function __construct($type="text",$class="",$label="",$icon=""){
        $this->placeholder=$label;
        $this->class=$class;
        $this->label=$label;
        $this->icon=$icon;
        $this->type=$type;  
    }
    function add(){
    // echo "<input type=\"$this->type\" 
    // name=\"$this->label\" 
    // style=\"background: url('$this->icon') no-repeat left;\"
    // id=\"$this->label\" 
    // class=\"$this->class\" 
    // placeholder=\"$this->placeHolder\">";
    echo "<div class='input-with-placeholder $this->class' 
        style='background: url(".$this->icon.") no-repeat left;'>
        
        <input type='$this->type' 
        id='$this->label' 
        name='$this->label'
        placeholder='$this->placeholder'>
        <label for='$this->label'>$this->label</label>
        </div>";
}
}
?>