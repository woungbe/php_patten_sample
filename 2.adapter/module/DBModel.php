<?php 

class DBsql {

    public $dbname; 

    public function __construct(){
        $this->dbname = 'mysql : ';
    }

    public function dbInsert($val){
        return 'db : '.$val;
    }

}

?>