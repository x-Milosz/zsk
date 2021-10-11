<html>
<head>
    <title>Średni wiek</title>
</head>
<body>
<?php
if (!isset($_POST['quantity']) && !isset($_POST['age0'])) {
    echo <<<EOF
    <h3>Ilość osób w rodzinie</h3>
    <form action="" method="post">
        <input type="number" name="quantity" placeholder="Podaj ilość w rodzinie"><br><br>
        <input type="submit" name="submit">
    </form>
EOF;
} else {
    $quantity = $_POST['quantity'];
    echo "<h3>Ilość osób w rodzinie: $quantity</h3>";
    echo "<form method='post'>";
    for ($i = 0; $i < $quantity; $i++) {
        $numeration = $i + 1;
        echo "<input type='number' name='age$i' placeholder='Podaj wiek osoby nr $numeration'><br><br>";
    }
    echo "<input type='submit' placeholder='oblicz'>";
    echo "</form>";

    if (!empty($_POST['age0'])) {
        echo 'Średni wiek: ';
        $avg = 0;
        echo $quantity; // Nie ma
        for ($i = 0; $i < $quantity; $i++) {
            echo $_POST["age$i"];
            $avg += $_POST["age$i"];
        }
        $avg = $avg / $quantity;
        echo number_format($avg, 2);
        echo '<a href="zadanie.php">Strona główna</a>';
    }
}
?>
</body>
</html>