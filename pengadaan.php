<ol class="breadcrumb">
	<li class="breadcrumb-item">
 	 <a href="#">Persiapan</a>
	</li>
</ol>
<div class="card mb-3">
	<div class="card-header">
  		<i class="fa fa-table"> Pengadaan Program Kerja </i> 
	</div>
</div>
<div class="table-responsive">
<br>
<table class="table table-bordered" id="" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>No.</th>
      <th>Kategori</th>
      <th>Program Kerja</th>
      <th>Keterangan</th>
      <th colspan="1"><center>Aksi</center></th>
    </tr>
  </thead>
  <tfoot>
    <?php

      include 'config/koneksi.php';

      $query = mysqli_query($konek, "SELECT kategori, program_kerja, keterangan, id_proker, rfi FROM proker WHERE pengadaan = 'v' ")or die(mysqli_error());
              if(mysqli_num_rows($query) == 0){ 
                echo '<tr><td colspan="6" align="center">Tidak ada data!</td></tr>';    
              }
                else
              { 
                $no = 1;        
                while($data = mysqli_fetch_array($query)){  
                  echo '<tr>';
                  echo '<td>'.$no.'</td>';
                  echo '<td>'.$data['kategori'].'</td>';
                  echo '<td>'.$data['program_kerja'].'</td>';
                  echo '<td>'.$data['keterangan'].'</td>';
                  echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Hapus" href=config/deletepegawaiproses.php?id_proker='.$data['id_proker'].'><i class="fa fa-trash fa-fw"></i></a></td>';
                  $no++;  
                }
              }
        
          ?>

        </tbody>
      </table>
      <a href="cetakpegawai.php" target="_BLANK" role="button" class="btn btn-primary pull-right" style="margin-right:16px;margin-bottom:10px;width:150px"><span class="fa fa-print"></span> Cetak Report</a>
    </div>
  </div>