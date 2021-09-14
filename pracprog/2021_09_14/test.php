<?php
  echo "janusz<br>";
  echo "janusz<br>";

  $name = "Janusz";
  echo  "Imię: $name<br>"; // ctrl+szift+d duplikowanie lini,"" - te apostrofy żeby używać $variable, ctrl multile |

  // Całkowita
  $całkowita = 10;
  // binarne
  $bin = 0b101;
  // Oktalna
  $oct = 011;
  // Heksadecymalna
  $hex = 0xA;

  echo "$hex";

  echo "<br>";

  // Konkatencja
  echo "text1"."text2";

  // Interpolacja
  echo "text1", "text2";

  // Zmiennoprzecinokowe
  $x = 1.2;

  // logiczne, boolean
  $logic = true; // print: 1
  // $logic = false; // print: (nic nie wyświetla)

  echo <<<ETYKIETA
  <hr>
  Imię $name<br>
  <h3>Poznań</h3>
  <hr>
  ETYKIETA;

  // Skłądnia heredoc, zakaz białych znakóœ za etykietą,
  $text2 = <<<ETYKIETA
  <hr>
  Imię $name<br>
  <h3>Poznań</h3>
  <hr>
  ETYKIETA;

  echo "$text2";

  // nowdoc - traktuje wszystko jak tekst, jak etykieta w apostrofie, domyślnie jak bez "" heredoc
  echo <<<'ETYKIETA'
  <hr>
  Imię $name<br>
  <h3>Poznań</h3>
  <hr>
  ETYKIETA;

  echo "Wartość zmiennej name: $name, nazwa zmiennej
  name: \$name"; // Backslash prze \$name ingoruje vara


 ?>
