
<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        .bgnjing{
            background: url(img/bg.png);
            height: 105vh;
        }
    </style>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Coba</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type = "text/css" href="css/background.css">

</head>

<body>
    <div class="bgnjing">
        <div class="container">

        <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-6 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                                        </div>
                                        <form class="user" method="post" action="daftar_m.php">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="nik" placeholder="Masukkan NIK">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="nama" placeholder="Masukkan Nama">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="username" placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <input type="texs" class="form-control form-control-user" name="telp" placeholder="Nomor Telepon">
                                            </div>
                                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Daftar" href="login.php"></input>
                                            <hr>
                                        </form>
                                        <div class="text-center">
                                            <div class="small">Sudah Punya Akun?
                                                <a href="login.php">Login!</a>
                                            </div>
                                        </div>
                                        <br>
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

    


</body>

</html>
