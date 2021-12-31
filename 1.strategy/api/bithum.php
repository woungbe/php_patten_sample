<?php

include_once "./api/strategy.php";

class Bithum implements APIMethodList { 
    public $name;

    public function __construct(){
        $this->name = "빗썸";
    }

    // 호가 가져오기
    public function Hoga(){
        echo $this->name.":".__FUNCTION__."\n";        
    }  
    // 체결량 가져오기
    public function ContractAmount(){
        echo $this->name.":".__FUNCTION__."\n";
    }  
    // 구매하기 
    public function Trade(){
        echo $this->name.":".__FUNCTION__."\n";
    } 
    // 잔액조회 
    public function BalanceCheck(){
        echo $this->name.":".__FUNCTION__."\n";
    } 
    // 미체결 조회
    public function notSigned(){
        echo $this->name.":".__FUNCTION__."\n";
    }  
    // 체결내역 조회
    public function Signed(){
        echo $this->name.":".__FUNCTION__."\n";
    } 
}



?>