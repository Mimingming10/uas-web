<?php
// Memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// Mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {
    // Membuat variabel untuk menampung data dari form
    $npm = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];

    // Membuat dan menjalankan prepared statement untuk memasukkan data ke database
    $stmt = $conn->prepare("INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $npm, $namaMhs, $prodi, $alamat, $noHP);
    $stmt->execute();

    // Mengecek apakah query gagal
    if (!$stmt) {
        die("Query gagal dijalankan: " . $stmt->errno . " - " . $stmt->error);
    }
}

// Melakukan redirect (mengalihkan ke halaman viewmahasiswa.php)
header("location:viewmahasiswa.php");
?>
