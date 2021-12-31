<?php


class SystemSpeaker {
    public static $instance;
    public $volume = 5 ;
    
    private function __construct(){
        
    }

    public static function GetInstance() {      
        echo "실행은 됐는데\n";  
        if(self::$instance == null ){
            echo "신규 생성\n";
            self::$instance = new SystemSpeaker();
        }
        return self::$instance;
    }
}



?>