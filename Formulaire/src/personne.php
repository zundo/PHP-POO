<?php

class Personne {
  private $nom;
  private $prenom;
  private $ddn;
  private $sexe;

  public function __construct(string $nom, string $prenom, string $ddn, string $sexe) {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->ddn = $ddn;
    $this->sexe = $sexe;
  }

  public function getNom() {
    return $this->nom;
  }

  public function getPrenom() {
    return $this->prenom;
  }

  public function getDdn() {
    return $this->ddn;
  }

  public function getSexe() {
    return $this->sexe;
  }

  public function getAge() {
    $stime = strtotime(date("d.m.y")) - strtotime($this->ddn);
    $sec = floor($stime);
    $age = floor(($sec/86400)/365);
    return $age;
  }

  public function setNom($nom) {
    $this->nom = $nom;
  }

  public function setPrenom($prenom) {
    $this->prenom = $prenom;
  }

  public function setDdn($ddn) {
    $this->ddn = $ddn;
  }

  public function setSexe($sexe) {
    $this->sexe = $sexe;
  }

  public function startName($tab){
    $nom;
    foreach ($tab as $key => $value) {
      if (substr($value, 0, 1) == "M" || substr($value, 0, 1) == "P") {
        $nom[] = $value;
      }
    }
    return $nom;
  }

}
?>
