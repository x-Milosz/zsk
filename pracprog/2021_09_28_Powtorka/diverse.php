<?php
    if (!empty($_POST['name']) && !empty($_POST['surname'])) {
        if ($_POST['agreed']) {
            echo 'ok';

        } else {
            his();
        }
    } else {
        his();
    }

    function his() {
        ?>
        <script>
            history.back();
        </script>
        <?php
    }
