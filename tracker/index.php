<?php
include "assets/koneksi.php";
include "assets/display.php";
include "assets/getindex.php";
include "assets/getnavbar.php";

session_start();

if(!isset($_SESSION['user'])){
  echo '<script>window.location=("assets/login.php");</script>';
}else{
  $id = $_SESSION['user'];

  $query = "SELECT * FROM account WHERE user ='$id'";
  $sql = $koneksi->query($query);
  $ambil_data = $sql->fetch_assoc();
  extract($ambil_data);
  foreach ($sql as $row);
}
 ?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tracker ID</title>
  <link rel="icon" href="img/map.png">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- icon font -->
  <script src="https://kit.fontawesome.com/3da2044cab.js"></script>

  <!-- maps leaflet -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
 
   <!-- Make sure you put this AFTER Leaflet's CSS -->
  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
   integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
   crossorigin=""></script>
<script>
  setInterval(function(){
        var a = window.location.href;
        $('dateupdate1');
        $('dateupdate2');
        $('dateupdate3');
        $('#devnav'); //sidebar
        $('#countdev1').fadeOut(500);
        $('#countdev2').fadeOut(500);
        $('#countdev3').fadeOut(500);
        $('#countbatt').fadeOut(500);
        $('#countalarm').fadeOut(500);
        $('#devnav').load('index.php #devnav'); 
        $('#countdev1').load('index.php #countdev1').fadeIn(500);
        $('#countdev2').load('index.php #countdev2').fadeIn(500);
        $('#countdev3').load('index.php #countdev3').fadeIn(500);
        $('#countbatt').load('index.php #countbatt').fadeIn(500);
        $('#countalarm').load('index.php #countalarm').fadeIn(500);
        $('#dateupdate1').load('index.php #dateupdate1');
        $('#dateupdate2').load('index.php #dateupdate3');
        $('#dateupdate3').load('index.php #dateupdate3');           
        // delay(2000)  ;
      }, 3000);
  </script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
<?php sidebar() ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
       <?php navbarindex() ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Welcome, <?php echo $_SESSION['user']?>!</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
          

            <!-- Earnings (Monthly) Card Example -->
<?cardindex()?>
          </div>

          



          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
<?php mapsindex()?>
            </div>

            
          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">
            </div>

            <div class="col-lg-6 mb-4">
            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
<?footer()?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Log Out From This Page</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are You Sure?</div>
        <div class="modal-footer">
          <button class="btn btn-danger" type="button" data-dismiss="modal">No</button>
          <a class="btn btn-success" href="assets/logout.php">Yes</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
