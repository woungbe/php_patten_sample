<?php 

include_once './model/interfaceMart.php';

class martA implements mart {

    public $db;
    public $config;
    public $jsonType;
    public $sqltype;

    public function setInfo($config, $jsonType){ 
        $this->config = $config;
        $this->jsonType = $jsonType;

    }

    public function connection($config){
        echo __CLASS__." - ".__FUNCTION__."\n";
    }
    public function getProduct($jsonType){
        // $this->db 사용해서 처리 
        echo __CLASS__." - ".__FUNCTION__."\n";
    }
    public function insertDB($part){
        echo __CLASS__." - ".__FUNCTION__."\n";
    }

    /** 이부분은 contrallor에서 하는 방법도 있음 */
    public function start(){
        $db = $this->connection($this->config);
        $this->db = $db;
        
        $this->getProduct('ALL');
        // $part에 대한 내용은 변수로 받아도 되고, 
        // 그냥 this 에 녹여도 됨!
        $this->insertDB($part);

    }
} 


?>