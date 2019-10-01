<ol class="breadcrumb">
	<li class="breadcrumb-item">
 	 <a href="#">Beranda</a>
	</li>
</ol>
<div class="card mb-3">
	<div class="card-header">
  		<i class="fa fa-table"> Manajemen User </i> 
	</div>
</div>

<div class="table-responsive">
  <div class="col-sm-1" align="Right">
         <a href="homeadmin.php?konten=tambahakun"> <button class="btn btn-success">Tambah Akun</button></a>
        </div>
<br>
<table class="table table-bordered" id="" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>Username</th>
      <th>Password</th>
      <th colspan="2"><center>Aksi</center></th>
    </tr>
  </thead>
  <tfoot>
    <?php

      include '../config/koneksi.php';

      $query = mysqli_query($konek, "SELECT id_user, nama, username, password FROM user")or die(mysqli_error());
              if(mysqli_num_rows($query) == 0){ 
                echo '<tr><td colspan="6" align="center">Tidak ada data!</td></tr>';    
              }
                else
              { 
                $no = 1;        
                while($data = mysqli_fetch_array($query)){  
                  echo '<tr>';
                  echo '<td>'.$no.'</td>';
                  echo '<td>'.$data['nama'].'</td>';
                  echo '<td>'.$data['username'].'</td>';
                  echo '<td>'.$data['password'].'</td>';
                   echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=homeadmin.php?konten=edituser&&id_user='.$data['id_user'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                  echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Hapus" href=../config/deleteuserproses.php?id_user='.$data['id_user'].'><i class="fa fa-trash fa-fw"></i></a></td>';
                  $no++;  
                }
              }
        
          ?>

        </tbody>
      </table>
    </div>
  </div>