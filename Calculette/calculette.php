<?php

class Calculette
{
  public $num1;
  public $num2;

  public function __construct($nbr1, $nbr2)
  {
    $this->num1 = $nbr1;
    $this->num2 = $nbr2;
  }

  public function getNum1() {
    return $this->num1;
  }

  public function getNum2() {
    return $this->num2;
  }

  public function addition($num1, $num2) {
    return $num1 + $num2;
  }

  public function multiplication($num1, $num2) {
    return $num1 * $num2;
  }

  public function division($num1, $num2) {
    return $num1 / $num2;
  }

  public function modulo($num1, $num2) {
    return $num1 % $num2;
  }

  public function premier($num1) {
    $premier = true;
    if ($num1 == 0 || $num1 == 1) {
      $premier = false;
    } else {
      for ($i=2; $i < $num1; $i++) {
        if ($num1 % $i == 0) {
          $premier = false;
        }
      }
    }
    if ($premier == true) {
      echo "Premier";
    } else {
      echo "Pas premier";
    }
  }

  public function decrement($num1) {
    if ($num1 == 45) {
      do {
        echo $num1 . PHP_EOL;
        $num1 -= 2;
      } while ($num1 >= 0);
    }
  }

  public function imc($num1, $num2) {
    return $num1/($num2 * $num2);
  }

}


?>
