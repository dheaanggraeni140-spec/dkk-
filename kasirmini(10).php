
<?php
$nama = "";
$harga = "";
$jumlah = "";
$total = 0;
$diskon = 0;
$bayar = 0;

if (isset($_POST['hitung'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    if ($nama == "" || $harga == "" || $jumlah == "") {
        echo "Semua kolom wajib diisi!";
    } else {
        $total = $harga * $jumlah;

        if ($total > 100000) {
            $diskon = $total * 10 / 100;
        }

        $bayar = $total - $diskon;
    }
}
?>

<h2>MINI PROJECT KASIR</h2>

<form method="POST">
    Nama Barang:
    <input type="text" name="nama"><br><br>

    Harga Barang:
    <input type="number" name="harga"><br><br>

    Jumlah Barang:
    <input type="number" name="jumlah"><br><br>

    <button type="submit" name="hitung">Hitung Total</button>
</form>

<?php
if (isset($_POST['hitung']) && $nama != "" && $harga != "" && $jumlah != "") {
?>

<h3>STRUK BELANJA</h3>

Nama Barang: <?php echo htmlspecialchars($nama); ?><br>
Harga: Rp<?php echo number_format($harga, 0, ',', '.'); ?><br>
Jumlah: <?php echo $jumlah; ?><br>
Total Belanja: Rp<?php echo number_format($total, 0, ',', '.'); ?><br>
Diskon 10%: Rp<?php echo number_format($diskon, 0, ',', '.'); ?><br>

<hr>

<b>Total Bayar: Rp<?php echo number_format($bayar, 0, ',', '.'); ?></b>

<?php
}
?>

