<?php
  echo PHP_VERSION;
  echo 2**10; // potęgowanie
  $x = 1;
  $y = 10;
  echo "<br>";

  echo $x<=>$y;

  $x = 1;
  $y = 1.0;

  echo gettype($x)."<br>";
  echo gettype($y);

  // == - ta sama wartość, niezalżenie od typu;
  if ($x==$y) {
    echo "Równe";
  } else {
    echo "Różne";
  }

  // === - ta sama wartość i typ
  if ($x===$y) {
    echo "identyczne";
  } else {
    echo "Różne";
  }

  /*
  preinkrementacja ++$x
  postinkrementacja $x++
  predekremnetacja --$x
  postdekrementajca $x--
  */

  echo "<br>";

  $x = 1;
  echo $x;  // 1
  echo "<br>";
  $x = $x++;
  echo $x; // 1
  echo "<br>";
  $x = ++$x;
  echo $x; // 2
  echo "<br>";
  $y = ++$x;
  echo $x;  // 3
  echo "<br>";
  echo $y; // 3
  echo "<br>";
  $y = $x++;
  echo $x; // 4
  echo "<br>";
  echo $y; // 3
  echo "<br>";



?>
