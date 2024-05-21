<?php
    class clickablebox{
        private $id;
        private $img;
        private $text;
        private $outerclass;
        private $innerclass;
        public function __construct($id, $img, $text, $outerclass, $innerclass){
            $this->id = $id;
            $this->img = $img;
            $this->text = $text;
            $this->outerclass = $outerclass;
            $this->innerclass = $innerclass;
            $this->add();
        }
        function add(){
            echo "<div class='$this->outerclass' id='$this->id'>
                <div class='profile_img' style='background-image:url($this->img); background-size:48px;'></div>
                <div class='$this->innerclass'>
                    <strong>$this->text</strong>
                </div>
                </div>";
        }
    }
?>