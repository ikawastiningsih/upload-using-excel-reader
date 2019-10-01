<?php

	include "koneksi.php";

	$username  = $_POST["username"];
	$password  = md5($_POST["password"]);

	$query     ="SELECT * FROM user WHERE username='$username' AND password='$password'";

	$login     = mysqli_query($konek,$query) or die(mysqli_error($konek));
	$jlhrecord = mysqli_num_rows($login);

	$data      = mysqli_fetch_array($login,MYSQLI_BOTH);

	$id_user   	 	   	= $data['id_user'];
	$nama 	     	  	= $data['nama'];
	$username  		   	= $data['username'];
	$password  		   	= $data['password'];
	$level 				= $data['level'];
	


if($jlhrecord > 0){

	session_start();
	
	$_SESSION['id_user']		=$id_user;
	$_SESSION['nama']			=$nama;
	$_SESSION['username']		=$username;
	$_SESSION['password']		=$password;
	$_SESSION['level']			=$level;
	$_SESSION['id_user']		= session_id();

	//redirect level
		if($level == admin){
			header('Location:../admin/homeadmin.php');
		}
		elseif ($level == own){
			header('Location:../home.php');
		}
}

else{

	echo "<br><br><br><strong><center><i>Maaf anda gagal login. Mungkin Username atau Password yang anda masukkan salah.<br>Silahkan masukkan Username atau Password dengan benar!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "2; URL=../index.php">';  
}

?> 