<?php

class WindowGui implements Gui {

    public function createButton(){
        return new WindowButton();
    }
    public function createTextArea(){
        return new WindowTextArea();
    }

}