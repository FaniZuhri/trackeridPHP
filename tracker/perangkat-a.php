<?php
include "assets/koneksi.php";
include "assets/display.php";
include "assets/getdev.php";
session_start();

if(!isset($_SESSION['user'])){
  echo '<script>window.alert("You Have To Log In First!");window.location=("assets/login.php");</script>';
}else{
  $id = $_SESSION['user'];
  // include "assets/post.php";
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
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                  
  
  
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  
  <!-- bootstrap.js -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <!-- icon font -->
  <script src="https://kit.fontawesome.com/3da2044cab.js"></script>

  <!-- maps leaflet -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"  integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="   crossorigin=""/>
  <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.css"  data-require="leaflet@0.7.3" data-semver="0.7.3" /> -->


   <!-- Make sure you put this AFTER Leaflet's CSS -->
  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="   crossorigin=""></script>

  <!-- Table Device Details -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>	
  <!-- <script type="text/javascript" src="js/bootstrap.js"></script> -->

   <!-- style toggle -->
  <link rel="stylesheet" type="text/css" href="toggle.css">
  <script>
  function startTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('txt').innerHTML =
      h + ":" + m + ":" + s;
      var t = setTimeout(startTime, 500);
      } 
      function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
      }
  setInterval(function(){
        var a = window.location.href;
        $('dateupdate');
        $('#devnav') //device navbar
        $('#loc').fadeOut(500); //loc card
        $('#batt').fadeOut(500); //batt card
        $('#alarm').fadeOut(500); //alarm card
        $('#lat1'); //data lattitude
        $('#batt1'); //data baterai
        $('#update'); //data go to location
        $('#load_devdat'); //tabel device data
        // $('#dAt').load('perangkat-a.php #dAt');
        $('#devnav').load('perangkat-a.php #devnav'); 
        $('#loc').load('perangkat-a.php #loc').fadeIn(500);
        $('#batt').load('perangkat-a.php #batt').fadeIn(500);
        $('#alarm').load('perangkat-a.php #alarm').fadeIn(500);
        $('dateupdate').load('perangkat-a.php #dateupdate');
        $('#lat1').load('perangkat-a.php #lat1');
        $('#batt1').load('perangkat-a.php #batt1');
        $('#update').load('perangkat-a.php #update'); 
        $('#load_devdat').load('perangkat-a.php #load_devdat');       
        //  delay(2000)  ;
      }, 3000);
  </script>

<script>
  
//   $(document).ready(function () {
//     var ckbox = $('#checkbx');

//     $('input').on('click',function () {
//         if (ckbox.is(':checked')) {
//           //alert("ON");
//           //$.get("assets/post.php?s=1");
// 	  $("#buka").html(`ON`);
//           $.get( "assets/post.php?s=1", function( data ) {
//            // alert( data );
//           });
//         } else {
// 		$("#buka").html(`OFF`);
//           $.get( "assets/post.php?s=0", function( data ) {
//             //alert( data );
//           });

//         }
//     });
// });
 </script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php sidebar()
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
<?php navbardevice() ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row">
            <!-- Card View -->
            <?php carddev() ?>
          </div>


          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
    <?php detailsdevice() ?>


            
            <!-- Maps -->
<?php mapsdevice()?>
            
                  
                       <!-- Area Chart -->
<?php tabledevice() ?>
            </div>

            



          <!-- Content Row -->
          <!-- <div class="row"> -->

            <!-- Content Column -->
            <!-- <div class="col-lg-6 mb-4">
            </div>

            <div class="col-lg-6 mb-4">
            </div>

          </div> -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
<?php footer()?>
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
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>