
<?php

class ExerciseManager
{
    private $nameExercise;
    private $amountOfExercises;
    private $limitation;
    private $singleExercises = array();
    private $amountOfAttempts;
    

    
    
    public function addExercise($singleExercise){
        array_push($this->singleExercises, $singleExercise);
    }
    
    public function calculateResultExercises(){
        $amountOfCorrectExercise = 0;
        for($i = 0; $i<$this->getAmountOfExercises();$i++){
            if($this->singleExercises[$i]->isResultCorrect()){
                $amountOfCorrectExercise = $amountOfCorrectExercise + 1;
            }
        }
        return $amountOfCorrectExercise;
    }
    
    public function increaseAmountOfAttempts(){
        $this->amountOfAttempts = $this->amountOfAttempts + 1;
    }
    
//GETTERS AND SETTERS
    
    public function setSingleExercises($singleExercises){
        $this->singleExercises = $singleExercises;
    }
    
    public function getSingleExercises(){
        return $this->singleExercises;
    }
    
    public function setAmountOfExercises($amountOfExercises){
       $this->amountOfExercises = $amountOfExercises;
    }
    
    public function getAmountOfExercises(){
        return $this->amountOfExercises;
    }
    
    public function setAmountOfAttempts($attempts){
        $this->amountOfAttempts  = $attempts;
    }
    
    public function getAmountOfAttempts(){
        return $this->amountOfAttempts;
    }
    
    public function setNameExercise($name){
        $this->nameExercise = name;
    }
    
    public function getNameExercise(){
        return $this->nameExercise;
    }
    
    public function setLimitation($limitation){
        $this->limitation = $limitation;
    }
    
    public function getLimitation(){
        return $this->limitation;
    }
    
    
}

