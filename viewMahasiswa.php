<?php
    include 'koneksi.php'; // memanggil file koneksi.php untuk melakukan koneksi database

    // Proses pencarian
    $keyword = '';
    if (isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];

        // Persiapan prepared statement dengan parameter yang diikat
        $stmt = $conn->prepare("SELECT * FROM t_mahasiswa WHERE namaMhs LIKE ?");
        $keyword = "%" . $keyword . "%";
        $stmt->bind_param("s", $keyword);
        $stmt->execute();

        // Mendapatkan hasil
        $result = $stmt->get_result();

        // Mengecek apakah ada error ketika menjalankan prepared statement
        if (!$result) {
            die("Query Error: " . $stmt->errno . " - " . $stmt->error);
        }
    } else {
        // Jika tidak ada keyword pencarian, jalankan query untuk menampilkan semua data diurutkan ascending berdasarkan npm
        $query = "SELECT * FROM t_mahasiswa ORDER BY npm ASC";
        $result = mysqli_query($conn, $query);

        // Mengecek apakah ada error ketika menjalankan query
        if (!$result) {
            die("Query Error: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>DATA MAHASISWA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("gambar/view.jpeg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            color: #000000;
        }

        h1 {
            text-align: center;
            margin-top: 0;
            padding: 20px;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            color: #000000;
        }

        a {
            text-decoration: none;
            color: #000;
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .search-form {
            text-align: center;
            margin-bottom: 20px;
        }

        .search-form input[type="text"] {
            width: 200px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        .search-form input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .search-form input[type="submit"]:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: hsl(0, 0%, 100%);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .action-links {
            text-align: center;
        }

        .action-links a {
            margin-right: 10px;
        }

        button {
            float: right;
            background: hsl(212, 78%, 45%);
            padding: 10px 15px;
            color: #fff;
            border-radius: 5px;
            margin-right: 10px;
            border: none;
        }

        button:hover {
            opacity: .7;
        }

        a {
            font-size: 18px;
            display: inline-block;
            padding: 10px;
            text-decoration: none;
            color: #444;
            text-decoration: underline;
            color: #000000;
        }

        .a:hover {
            opacity: .7;   
            border-bottom: none;
        }

        #copyright {
        color: #000000;
        text-align: center;
        width: 100%;
        padding: 10px 0px 10px 0px;
        margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <center>
    <a href="inputmahasiswa.php">Tambah Data</a>
        <br>
        <form action="" method="GET">
            <input type="text" name="keyword" placeholder="Cari berdasarkan nama" value="<?php echo $keyword; ?>">
            <input type="submit" value="Cari">
        </form>
    </center>
    <br>
    <table border="1">
        <tr>
            <th>NPM</th>
            <th>Nama Mahasiswa</th>
            <th>Program Studi</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Pilihan</th>
        </tr>
        <?php
        while ($data = $result->fetch_assoc()) {
            // Mencetak atau menampilkan data
            echo "<tr>";
            echo "<td>" . $data['npm'] . "</td>"; // Menampilkan data npm
            echo "<td>" . $data['namaMhs'] . "</td>"; // Menampilkan data nama mahasiswa
            echo "<td>" . $data['prodi'] . "</td>"; // Menampilkan data prodi
            echo "<td>" . $data['alamat'] . "</td>"; // Menampilkan data alamat
            echo "<td>" . $data['noHP'] . "</td>"; // Menampilkan data no hp mahasiswa

            // Membuat link untuk mengedit dan menghapus data
            echo '<td>
             <a href="editmahasiswa.php?npm=' . $data['npm'] . '">Edit</a>
             <a href="hapusmahasiswa.php?npm=' . $data['npm'] . '"
                onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
                </td>';
             echo "</tr>";
        }
        ?>
    </table>
    </div>
    <form action="login.php" method="post">
        <button type="submit">Keluar</button>
    </form>
    <div id="copyright">
            <div class="wrapper">
            &copy; 2023. <b>Natasya Inge Nugroho.</b> All Rights Reserved.
            </div>
    </div>
</body>
</html>
