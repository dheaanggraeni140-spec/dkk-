
<?php

$phi = 3.14;

for ($r = 7; $r <= 14; $r += 7) {

    $luas = $phi * $r * $r;
    $keliling = 2 * $phi * $r;

    echo "Jari-jari = $r <br>";
    echo "Luas = $luas <br>";
    echo "Keliling = $keliling <br><br>";
}

?>
