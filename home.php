<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background-image: url("gambar/home.jpeg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
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
    <form action="inputmahasiswa.php" method="post">
        <h1>Halo, <?php echo $_SESSION['name'] ?></h1>
        <button type="submit">Buat Data</button>
        <a href="viewMahasiswa.php" class="ca">Lihat Data</a> 
    </form>
    <div id="copyright">
        <div class="wrapper">
        &copy; 2023. <b>Natasya Inge Nugroho.</b> All Rights Reserved.
        </div>
    </div>
</body>
</html>
<?php
}else{
    header("Location: index.php");
    exit();
}
?>
