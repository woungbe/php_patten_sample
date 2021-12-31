<?php

include_once "./module/InterfaceAdapter.php";
include_once "./module/DBModel.php";

class adapterImpl implements adapter {

    public $name; 
    public $DBsql; // 인스턴스가 필요할 수도 있음, 
    public function __construct(){
        $this->name = __CLASS__;
        $this->DBsql = new DBsql();
    }

    public function dbInsert($val){
        // 로그를 추가한다. 
        $send = $this->DBsql->dbInsert($val);
        // 처리할꺼좀 처리하시고 
        return $send;
    }

}



?>