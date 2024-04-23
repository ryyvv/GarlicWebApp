<?php require('./app/partials/header.php') ?>

<main>
    <?php
    error_reporting(E_ERROR | E_PARSE);
    if ($fetchUserTable > 0) {
        foreach ($fetchUserTable as $outer_key => $inner_array) {
            foreach ($inner_array as $inner_key => $value1) {
                if ($inner_key == 'userData'   &&  is_array($value1)) {
                    foreach ($value1 as $value_key => $value2) {
                    }
                }
            }
        }
    } else {
        echo "data not found!";
    }
    ?>

</main>

<?php require('./app/partials/footer.php') ?>