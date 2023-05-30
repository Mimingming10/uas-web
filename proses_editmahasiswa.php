<?php
// Mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
    // Memanggil file koneksi.php untuk membuat koneksi
    include("koneksi.php");

    // Membuat variabel untuk menampung data dari form edit
    $npm = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];

    // Membuat dan menjalankan query UPDATE menggunakan prepared statement
    $query = "UPDATE t_mahasiswa SET npm=?, namaMhs=?, prodi=?, alamat=?, noHP=? WHERE npm=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssssss", $npm, $namaMhs, $prodi, $alamat, $noHP, $npm);
    $result = $stmt->execute();

    // Periksa query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . $stmt->errno . " - " . $stmt->error);
    }
}

// Lakukan redirect ke halaman viewmahasiswa.php
header("location:viewmahasiswa.php");
?>
