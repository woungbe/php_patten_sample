<?php


class LGBluePrint implements BluePrint {

    public $computer;
    public function __construct(){
        $this->computer = new Computer("i7","8g","256g"); 
    }

    public function setComputer($computer){
        $this->computer = $computer;
    }

    public function getComputer(){
        return $this->computer;
    }
}

// class MacBluePrint implements BluePrint {


// }