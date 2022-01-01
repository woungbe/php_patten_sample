<?php

class Computer {

    public $cpu, $ram, $storage;

    public function toString(){
        return $this->cpu." :".$this->ram." :".$this->storage;
    }

}