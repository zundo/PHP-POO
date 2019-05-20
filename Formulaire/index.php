<?php require "src/personne.php"
      //require "src/info.php"
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <center><img src="coding.jpg" style="height:100px"></center>
      <div class="bar">
        <button class="but" type="button" name="button">Menu 1</button>
        <button class="but" type="button" name="button">Menu 2</button>
        <button class="but" type="button" name="button">Menu 3</button>
      </div>
    </header>
    <div id="main">
      <div class="formulaire">
        <!-- action="src/info.php" -->
        <form class="form" method="post">
          <div class="group">
            <label for="nom" class="form-label">Nom</label>
            <input id="nom" type="text" class="form-control" name="nom">
          </div>
          <div class="group">
            <label for="prenom" class="form-label">Prenom</label>
            <input id="prenom" type="text" class="form-control" name="prenom">
          </div>
          <div class="group">
            <label for="ddn" class="form-label">Date de naissance</label>
            <input id="ddn" type="text" class="form-control" name="ddn">
          </div>
          <div class="group">
            <label for="sexe" class="form-label">Sexe</label>
            <input id="sexe" type="text" class="form-control" name="sexe">
          </div>
          <div class="group">
              <button class="but" type="submit" name="button">Valider</button>
          </div>
        </form>
      </div>
      <div id="resultat">
        <p>Resultat:</p>
        <?php
          $moi = new Personne($_POST['nom'], $_POST['prenom'], $_POST['ddn'], $_POST['sexe']);
          echo $moi->getNom() . PHP_EOL . $moi->getPrenom() . PHP_EOL . $moi->getDdn() . PHP_EOL . $moi->getSexe() . PHP_EOL . $moi->getAge() . PHP_EOL;
          //$tab = array("Mathilde", "Pierrick", "Alexis", "Manon");
          //print_r($moi->startName($tab));
          // $nom = $_POST['nom'];
          // $prenom = $_POST['prenom'];
          // $ddn = $_POST['ddn'];
          // $sexe = $_POST['sexe'];
          // echo $nom . PHP_EOL . $prenom . PHP_EOL . $ddn . PHP_EOL . $sexe;
        ?>
      </div>
    </div>
    <footer>
      <a id="contact"href="#">CONTACT</a>
    </footer>
  </body>
</html>
