<?php
require "src/exo.php"
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
          <label for="premier">Premier</label>
          <input type="text" name="premier" value="">
          <input type="submit" name="premierbut" value="Go">
        </form>
      </div>
      <div class="result">
        <?php
        if (isset($_POST['premierbut'])) {
          $num = $_POST['premier'];
          premier($num);
        }
        ?>
      </div>
    </div>

    <div class="seconde">
      <div class="form_seconde">
        <form class="" action="" method="post">
          <label for="seconde">Seconde</label>
          <input type="text" name="seconde" value="">
          <input type="submit" name="" value="Go">
        </form>
      </div>
      <div class="result">
        <?php
        if (isset($_POST['seconde'])) {
          $s = $_POST['seconde'];
          la_date($s);
        }
        ?>
      </div>
    </div>

    <div class="seconde">
      <div class="form_petit">
        <form class="" action="" method="post">
          <label for="petit">Le plus petit</label>
          <input type="text" name="petit" value="">
          <input type="submit" name="" value="Go">
        </form>
      </div>
      <div class="result">
        <?php
        if (isset($_POST['petit'])) {
          $string = $_POST['petit'];
          petit($string);
        }
        ?>
      </div>
    </div>

    <div class="seconde">
      <div class="form_romain">
        <form class="" action="" method="post">
          <label for="romain">Romain</label>
          <input type="text" name="romain" value="">
          <input type="submit" name="" value="Go">
        </form>
      </div>
      <div class="result">
        <?php
        if (isset($_POST['romain'])) {
          $rom = $_POST['romain'];
          ChiffreRomain($rom);
        }
        ?>
      </div>
    </div>

    <div class="seconde">
      <div class="form_facto">
        <form class="" action="" method="post">
          <label for="facto">Factorielle</label>
          <input type="text" name="facto" value="">
          <input type="submit" name="" value="Go">
        </form>
      </div>
      <div class="result">
        <?php
        if (isset($_POST['facto'])) {
          $a = $_POST['facto'];
          echo factorielle($a);
        }
        ?>
      </div>
    </div>

    <div class="seconde">
      <div class="form_hexa">
        <form class="" action="" method="post">
          <label for="hexa">Hexa</label>
          <input type="text" name="hexa" value="">
          <input type="submit" name="" value="Go">
        </form>
      </div>
      <div class="result">
        <?php
        if (isset($_POST['hexa'])) {
          $hexe = $_POST['hexa'];
          Hex_Dec($hexe);
        }
        ?>
      </div>
    </div>

    <div class="seconde">
      <div class="form_bin">
        <form class="" action="" method="post">
          <label for="bin">Binnaire</label>
          <input type="text" name="bin" value="">
          <input type="submit" name="" value="Go">
        </form>
      </div>
      <div class="result">
        <?php
        if (isset($_POST['bin'])) {
          $z = $_POST['bin'];
          Bin_binaire($z);
        }
        ?>
      </div>
    </div>

    <div class="seconde">
      <div class="form_check">
        <form class="" action="" method="post">
          <label for="mail">Verif mail</label>
          <input type="text" name="mail" value="">
          <br>
          <label for="ddn">Verif date de naissance</label>
          <input type="text" name="ddn" value="">
          <input type="submit" name="" value="Go">
        </form>
      </div>
      <div class="result">
        <?php
        if (isset($_POST['mail'])) {
          $mail = $_POST['mail'];
          verifMail($mail);
        }
        if (isset($_POST['ddn'])) {
          $ddn = $_POST['ddn'];
          verifDdn($ddn);
        }
        ?>
      </div>
    </div>

    <div class="seconde">
      <div class="form_bin">
        <form class="" action="" method="post">
          <label for="trinom">Tri nom</label>
          <input type="text" name="trinom" value="">
          <input type="submit" name="nomtri" value="Go">
        </form>
      </div>
      <div class="result">
        <?php
        if (isset($_POST['nomtri'])) {
          $z = $_POST['trinom'];
          //TriNames($z);
          triNom($z);
        }
        ?>
      </div>
    </div>

    <?php require "src/footer.php"; ?>

  </body>
</html>
