<?php
include 'Character.php';
include 'CharacterCombination.php';
class ExitDyslexie{
    private $fonts = array("Arial", "Times New Roman", "Verdana", "Wingdings");
    private $alphabet = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
    private $amountOfExercises;
    private $amountOfCharacters;
    private $difficulty;
    private $characters;
    
    function __construct($amountOfExcercises, $amountOfCharacters, $difficulty){ 
        $this->amountOfExercises = $amountOfExcercises;
        $this->amountOfCharacters = $amountOfCharacters;
        $this->difficulty = $difficulty;
        $this->initializeCharacters();
    }
    
    public function makeExercise1(){
        $characterCombination = new CharacterCombination();
        $characterCombination->makeCharacterCombination($this->amountOfCharacters, $this->characters);
        $exerciseList = null;
        for( $i = 0; $i < $this->amountOfExercises; $i++){
            $randomCharacterIndex = rand( 0 , sizeOf($characterCombination->getCharacters())-1 );
            $exerciseList[] = $characterCombination->getCharacters()[$randomCharacterIndex];
        }
        return $exerciseList; 
    }
    


    public function getStatus(){
        return "De variabelen zijn als volgt ingesteld: Aantal oefeningen: " . $this->amountOfExercises . " - Aantal letters: " . $this->amountOfCharacters . " - Moeilijkheidsgraad: " . $this->difficulty;
    }
    
    public function initializeCharacters(){
        foreach ($this->alphabet as $val) {
            $character = new Character($val,"");
            $this->characters[] = $character;
        }
    }
    
}

?>