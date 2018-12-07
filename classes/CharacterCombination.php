<?php
class CharacterCombination{
    private $characters = array();

    public function addCharacter($character){
        $this->characters[] = $character;
    }
    
    public function getCharacters(){
        return $this->characters;
    }
    
    public function makeCharacterCombination($amountOfCharacters, $characters){
        for($i = 0; $i < $amountOfCharacters; $i++){
            $this->addCharacter($characters[$i]);
        }
    }
}
?>