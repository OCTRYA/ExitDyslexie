<?php
namespace classes\rebootSchool;

trait Exercise
{
    abstract public function getName(); 
    abstract public function setName(); 
    abstract public function getAmountOfExcercises();
    abstract public function setAmountOfExcercises();
    abstract public function getLevel();
    abstract public function setLevel();
}

