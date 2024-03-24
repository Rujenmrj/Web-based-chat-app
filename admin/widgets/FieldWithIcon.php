<?php
class FieldWithIcon{
    private $placeHolder;
    private $class;
    private $label;
    private $icon,$iconSize="30px";
    private $type;
    function __construct($type="text",$placeHolder="no placeholders yet",$class="",$label="",$icon=""){
        $this->placeHolder=$placeHolder;
        $this->class=$class;
        $this->label=$label;
        $this->icon=$icon;
        $this->type=$type;  
    }
    function create(){

    // if($this->label)
    //     echo "<label for=\"$this->label\">$this->label</label>";

    echo "<input type=\"$this->type\" 
    name=\"$this->label\" 
    style=\"background: url('$this->icon') no-repeat left;\"
    id=\"$this->label\" 
    class=\"$this->class\" 
    placeholder=\"$this->placeHolder\">";
}
}

?>