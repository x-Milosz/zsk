<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Początek</h3>

    <?php
    // include - daje warningi przy błędnym path`
      include './nowyplik.php';
      // include_once  - działą tylko przy pierwszym dołączeniu pliku
      include_once './nowyplik.php';
      // requite, daje warning i fatal error, czyli zakańcza dalsze wykonowanie kodu
      // require './nowyplik.php';;
     ?>

    <h3>Koniec</h3>
  </body>
</html>
