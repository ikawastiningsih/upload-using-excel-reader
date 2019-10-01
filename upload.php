<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Upload</a>
  </li>
</ol>
<?php 
include 'config/koneksi.php';
?>

<form method="post" enctype="multipart/form-data" action="upload_aksi.php">
	Pilih File yang akan di Import: 
	<br>
	<br>
	<input name="fileupload" type="file" required="required"> <br><br>
	<input name="upload" type="submit" value="Import" button class="btn btn-success"><br><br>
</form>
<br>
<br>
