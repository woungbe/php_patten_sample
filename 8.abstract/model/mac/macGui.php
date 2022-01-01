<?php

class MacGui implements Gui {

    public function createButton(){
        return new MacButton();
    }
    public function createTextArea(){
        return new MacTextArea();
    }

}