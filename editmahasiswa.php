<?php
// Memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

// Mengecek apakah di URL ada nilai GET npm
if (isset($_GET['npm'])) {
    // Ambil nilai npm dari URL dan simpan dalam variabel $npm
    $id = $_GET['npm'];

    // Menampilkan data t_mahasiswa dari database yang mempunyai npm=$npm
    $query = "SELECT * FROM t_mahasiswa WHERE npm = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Mengecek apakah ada error ketika menjalankan query
    if (!$result) {
        die("Query Error: " . $stmt->errno . " - " . $stmt->error);
    }

    // Mengambil data dari database dan membuat variabel-variabel untuk menampung data
    // Variabel ini nantinya akan ditampilkan pada form
    $data = $result->fetch_assoc();
    $npm = $data["npm"];
    $namaMhs = $data["namaMhs"];
    $prodi = $data["prodi"];
    $alamat = $data["alamat"];
    $noHP = $data["noHP"];
} else {
    // Apabila tidak ada data GET npm, akan di-redirect ke viewmahasiswa.php
    header("location:viewmahasiswa.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
    <title>EDIT DATA</title>
        <style>
                body {
                    font-family: Arial, sans-serif;
                    background-image: url("gambar/edit.jpeg");
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                    margin: 0;
                    padding: 0;
                    color: hsl(0, 0%, 100%);
                }

                h1 {
                text-align: center;
                margin-top: 20px;
                color: #000000;
                }

                .container {
                    width: 400px;
                    margin: auto;
                }

                fieldset {
                    background: hsl(199, 69%, 88%);
                    border: none;
                    padding: 10px;
                    border-radius: 5px;
                    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
                }

                label {
                    display: block;
                    margin-bottom: 5px;
                    font-weight: bold;
                    color: #000000;
                }

                input[type="text"] {
                    width: 100%;
                    padding: 8px;
                    border: 1px solid #ccc;
                    border-radius: 3px;
                    box-sizing: border-box;
                    margin-bottom: 10px;
                }

                input[type="submit"] {
                    padding: 10px 20px;
                    background-color: hsl(212, 78%, 45%);
                    color: #fff;
                    border: none;
                    border-radius: 3px;
                    cursor: pointer;
                }

                input[type="submit"]:hover {
                    opacity: .7;
                }

                .disabled {
                    background-color: #f5f5f5;
                    cursor: not-allowed;
                    color: #aaa;
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
        <h1>Edit Data</h1>
        <div class="container">
            <form id="form_mahasiswa" action="proses_editmahasiswa.php" method="post">
                <fieldset>
                    <p>
                        <label for="npm">NPM :</label>
                        <input type="hidden" name="npm" value="<?php echo $npm; ?>">
                        <input type="text" name="npmDisabled" id="npmDisabled" value="<?php echo $npm; ?>" disabled>
                    </p>
                    <p>
                        <label for="namaMhs">Nama Mahasiswa :</label>
                        <input type="text" name="namaMhs" id="namaMhs" value="<?php echo $namaMhs; ?>">
                    </p>
                    <p>
                        <label for="prodi">Prodi :</label>
                        <input type="text" name="prodi" id="prodi" value="<?php echo $prodi; ?>">
                    </p>
                    <p>
                        <label for="alamat">Alamat :</label>
                        <input type="text" name="alamat" id="alamat" value="<?php echo $alamat; ?>">
                    </p>
                    <p>
                        <label for="noHP">No HP :</label>
                        <input type="text" name="noHP" id="noHP" value="<?php echo $noHP; ?>">
                    </p>
                </fieldset>
                <p>
                    <input type="submit" name="edit" value="Update Data">
                </p>
            </form>
        </div>
        <div id="copyright">
            <div class="wrapper">
            &copy; 2023. <b>Natasya Inge Nugroho.</b> All Rights Reserved.
            </div>
        </div>
    </body>
</html>
