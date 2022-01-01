<?php 

include_once "./model/Shape.php";
include_once "./model/Cirecle.php";


$c1 = new CirCle(1,1,2);
$c2 = $c1->copy();


$c1->toString();
$c2->toString();

?>