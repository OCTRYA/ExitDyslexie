<?php
class Character{
    private $value;
    private $sound;

    
    function __construct($value, $sound){
        $this->value = $value;
        $this->sound = $sound;
    }
    
    public function setValue($value){
        $this->value = $value;
    }
    
    public function getValue(){
        return $this->value;
    }
    
    public function setSound($sound){
        $this->sound = $sound;
    }
    
    public function getSound(){
        return $this->sound;
    }
}
    
    
?>