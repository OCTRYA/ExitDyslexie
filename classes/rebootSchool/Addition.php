<?php
namespace classes\rebootSchool;

class Addition implements \SingleExercise
{
    private $level;
    private $operation;
    private $figure;
    
    
    public function __construct($operation,$figure,$level){
        if(is_numeric($operation)){
            $this->operation = new Addition(null,$operation,$level);
        }
        else{
            $this->operation = $operation;
        }
        $this->figure = $figure;
        $this->level = $level;
    }
    
    
    public function getSolution(){
        if(is_null($this->operation)){
            return $this->figure;
        } else {
            return $this->operation->calculateExcercise()+ $this->figure;
        }
    }
    

    
    public function getOperation()
    {
        
    }

}
?>
