<?php



class ComputerFactory {

    public $bluePrint;
    
    public function __construct(){
        // $this->bluePrint = new BluePrint;
    }

    public function setBluePrint($bluePrint){
        $this->bluePrint = $bluePrint;
    }

    public function getComputer(){
        return $this->bluePrint->getComputer();
    }






}