<?php
class MessageField{
    private $placeHolder;
    private $class;
    private $label="message";
    private $img="../images/send.png";
    function __construct($placeHolder="no placeholders yet",$class="",){
        $this->placeHolder=$placeHolder;
        $this->class=$class;
    }
    function add(){

    // if($this->label)
    //     echo "<label for=\"$this->label\">$this->label</label>";

    echo "<div class='messagebox'>
    <button onclick='displayoption()' class='sendmessage' id='showoption'><img src='../images/add.png'></button>
    <input type='text' 
    name='$this->label\' 
    id='$this->label'
    class='input-with-placeholder $this->class' 
    placeholder='$this->placeHolder' autocomplete='off' onkeyup='postmessonenter(event)'>
    <button onclick='postmess()' class='sendmessage'><img src=".$this->img."></button></div>";  
}
}

?>