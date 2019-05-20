<?php
require "src/contact.php";
$test = new Bdd("semaine_php");
$test->connect();
$id;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php require "src/header.php" ?>

    <div class="premier">
      <div class="form_premier">
        <form class="" action="" method="post">
          <div class="premier">
            <label for="nom">Nom</label>
            <input type="text" name="nom" value="">
          </div>
          <div class="seconde">
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" value="">
          </div>
          <div class="seconde">
            <label for="ddn">Date de naissance</label>
            <input type="date" name="ddn" value="">
          </div>
          <div class="seconde">
            <label for="sexe">Sexe</label>
            <input type="text" name="sexe" value="">
          </div>
          <div class="seconde">
            <label for="mail">Mail</label>
            <input type="email" name="mail" value="">
          </div>
          <div class="seconde">
            <label for="addresse">Addresse</label>
            <input type="text" name="addresse" value="">
          </div>
          <input type="submit" name="gobut" value="Go">
        </form>
      </div>
      <?php
      if (isset($_POST['gobut'])) {
        $test->createContact($_POST['nom'], $_POST['prenom'], $_POST['ddn'], $_POST['sexe'], $_POST['mail'], $_POST['addresse']);
      }
      ?>

      <div class="result">
        <table border="1">
          <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Date de naissance</th>
            <th>Sexe</th>
            <th>Mail</th>
            <th>Addresse</th>
          </tr>
          <?php $tab = $test->affContact(); ?>
        </table>
      </div>
    </div>

    <div class="seconde">
      <form class="" action="" method="post">
        <select class="" name="select">
          <?php $tab = $test->selectNomprenom();
          ?>
        </select>
        <input type="submit" name="" value="Selec">
      </form>

        <form class="" action="" method="post">
          <div class="premier">
            <label for="updatenom">Nom</label>
            <input type="text" name="updatenom" value="<?php
            if (isset($_POST['select'])) {
              $id = $_POST['select'];
              $tab = $test->select($_POST['select']);
              echo $tab[0][1];
            }
            ?>">
          </div>
          <div class="seconde">
            <label for="updateprenom">Prenom</label>
            <input type="text" name="updateprenom" value="<?php
            if (isset($_POST['select'])) {
              $tab = $test->select($_POST['select']);
              echo $tab[0][2];
            }
            ?>">
          </div>
          <div class="seconde">
            <label for="updateddn">Date de naissance</label>
            <input type="date" name="updateddn" value="<?php
            if (isset($_POST['select'])) {
              $tab = $test->select($_POST['select']);
              echo $tab[0][3];
            }
            ?>">
          </div>
          <div class="seconde">
            <label for="updatesexe">Sexe</label>
            <input type="text" name="updatesexe" value="<?php
            if (isset($_POST['select'])) {
              $tab = $test->select($_POST['select']);
              echo $tab[0][4];
            }
            ?>">
          </div>
          <div class="seconde">
            <label for="updatemail">Mail</label>
            <input type="email" name="updatemail" value="
            <?php
            if (isset($_POST['select'])) {
              $tab = $test->select($_POST['select']);
              echo $tab[0][5];
            }
            ?>">
          </div>
          <div class="seconde">
            <label for="updateaddresse">Addresse</label>
            <input type="text" name="updateaddresse" value="
            <?php
            if (isset($_POST['select'])) {
              $tab = $test->select($_POST['select']);
              echo $tab[0][6];
            }
            ?>">
          </div>
          <div class="seconde">
            <label for="updateid">ID</label>
            <input type="text" name="updateid" value="
            <?php
            if (isset($_POST['select'])) {
              $tab = $test->select($_POST['select']);
              echo $tab[0][0];
            }
            ?>">
          </div>
          <input type="submit" name="update" value="Go">
          <?php
          if (isset($_POST['update'])) {
            $test->update($_POST['updateid'], $_POST['updatenom'], $_POST['updateprenom'], $_POST['updateddn'], $_POST['updatesexe'], $_POST['updatemail'], $_POST['updateaddresse']);
          }
          ?>
        </form>
    </div>

    <?php require "src/footer.php"; ?>

  </body>
</html>
