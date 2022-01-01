<?php



class factory {
    
    public static $name;

    public static function setChan($name){
        self::$name = $name;
    }

    public static function getInstance(){
        $temp;
        switch(self::$name){
            case 0:
                $temp = new LinuxGui();
                break;
            case 1:
                $temp = new MacGui();
                break;
            case 2:
                $temp = new WindowGui();
                break;
        }

        return $temp;


    }
}