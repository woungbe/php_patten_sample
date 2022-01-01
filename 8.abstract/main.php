<?php

/**
 * 추상팩토리 패턴 
 * 이건 거희 대부분 사용된다고 보면 됨 ..  
 * 작은 단위 : function 모음들..  
 * 어떤 값을 넣던지. string 으로 나온다 라던지... 
 * 이런 것들이 필요하긴 함 .. 
 * 
 * 
 */
include_once "./interface/Button.php";
include_once "./interface/TextArea.php";
include_once "./interface/Gui.php";

include_once "./model/linux/linuxButton.php";
include_once "./model/linux/linuxTextArea.php";
include_once "./model/linux/linuxGui.php";

include_once "./model/mac/macButton.php";
include_once "./model/mac/macTextArea.php";
include_once "./model/mac/macGui.php";

include_once "./model/window/windowButton.php";
include_once "./model/window/windowTextArea.php";
include_once "./model/window/windowGui.php";

include_once "./controller/factory.php";


factory::$name = 1;

$fac = factory::getInstance();
$button = $fac->createButton();
$textArea = $fac->createTextArea();


$button->click();
echo $textArea->getText()."\n";