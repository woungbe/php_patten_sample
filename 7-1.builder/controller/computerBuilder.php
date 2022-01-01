<?php


class ComputerBuilder {
    public $computer;

    public function __construct(){
        $this->computer = new Computer();
    }

    public function setCpu($cpu){
        $this->computer->cpu = $cpu;
        return $this;
    }

    public function setRam($ram){
        $this->computer->ram = $ram;
        return $this;
    }

    public function setStorage($storage){
        $this->computer->storage = $storage;
        return $this;
    }

    public function builder(){
        return $this->computer;
    }




}