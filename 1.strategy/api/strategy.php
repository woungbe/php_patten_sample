<?php
/**
 *  거래소 API연결하는 시나리오 
 *  
 */

interface APIMethodList
{
    public function Hoga(); // 호가 가져오기 
    public function ContractAmount(); // 체결량 가져오기 
    public function Trade(); // 구매하기 
    public function BalanceCheck(); // 잔액조회 
    public function notSigned(); // 미체결 조회 
    public function Signed(); // 체결내역 조회 
    // .. 다 구현 안할꺼임 
}










?>