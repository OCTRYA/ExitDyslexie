<?php
namespace classes\rebootSchool;

class Path
{
    private $progress;
    private $user;
    private $report;
    private $pathGenerator;
    private $exerciseManager;
    
    
    
    
    
    public function getReport(){
        return $this->report;
    }
    
    public function setReport($report){
        $this->report = $report;
    }
    
    public function getPathGenerator(){
        return $this->pathGenerator;
    }
    
    public function setPathGenerator($pathGenerator){
        $this->pathGenerator=$pathGenerator;
    }
    
    public function getExerciseManager(){
        return $this->exerciseManager;
    }
    
    public function setExerciseManager($exerciseManager){
        $this->exerciseManager=$exerciseManager;
    }
    
    
    
    public function getProgress(){
        return $this->progress;
    }
        
    public function setProgress($progress){
        $this->progress = $progress;
    }
    
    public function getUser(){
        return $this->user;
    }
    
    public function setUser($user){
        return $this->user;
    }
}

