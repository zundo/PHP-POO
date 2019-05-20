<?php

require "calculette.php";

$calcul = new Calculette(45,1.95);
echo $calcul->addition($calcul->getNum1(), $calcul->getNum2());
echo "<br>";
echo $calcul->multiplication($calcul->getNum1(), $calcul->getNum2());
echo "<br>";
echo $calcul->division($calcul->getNum1(), $calcul->getNum2());
echo "<br>";
echo $calcul->modulo($calcul->getNum1(), $calcul->getNum2());
echo "<br>";
echo $calcul->premier($calcul->getNum1(), $calcul->getNum2());
echo "<br>";
$calcul->decrement($calcul->getNum1());
echo $calcul->imc($calcul->getNum1(), $calcul->getNum2());

?>
