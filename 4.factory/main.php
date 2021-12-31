<?php 
/**
 * 기능과 구조의 분리 - 패턴의 전체적인 핵심 내용임 . 
 * 
 * strategy 패턴은 흐름을 기준으로 "실행" 되고  - controller 쪽 
 * factory 패턴은 여러 단계를 객체로 "리턴" 한다..   - model 쪽 
 * 사실 템플릿 패턴과 별반 차이가 없긴하다 .. 
 * 어떤 객체을 생성하기 위한 흐름이 존재할때 factory pattern을 사용한다. 
 */


include_once "./model/InterfaceItem.php";
include_once "./model/ItemCreator.php";
include_once "./model/HpPotion.php";


$hpPotion = new HpCreator();
$redPotion = $hpPotion->create();
$redPotion->use();





?>