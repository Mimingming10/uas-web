<?php
// Buka koneksi dengan MySQL
include("koneksi.php");

// Mengecek apakah di URL ada GET npm
if (isset($_GET['npm'])) {
    // Menyimpan variabel id dari URL ke dalam variabel $npm
    $id = $_GET["npm"];

    // Jalankan query DELETE menggunakan prepared statement
    $query = "DELETE FROM t_mahasiswa WHERE npm=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $id);
    $result = $stmt->execute();

    // Periksa query, apakah ada kesalahan
    if (!$result) {
        die("Gagal menghapus data: " . $stmt->errno . " - " . $stmt->error);
    }
}

// Lakukan redirect ke halaman viewmahasiswa.php
header("location:viewmahasiswa.php");
?>
