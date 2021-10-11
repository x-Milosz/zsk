<!DOCTYPE html>
<html>
<head>

</head>
<body>
<h3>Kwadrat</h3>
<form method="get">
    <input type="number" name="sideA" placeholder="Podaj bok a"><br><br>
    <input type="number" name="sideB" placeholder="Podaj bok b"><br><br>
    <input type="submit" value="Oblicz">
</form>
<?php
if (!empty($_GET["sideA"] && !empty($_GET["sideB"]))) {
    echo "ok";
    $sideA=$_GET["sideA"];
    $sideB=$_GET["sideB"];
    $sideA = str_replace(",", ".", $sideA);
    $sideB = str_replace(",", ".", $sideA);
    $area=$sideA * $sideB;
    $circuit = 2 * $sideA + 2 * $sideB;

    echo <<< RESULT
                <hr>
                Pole kwadratu wyosi $area<sup>2</sup> cm<br>
                Obwód kwadratu wynosi $circuit cm
RESULT;

} else {
    echo "Wypełnij pole a i b";
}
?>
</body>
</html>