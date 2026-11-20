
<?php
$nilai = [
    "Andi" => 85,
    "Budi" => 90,
    "Citra" => 78,
    "Dina" => 95,
    "Eko" => 80
];

$total = 0;
$tertinggi = max($nilai);
$terendah = min($nilai);

echo "<h2>DAFTAR NILAI SISWA</h2>";

echo "<table border='1' cellpadding='10'>";
echo "<tr>
        <th>Nama Siswa</th>
        <th>Nilai</th>
      </tr>";

foreach ($nilai as $nama => $angka) {
    echo "<tr>";
    echo "<td>$nama</td>";
    echo "<td>$angka</td>";
    echo "</tr>";

    $total += $angka;
}

echo "</table>";

$rata = $total / count($nilai);

echo "<br>";
echo "Rata-rata: " . $rata . "<br>";
echo "Nilai Tertinggi: " . $tertinggi . "<br>";
echo "Nilai Terendah: " . $terendah;
?>
