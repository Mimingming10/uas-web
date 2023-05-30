<?php 
session_start(); 
include "koneksi.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['repeatpassword'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['repeatpassword']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: signup.php?error=Mohon isi username&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Mohon isi kata sandi&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Mohon ulangi kata sandi&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: signup.php?error=Mohon isi nama&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=Kata sandi tidak cocok&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM t_user WHERE username='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=Username telah terdaftar&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO t_user(username, password, name) VALUES('$uname', '$pass', '$name')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Akun berhasil dibuat");
	         exit();
           }else {
	           	header("Location: signup.php?error=Terjadi kesalahan&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}