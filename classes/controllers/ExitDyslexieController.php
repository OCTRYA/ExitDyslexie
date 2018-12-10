<?php
include 'classes/rebootSchool/rebootReading/ExitDyslexie.php';
class ExitDyslexieController{
    public function drawDyslexieExercise($amountOfExcercisesInput,$amountOfLettersInput,$difficultyOfExercisesInput){
        if(!empty($amountOfExcercisesInput) && !empty($amountOfLettersInput) && !empty($difficultyOfExercisesInput)){
            $exitDyslexie = new ExitDyslexie($amountOfExcercisesInput,$amountOfLettersInput,$difficultyOfExercisesInput);
            $exercise = $exitDyslexie->makeExercise1();
            $amountOfCols = $this->calculateAmountOfCols($amountOfExcercisesInput);
            echo '<div class="container">';
            for($i = 0; $i < sizeOf($exercise); $i+=$amountOfCols){
                echo '<div class="row ">';
                for($j = 0; $j < $amountOfCols; $j++){
                    if($i+$j < $amountOfExcercisesInput){
                        echo '<div class="toRead col-sm-2">'. $exercise[$i+$j]->getValue() . '</div>';
                    }                  
                }
                echo '</div>';
            }   
            echo "</div>";
            } else {
    
            }
    }
    
    
    public function calculateAmountOfCols($amountOfExcercisesInput){
        return ceil($amountOfExcercisesInput/15);
    }
}

?>