<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login - Tracker ID</title>
  <link rel="icon" href="../img/map.png">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-danger">



  <div class="container">
  <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=='gagal'){
			echo "<br><div class='alert' align='center' style='color:#FFFFFF'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body">
            <!-- Nested Row within Card Body -->
            <div class="row"> 
                <div class="col-lg">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form class="user" action="cek_login.php" method="post">
                    <div class="form-group">
                      <input type="username" name="usern" class="form-control form-control-user"  placeholder="Username" required=""/>
                    </div>
                    <div class="form-group">
                      <input type="password" name="passw" class="form-control form-control-user"  placeholder="Password" required=""/>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <div>
                      <button type=submit class="btn btn-user btn-block" style="background-color:#cf4c45;color:#FFFFFF;"> Login</button>
                    </div>

                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="register.php" style="text-decoration:none;color:#cf4c45;">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
