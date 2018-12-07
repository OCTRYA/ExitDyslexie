<?php
include '../../classes/ExitDyslexie.php';


if(!empty($_POST['amountOfExercisesInput']) && !empty($_POST['amountOfLettersInput']) && !empty($_POST['difficultyOfExercisesInput']))
{
    $exitDyslexie = new ExitDyslexie($_POST['amountOfExercisesInput'],$_POST['amountOfLettersInput'],$_POST['difficultyOfExercisesInput']);
    echo $exitDyslexie->getStatus();
    $exercise = $exitDyslexie->makeExercise1();
    
    echo "<table>";
    for($i = 0; $i < sizeOf($exercise); $i++){
        echo "<tr><td>". $exercise[$i]->getValue() . "</td></tr>";
    }   
    echo "</table>";
} else {
    
}
?>