<?php
class MessageField{
    private $placeHolder;
    private $class;
    private $label="message";
    function __construct($placeHolder="no placeholders yet",$class="",){
        $this->placeHolder=$placeHolder;
        $this->class=$class;
    }
    function create(){

    // if($this->label)
    //     echo "<label for=\"$this->label\">$this->label</label>";

    echo "<input type=\"texst\" 
    name=\"$this->label\" 
    style=\"background: url('../images/send.png') no-repeat right ;\"
    id=\"$this->label\"
    class=\"input-with-placeholder $this->class\" 
    placeholder=\"$this->placeHolder\">";
}
}

?>