
<?php
$nama = "";
$email = "";
$umur = "";

if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $umur = $_POST['umur'];

    if (empty($nama) || empty($email) || empty($umur)) {
        echo "Semua kolom wajib diisi!";
    } else {
        echo "Pendaftaran berhasil!<br>";
        echo "Nama: $nama <br>";
        echo "Email: $email <br>";
        echo "Umur: $umur";
    }
}
?>

<h2>Form Pendaftaran</h2>

<form method="POST">
    Nama: <input type="text" name="nama"><br><br>

    Email: <input type="email" name="email"><br><br>

    Umur: <input type="number" name="umur"><br><br>

    <button type="submit" name="daftar">Daftar</button>
</form>
