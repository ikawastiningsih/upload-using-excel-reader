<?php

	include 'koneksi.php';

	$nama					= $_POST["nama"];
	$username				= $_POST["username"];
	$password 				= md5($_POST['password']);
	$level					= $_POST["level"];



	$tambah	= "INSERT INTO user VALUES ('', '$nama','$username', '$password', '$level')";

	$masuk = mysqli_query($konek,$tambah)or die(mysqli_error($konek));

if ($masuk){
	echo "<br><br><br><strong><center><i>Data Berhasil Di Simpan!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/homeadmin.php">';  
}
else
 {
 
 	echo 'GAGAL';
 }

?>