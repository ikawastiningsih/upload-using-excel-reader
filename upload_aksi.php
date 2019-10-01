<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->

<?php 
// menghubungkan dengan koneksi
include 'config/koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
error_reporting();
?>


<?php
// upload file xls
$target = basename($_FILES['fileupload']['name']) ;
move_uploaded_file($_FILES['fileupload']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['fileupload']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['fileupload']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=4; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$no     			= $data->val($i, 1);
	$kategori     		= $data->val($i, 2);
	$program_kerja  	= $data->val($i, 3);
	$proker 		 	= $data->val($i, 4);
	$anggaran		 	= $data->val($i, 5);
	$nilai_kontrak		= $data->val($i, 6);
	$keterangan		 	= $data->val($i, 22);
	$rfi			 	= $data->val($i, 23);
	$tor 			 	= $data->val($i, 24);
	$pelaksanaan		= $data->val($i, 25);
	$pr		 			= $data->val($i, 26);
	$release_pr		 	= $data->val($i, 27);
	$pengadaan		 	= $data->val($i, 28);
	$po 			 	= $data->val($i, 29);
	$implementasi	 	= $data->val($i, 30);
	$selesai		 	= $data->val($i, 31);


	if($no != "" &&$kategori != "" && $program_kerja != ""){
		// input data ke database (table data_pegawai)
		mysqli_query($konek,"INSERT into proker values('','$no','$kategori','$program_kerja','$proker','$anggaran','$nilai_kontrak','$keterangan','$rfi','$tor','$pelaksanaan','$pr','$release_pr','$pengadaan','$po','$implementasi','$selesai')");
		$berhasil++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['fileupload']['name']);

// alihkan halaman ke index.php
header("location:home.php?berhasil=$berhasil");
?>