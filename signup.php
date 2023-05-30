<!DOCTYPE html>
<html>
<head>
	<title>Daftar Akun</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <style>body {
            font-family: Arial, sans-serif;
            background-image: url("gambar/daftar.jpeg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            color: #000000;
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
     <form action="signup-check.php" method="post">
     	<h2>Daftar Akun</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Nama</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Nama"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Masukkan nama"><br>
          <?php }?>

          <label>Username</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Masukkan username"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Masukkan username"><br>
          <?php }?>


     	<label>Kata Sandi</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Masukkan kata Sandi"><br>

          <label>Ulangi Kata Sandi</label>
          <input type="password" 
                 name="repeatpassword" 
                 placeholder="Ulangi Kata Sandi"><br>

     	<button type="submit">Daftar</button>
          <a href="index.php" class="ca">Sudah punya akun?</a>
     </form>
     <div id="copyright">
            <div class="wrapper">
            &copy; 2023. <b>Natasya Inge Nugroho.</b> All Rights Reserved.
            </div>
    </div>
</body>
</html>