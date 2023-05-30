<!DOCTYPE html>
<html lang="en">
<head>
<title>INPUT DATA</title>
<style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("gambar/input.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
        }
        
        h1 {
            text-align: center;
            margin-top: 0;
            color: hsl(0, 0%, 100%);
        }
        
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        a {
            font-size: 14px;
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
        
        form {
            margin-top: 20px;
        }
        
        fieldset {
            border: none;
        }
        
        legend {
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        input[type="number"],
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        
        input[type="submit"] {
            padding: 10px 20px;
            background: hsl(212, 78%, 45%);
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            opacity: .7;
        }

        #copyright {
            color: hsl(0, 0%, 100%);
            text-align: center;
            width: 100%;
            padding: 10px 0px 10px 0px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>INPUT DATA</h1>
    <div class="container">
        <form id="form_mahasiswa" action="proses_inputmahasiswa.php" method="post">
            <fieldset>
                <p>
                    <label for="npm">NPM :</label>
                    <input type="number" name="npm" id="npm" placeholder="Contoh 223307052">
                </p>
                <p>
                    <label for="namaMhs">Nama Mahasiswa :</label>
                    <input type="text" name="namaMhs" id="namaMhs" placeholder="Contoh Natasya Inge Nugroho">
                </p>
                <p>
                    <label for="prodi">Program Studi :</label>
                    <input type="text" name="prodi" id="prodi" placeholder="Contoh Teknologi Informasi">
                </p>
                <p>
                    <label for="alamat">Alamat :</label>
                    <input type="text" name="alamat" id="alamat" placeholder="Contoh Magetan">
                </p>
                <p>
                    <label for="noHP">No HP :</label>
                    <input type="text" name="noHP" id="noHP" placeholder="Contoh 085192444356">
                </p>
            </fieldset>
            <p>
                <input type="submit" name="input" value="Simpan">
                <a href="home.php">Batal</a>
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
