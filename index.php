<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background-image: url("gambar/background.jpeg");
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
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error'];?></p>
        <?php }?>
        <label>Username</label>
        <input type="text" name="uname" placeholder="Masukkan username"><br>

        <label>Kata Sandi</label>
        <input type="password" name="password" placeholder="Masukkan kata sandi"><br>

        <button type="submit">Masuk</button>
        <label1>Belum punya akun?</label1>
        <a href="signup.php" class="ca">Klik disini untuk daftar</a>   
    </form>
    <div id="copyright">
    <div class="wrapper">
      &copy; 2023. <b>Natasya Inge Nugroho.</b> All Rights Reserved.
    </div>
  </div>
</body>
</html>
