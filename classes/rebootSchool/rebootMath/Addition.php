<?php
require "classes/rebootSchool/rebootMath/SingleExercise.php";

class Addition implements \SingleExercise
{
    private $level;
    private $singleExercise;
    private $figure;
    private $userResult;
    
    
    public function createSimpleExercise($limitation){
        $this->figure = rand(0,$limitation);
        $secondValue = rand(0,$limitation-$this->figure);
        $singleExercise = new Addition();
        $singleExercise->setFigure($secondValue);
        $singleExercise->setSingleExercise(null);
        $this->singleExercise = $singleExercise;
    }
    
    
    public function getSolution(){
        if(is_null($this->singleExercise)){
            return $this->figure;
        } else {
            return $this->singleExercise->getSolution()+ $this->figure;
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