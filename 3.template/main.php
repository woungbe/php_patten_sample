<?php 

/**
 * 템플릿 패턴은 언듯보면 strategy 패턴과 비슷한 경향이 있음 
 * 템플릿 패턴은 흐름에 더 중점을 두고, strategy 는 가지수에 더 중점을 두는데 
 * 어짜피 후반후가면 섞어서 사용하게 됨.. 이론만 알고 빨리 넘어가자. 
 * 
 */

include_once './model/martA.php';

 $mart = new martA();
 $mart->start();
 

?>