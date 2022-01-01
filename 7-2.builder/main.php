<?php

include_once "./interface/BluePrint.php";
include_once "./model/Computer.php";
include_once "./model/LGComputer.php";
include_once "./model/ComputerFactory.php";


$lg = new LGBluePrint();
$factory = new ComputerFactory();
$factory->setBluePrint($lg);

$com = $factory->getComputer();

echo $com->toString();

// $lg->computer->cpu = 'i9';
// $lg->computer->ran = '32g';
// $lg->computer->ran = '4T';
