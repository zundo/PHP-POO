<?php

class Bdd
{
  private $host = "localhost";
  private $dbname;
  private $username = "root";
  private $password = "root";
  private $db;


  function __construct($dbname)
  {
    $this->dbname = $dbname;
  }

  public function connect() {
    try {
      $this->db = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  public function createContact($nom, $prenom, $ddn, $sexe, $mail, $addresse) {
    $req = $this->db->prepare('INSERT INTO contact (nom, prenom, ddn, sexe, mail, addresse)
                         VALUES (:nom, :prenom, :ddn, :sexe, :mail, :addresse)');
    $req->execute(array(
      ':nom' => $nom,
      ':prenom' => $prenom,
      ':ddn' => $ddn,
      ':sexe' => $sexe,
      ':mail' => $mail,
      ':addresse' => $addresse
    ));
  }

  public function affContact() {
    $req = $this->db->prepare('SELECT nom, prenom, ddn, sexe, mail, addresse FROM contact');
    $req->execute();
    $result = $req->fetchAll();
    for ($i=0; $i < count($result); $i++) {
      echo '<tr>';
      if ($i % 2 != 0) {
        for ($y=0; $y < 6 ; $y++) {
          echo '<td style="background-color:blue"> '.$result[$i][$y].'</td>';
        }
      } else {
        for ($y=0; $y < 6 ; $y++) {
          echo '<td> '.$result[$i][$y].'</td>';
        }
      }
      echo '</tr>';
    }
  }

  public function selectNomprenom() {
    $req = $this->db->prepare('SELECT id, nom, prenom FROM contact');
    $req->execute();
    $result = $req->fetchAll();
    for ($i=0; $i < count($result); $i++) {
      echo '<option value="'.$result[$i][0].'">'.$result[$i][1]." ".$result[$i][2].'</option>';
    }
  }

  public function select($id)
  {
    $req = $this->db->prepare('SELECT id, nom, prenom, ddn, sexe, mail, addresse FROM contact WHERE id = "'.$id.'"');
    $req->execute();
    $result = $req->fetchAll();
    return $result;
  }

  public function update($id, $nom, $prenom, $ddn, $sexe, $mail, $addresse){

    $req = $this->db->prepare('UPDATE contact
                               SET nom = :nom, prenom = :prenom, ddn = :ddn, sexe = :sexe, mail = :mail, addresse = :addresse
                               WHERE id = :id ');
    $req->execute(array(
      ':id' => $id,
      ':nom' => $nom,
      ':prenom' => $prenom,
      ':ddn' => $ddn,
      ':sexe' => $sexe,
      ':mail' => $mail,
      ':addresse' => $addresse
    ));
  }

}
?>
