<?php 

/**
 * 이건 메모리를 가지고 있는 부분에서는 거희 필수 
 * 왠만한 인터프리터 언어도 const 형태로라도 가지고 있다. 
 * 무조건 쓰인다. 
 * 
 * 쓰임새.. - 설정 : DB접속정보, 핵심 로드 리스트,
 * 전체적으로 계속 기억해야되고, 자주 접근하는 애들, 
 * 
 * php에서는 주소 사용되지 않고 그냥 defined 해서 사용하겠지...  
 * golang , java, typescript 에서는 필수로 쓰인다고 보면 됨 .
 * 
 * 장점: 접근성이 편하다  이게 가장 큰 장점중에 하나지..  
 * 
 */

 include_once "./model/SystemSpeaker.php";


$sp1 = SystemSpeaker::GetInstance();
$sp2 = SystemSpeaker::GetInstance();

// 완벽히 동일한.. 
var_dump($sp1==$sp2);




?>