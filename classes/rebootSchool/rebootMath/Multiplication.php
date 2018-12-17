<?php
namespace classes\rebootSchool\rebootMath;

class MultiplicationExercise implements \SingleExercise
{
    
    private $level;
    private $operation;
    private $figure;
    private $userResult;
    
    /**
     * Constructor
     */
    public function __construct() {
        // allocate your stuff
    }
    
    /**
     * Static constructor / factory
     */
    public static function create() {
        $instance = new self();
        return $instance;
    }
    
    public static function createAMultiplication($operation,$figure){
        $instance=new self();
        if(is_numeric($operation)){
            $instance->operation = MultiplicationExercise::createAMultiplication(null,$operation);
        }
        else{
            $instance->operation = $operation;
        }
        $instance->figure = $figure;
        return $instance;
    }

    public function getSolution(){
        if(is_null($this->operation)){
            return $this->figure;
        } else {
            return $this->operation->calculateExcercise()* $this->figure;
        }
    }
    
    public function isResultCorrect(){
        if($this->getSolution() == $this->getUserResult()){
            return true;
        }
        else {
            return false;
        }
    }
    
    public function getUserResult(){
        return $this->userResult;
    }
    
    public function getOperation()
    {
        
    }
    
}

