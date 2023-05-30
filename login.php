<?php
session_start();
include "koneksi.php";

if(isset($_POST['uname']) && isset($_POST['password'])) {
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index.php?error=Mohon isi username");
        exit();

    }else if(empty($pass)){
        header("Location: index.php?error=Mohon isi kata sandi");
        exit();

    }else{
        $pass = md5($pass);
        $sql = "SELECT * FROM t_user WHERE username='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass){
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: home.php");
                exit();
            }else{
                header("Location: index.php?error=Username dan kata sandi tidak cocok");
                exit();
            }
        }else{
            header("Location: index.php?error=Username dan kata sandi tidak cocok");
            exit();
        }
    }
}else{
    header("Location: index.php");
    exit();
}