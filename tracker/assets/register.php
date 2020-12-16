<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register - Tracker ID</title>
  <link rel="icon" href="../img/map.png">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body class="bg-gradient-danger">

  <div class="container col-xl-5">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="cek_regis.php" method="POST">
                <div class="form-group">
                  <input type="name" class="form-control form-control-user" name="nama" placeholder="Name" required="">
                </div>
                <div class="form-group">
                  <input type="username" class="form-control form-control-user" name="user" placeholder="Username" required="">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" placeholder="Email Address" required="">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" name="pass" placeholder="Password" required="">
                </div>
                <div>
                <button type=submit class="btn btn-user btn-block" style="background-color:#cf4c45;color:#FFFFFF;"> Register Account</button>
                </div>
              </form>
            
              <hr>
              <div class="text-center">
                <a class="small" href="login.php" style="text-decoration:none;color:#cf4c45">Already have an account? Login!</a>
              </div>
            </div>
          </div>
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

</body>

</html>
