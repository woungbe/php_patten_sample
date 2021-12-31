<?php 


include_once "./api/strategy.php";
include_once "./api/upbit.php";
include_once "./api/bithum.php";


/**
 * API쪽 다 했으면 이제 연결해야지 !!
 * 이제 흐름을 만들어야됨 !! 
 */

class Exchange {
    public $market;
    public $hoga;
    public $sign;
    public $unsign;
    
    public function __construct($exchange='') {
        $this->market = $exchange;
    }

    public function setEx($market){
        $this->market = $market;
    }

    public function getData() {

        $this->hoga = $this->market->Hoga();
        $this->sign = $this->market->Signed();
        $this->unsign = $this->market->notSigned();
    }
}


/**
 * 위에 있는 클래스가 또 다른 model 이 되어서 다른 contraller 에 불릴 수도 있고 
 * 직접 컨트롤 타워가 되서 동작 할 수도 있음 !! 
 * 동일한 패턴을 가진 애들은 이런식으로 다루면 편함.  
 * 시나리오 변경시 문제가 있을 수 있음 .. 
 * contraller 쪽에 if문 박기 시작하면 걍 안쓰는게 좋음 ... 
 */
$exchange = new Exchange();

$upbit = new Upbit();
$exchange->setEx($upbit);
$exchange->getData();


$bithum = new Bithum();
$exchange->setEx($bithum);
$exchange->getData();



?>