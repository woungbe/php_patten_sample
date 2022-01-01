<?php

class CirCle extends Shape {
    
    public $x,$y,$r;

    public function __construct($x,$y,$r){
        
        $this->x = $x;
        $this->y = $y;
        $this->r = $r;
    }
   
    public function toString(){
        echo $this->x." ".$this->y." ".$this->r."\n";
    }

}