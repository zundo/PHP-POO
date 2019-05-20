<?php
require "src/contact.php";
$test = new Bdd("semaine_php");
$test->connect();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php require "src/header.php"; ?>

    <div class="premier">
      <form class="" action="" method="post">
        <div class="premier">
          <label for="select">Destinataire</label>
          <select class="" name="select">
            <?php $tab = $test->selectNomprenom(); ?>
          </select>
        </div>
        <div class="premier">
          <label for="select">Expéditeur</label>
          <select class="" name="select">
            <?php $tab = $test->selectNomprenom(); ?>
          </select>
        </div>
        <div class="premier">
          <label for="prio">Prioritaire</label>
          <input type="checkbox" name="prio" value="">
          <label for="confi">Confidenciel</label>
          <input type="checkbox" name="confi" value="">
        </div>
        <input type="submit" name="" value="Go">
      </form>
    </div>


    <?php require "src/footer.php"; ?>
  </body>
</html>
