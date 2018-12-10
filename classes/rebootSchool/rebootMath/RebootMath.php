<?php
namespace classes\rebootSchool\rebootMath;

class RebootMath
{
    private $exercises;
    
    
    
    public function getExercis($indexOfExcercise){
        return $this->exercises[$indexOfExcercise];
    }
}

