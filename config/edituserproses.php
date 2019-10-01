<?php

include 'koneksi.php';

	$id_user        				= $_POST['id_user'];
	$nama							= $_POST["nama"];
	$username						= $_POST["username"];
	$password						= md5($_POST['password']);
	

	$edit 	= "UPDATE user SET nama='$nama', username='$username', password='$password' WHERE id_user='$id_user'";
	$editsiswa	= mysqli_query($konek, $edit)or die(mysqli_error());

	if ($editsiswa)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/homeadmin.php?konten=homeadmin">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Maaf, Data tidak berhasil diubah!\");
    				history.back(-1);
    			</script>";
    	}
?>