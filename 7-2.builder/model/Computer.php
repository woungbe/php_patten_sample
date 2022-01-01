<?php

class Computer {
    public $cpu;
    public $ran;
    public $storage;

    public function __construct($cpu, $ran, $storage){
        $this->cpu = $cpu;
        $this->ran = $ran;
        $this->storage = $storage;
    }

    public function toString(){
        return $this->cpu." : ".$this->ran." : ".$this->storage."\n";
    }
}