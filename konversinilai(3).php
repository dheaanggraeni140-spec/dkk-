<?php

$nilai = 77;

if ($nilai >= 90) {
    $predikat = "A";
} elseif ($nilai >= 80) {
    $predikat = "B";
} elseif ($nilai >= 70) {
    $predikat = "C";
} elseif ($nilai >= 60) {
    $predikat = "D";
} else {
    $predikat = "E";
}

echo "Nilai: $nilai <br>";
echo "Predikat: $predikat";

?>