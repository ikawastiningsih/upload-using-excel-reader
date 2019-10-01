<?php

  session_start();

 if (isset($_SESSION['id_user']))
  {
     include '../config/koneksi.php';
  }
  else{
    header('location:index.php');
  }
  
  if (isset($_GET['konten'])) $konten = $_GET['konten'];
  else $konten = "homeadmin";


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Planning</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../bootstrap/css/sb-admin.css" rel="stylesheet">
  <script src=../"jquery/jquery-2.2.2.min.js"></script>
  
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="home.php">Planning</a> 
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <div style="float: center;"></div>
       
   <?php
  include '../config/koneksi.php';

    echo '<center><img src="../gambar/user.png" height= "80px" width = "80px"> </center>';
    echo "<font color='white'><center>Admin</center></font>";
    ?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Beranda">
          <a class="nav-link" href="homeadmin.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Persiapan">
          <a class="nav-link" href="homeadmin.php?konten=persiapan">
            <i class="fa fa-archive"></i>
            <span class="nav-link-text">Persiapan</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Beranda">
          <a class="nav-link" href="homeadmin.php?konten=pengadaan">
            <i class="fa fa-check-circle"></i>
            <span class="nav-link-text">Pengadaan</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Beranda">
          <a class="nav-link" href="homeadmin.php?konten=pelaksanaan">
            <i class="fa fa-calendar"></i>
            <span class="nav-link-text">Pelaksanaan</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Beranda">
          <a class="nav-link" href="homeadmin.php?konten=selesai">
            <i class="  fa fa-calendar-check-o"></i>
            <span class="nav-link-text">Selesai</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="../config/logout.php" id="logout">
            <i class="fa fa-fw fa-sign-out"></i>
            <span class="nav-link-text">Log Out</span>
          </a>
        </li>
    </div>
  </nav>

  <!-- Isi Konten -->
  <div class="content-wrapper">
    <div class="container-fluid">
      <?php

          if ($konten=='homeadmin')
            include 'berandaadmin.php';
          elseif ($konten=='upload')
            include 'upload.php';
          elseif ($konten=='persiapan')
            include 'persiapan.php';
          elseif ($konten=='pengadaan')
            include 'pengadaan.php';
           elseif ($konten=='pelaksanaan')
            include 'pelaksanaan.php';
           elseif ($konten=='selesai')
            include 'selesai.php';
           elseif ($konten=='tambahakun')
            include 'tambahakun.php';
          elseif ($konten=='edituser')
            include 'edituser.php';
          

      ?>

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small> ICT Planning & Gooverments
          </small>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript-->
  
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
<script type="text/javascript">
  $(function(){
      $('a#logout').click(function(){
          if(confirm('Are you sure to logout?')) {
              return true;
          }
          return false;
      });
  });  
</script>

