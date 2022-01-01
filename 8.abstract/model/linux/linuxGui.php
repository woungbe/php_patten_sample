<?php

class LinuxGui implements Gui {

    public function createButton(){
        return new LinuxButton();
    }
    public function createTextArea(){
        return new LinuxTextArea();
    }

}