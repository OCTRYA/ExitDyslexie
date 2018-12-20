<?php
require "classes/rebootSchool/rebootMath/SingleExercise.php";

class Multiplication implements \SingleExercise
{
    private $level;
    private $singleExercise;
    private $figure;
    private $userResult;
    
    
    
    public function createSimpleExercise($multiplicationTable, $index){
        $this->figure = $index;
        $singleExercise = new Multiplication();
        $singleExercise->setFigure($multiplicationTable);
        $singleExercise->setSingleExercise(null);
        $this->singleExercise = $singleExercise;
    }
    
    public function createRandomExercise($limitation){
        $this->figure = $limitation;
        $secondValue = rand(0,10);
        $singleExercise = new Multiplication();
        $singleExercise->setFigure($secondValue);
        $singleExercise->setSingleExercise(null);
        $this->singleExercise = $singleExercise;
    }
    
    
    public function getSolution(){
        if(is_null($this->singleExercise)){
            return $this->figure;
        } else {
            return $this->singleExercise->getSolution()* $this->figure;
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
    
    public function setUserResult($result){
        $this->userResult = $result;
    }
    
    
    public function setSingleExercise($singleExercise){
        $this->singleExercise = $singleExercise;
    }
    
    public function getFigure(){
        return $this->figure;
        
    }
    
    public function setFigure($figure){
        $this->figure = $figure;
    }
    
    public function getSingleExercise(){
        return $this->singleExercise;
    }
    

}
?>