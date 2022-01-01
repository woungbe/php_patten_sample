<?php

/**
 * 빌더패턴의 번외 작업인 체이닝 ... 이건 왠만한 OOP에서는 다사용가능함 
 * C++ 체인님 변수를 만들어서 사용하는 것도 봤음. ->  하면 어떻게 해라.. 이런거. 
 * 
 */

include_once "./model/computer.php";
include_once "./controller/computerBuilder.php";


$computerBuiler = new ComputerBuilder();

$computer = $computerBuiler
->setCpu('i9')
->setRam('32G')
->setStorage('512 ssd')
->builder();

echo $computer->toString();


?>