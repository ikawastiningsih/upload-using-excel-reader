 <script src=../"jquery/jquery-2.2.2.min.js"></script>
<?php

error_reporting(0);

include '../config/koneksi.php';

$id_user = $_GET['id_user'];

$tampilkan  	= "SELECT id_user, nama, username, password FROM user WHERE id_user = '$id_user'";
$hasil   		= mysqli_query($konek, $tampilkan)or die(mysql_error());
$data    		= mysqli_fetch_array($hasil);


?>
<br>
<form class="form-horizontal" action="../config/edituserproses.php" method="POST">
	<ol class="breadcrumb">
      <li class="active"><b>EDIT DATA USER</b></li>
       </ol>
    <input type="hidden" name="id_user" value="<?php echo $id_user ?>">
    <div class="form-group">
		<label class="col-sm-3">Nama</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="nama" type="text" value="<?php echo $data['nama']; ?>" required></label>
	</div>
    <div class="form-group">
		<label class="col-sm-3">Username</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="username" type="text" value="<?php echo $data['username']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Password lama</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="password" type="password" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Password baru</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="password2" type="password" required></label>
	</div>
	<div class="form-group">
        <label class="col-sm-3"></label>
        <label class="col-sm-1"></label>
        <div class="col-sm-8" align="Right">
          <button class="btn btn-primary" id="submit">Edit</button>
         </div>
    </div>