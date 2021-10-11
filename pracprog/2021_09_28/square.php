<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h3>Kwadrat</h3>
        <form method="get">
            <input type="number" name="sideA" placeholder="Podaj bok a"><br><br>
            <input type="submit" value="Oblicz">
        </form>
    <?php
        if (!empty($_GET["sideA"])) {
            echo "ok";
            $sideA=$_GET["sideA"];
            $sideA = str_replace(",", ".", $sideA);
            $area=pow($sideA, 2);
            $circuit = 4 * $sideA;

            echo <<< RESULT
                <hr>
                Pole kwadratu wyosi $area<sup>2</sup> cm<br>
                Obwód kwadratu wynosi $circuit cm
RESULT;

        } else {
            echo "Wypełnij pole a";
        }
    ?>
    </body>
</html>