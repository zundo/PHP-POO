<?php

function premier($a) {
  echo "Jusqu'a " . $a . " les nombres premiers sont: ";
  for ($i=2; $i<=$a; $i++) {
    $premier = true;
    for ($y=2; $y<$i; $y++) {
      if ($i%$y==0) {
        $premier = false;
      }
    }
    if ($premier == true) {
      echo $i . PHP_EOL;
    }
  }
}

function petit($a) {
    $chiffre = explode("/", $a);
    for ($i=0; $i < sizeof($chiffre); $i++) {
      for ($y=$i+1; $y < sizeof($chiffre); $y++) {
          if ($chiffre[$i] > $chiffre[$y]) {
              $check = $chiffre[$i];
              $chiffre[$i] = $chiffre[$y];
              $chiffre[$y] = $check;
          }
      }
    }
    echo "Le plus petit nombre est " . $chiffre[0];
}

function verifMail($a) {
  $tab = str_split($a);
  $check = true;
// Verif si mail plus de 3 lettre et possede un @
  if (count($tab) < 3 || !in_array("@", $tab)) {
    $check = false;
  }
//Recherche de l'index de @
  $atindex = array_search("@", $tab);
//Nvo mail avec l'apres @
  $endmail = array_slice($tab, $atindex);
//Verif si . apres @
  if (!in_array(".", $endmail)) {
    $check = false;
  }
//Conclusion
  if ($check == false) {
    echo "Mail invalide";
  } else {
    echo $a;
  }
}

function verifDdn($a) {
  $dt = DateTime::createFromFormat("d/m/y", $a);
  if ($dt == true) {
    echo $a;
  }
  if ($dt == false) {
    echo "Mauvais format ddn";
  }
}

function factorielle($nombre) {
  if ($nombre == 0) {
    return $nombre;
  }
  $result = 1;
  for ($i=1; $i <= $nombre ; $i++) {
    $result *= $i;
  }
  return $result;
}

function la_date($give){
  #obtenir la date d'aujourdh'hui.
    $today = microtime(true);
    $micro = sprintf("%06d",($today - floor($today)) * 1000000);
    $dates = new DateTime(date('Y-m-d'.$micro,$today));
#scinder la date.
    $today_sep= explode('/', $dates);
#identifier la table avec le jour et le mois.
    $le_jour = $today_sep[0];
    $le_mois = $today_sep[1];
    $l_annee = $today_sep[2];
    $le_mois = array ('1' => 'JANVIER','2' => 'FEVRIER','3' => 'MARS','4' => 'AVRIL','5' => 'MAI','6' => 'JUIN','7' => 'JUILLET','8' => 'AOUT','9' => 'SEPTEMBRE','10' => 'OCTOBRE','11' => 'NOVEMBRE','12' => 'DECEMBRE');

#verifier que le nombre de seconde entré est arrondi à un int.
    $count_days = round($give/60/60/24);
#trouver le nouveau jour.
    $day_of_event = $le_jour - $count_days;
#donner la date reelle.
    $le_jour = $day_of_event;
    echo "L'évènement a eu lieu le " . $le_jour . " ". $le_mois . " " . $le_mois ;
}

function Hex_Dec ($nombre){
    $C = dechex($nombre);
    echo "La valeur " . $nombre.  " en décimal correspond à la valeur ". $C ." en Hexa";
}

function ChiffreRomain($nombre){
#identifier les ciffre
    $chiffre_romain = array(
    'M' => 1000,
    'CM' => 900,
    'D' => 500,
    'CD' => 400,
    'C' => 100,
    'XC' => 90,
    'L' => 50,
    'XL' => 40,
    'X' => 10,
    'IX' => 9,
    'V' => 5,
    'IV' => 4,
    'I' => 1
    );
#recuperer la valeur du nombre entré et la stocker pour le resultat
    $number = intval($nombre);
    $sortie='';
#transformation et correspondance en romain
    foreach ($chiffre_romain as $roman => $test) {
      $chiffre = intval($number / $test);
    #stockage
      $sortie .= str_repeat($roman, $chiffre);
    #soustraire du nombre
      $number = $number%$test;
    }
    echo "Le nombre " . $nombre . " s'écrit en Romain " . $sortie . " si j ai saisi le nombre " . $nombre;
}

function Bin_binaire($nombre){
  $C = decbin($nombre);
  echo "Le nombre " .$nombre. " en binaire vaut  ". $C.  " en binaire." ;
}


function triNom($a){
  $alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
  $tab = explode(",", $a);
  for ($y=0; $y < count($tab); $y++) {
    for ($i=0; $i < count($tab) - 1; $i++) {
      if (array_search($tab[$i][1], $alphabet) > array_search($tab[$i+1][1], $alphabet)) {
          $stock = $tab[$i];
          $tab[$i] = $tab[$i+1];
          $tab[$i+1] = $stock;
      }
    }
  }
  for ($g=0; $g < count($tab); $g++) {
    echo $tab[$g] . PHP_EOL;
  }
}

?>
