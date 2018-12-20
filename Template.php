<?php

class Template
{
    public static function showCorrectnessExercise($boolean){
        if($boolean){
            //echo 'ja';
            return '<img style="width:20px;" src="images/checked.svg">';
        }else{
            //echo 'nee';
            return '<img style="width:20px;" src="images/error.svg">';
        }
    }
}
?>
