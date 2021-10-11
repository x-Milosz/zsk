<?php
echo "<pre>";
print_r(($_POST));
echo "</pre>";

if (!empty($_POST['name']) && !empty($_POST['rectangleFigure'])) {
    echo "ok";
    switch ($_POST['rectangleFigure']) {
        case "kwadrat";
            echo "Test";
            header('location: ./square.php');
            break;
        case "prostokat":
            echo "prostokat";
            header('location: ./rectangle.php');
            break;
    }
} else {
    ?>
    <script>
        history.back();
    </script>
    <?php
}
