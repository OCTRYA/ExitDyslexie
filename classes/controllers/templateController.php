<?php

class View{
    private $header = null;
    private $bottom = null;
    
    
    public function __construct(){
        $this->createHeader();
        $this->createBottom();
    }
    
    private function createHeader(){
        echo "<div> hello world</div>";
    }
    
    private function createBottom(){
        
    }
    
    
    
//getters and setters
    public function getHeader(){
        return $this->header;
    }
    
    public function getBottom(){
        return $this->bottom;
    }
    
    
    
    
}


?>