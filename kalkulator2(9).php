
<?php
$hasil = "";

if (isset($_POST['hitung'])) {
    $a = $_POST['angka1'];
    $b = $_POST['angka2'];
    $operator = $_POST['operator'];

    if ($a === "" || $b === "") {
        $hasil = "Angka wajib diisi!";
    } else {
        switch ($operator) {
            case "+":
                $hasil = $a + $b;
                break;

            case "-":
                $hasil = $a - $b;
                break;

            case "*":
                $hasil = $a * $b;
                break;

            case "/":
                if ($b == 0) {
                    $hasil = "Tidak bisa dibagi nol!";
                } else {
                    $hasil = $a / $b;
                }
                break;

            default:
                $hasil = "Operator tidak valid!";
        }
    }
}
?>

<h2>Kalkulator PHP</h2>

<form method="POST">
    Angka pertama:
    <input type="number" name="angka1" step="any"><br><br>

    Pilih operator:
    <select name="operator">
        <option value="+">Tambah (+)</option>
        <option value="-">Kurang (-)</option>
        <option value="*">Kali (*)</option>
        <option value="/">Bagi (/)</option>
    </select><br><br>

    Angka kedua:
    <input type="number" name="angka2" step="any"><br><br>

    <button type="submit" name="hitung">Hitung</button>
</form>

<h3>Hasil: <?php echo $hasil; ?></h3>
