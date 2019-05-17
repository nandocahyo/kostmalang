<?php
session_start();
//skrip koneksi
$koneksi = new mysqli("localhost","root","","db_kost");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login Admin Malang Kost</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Form Login</div>
      <div class="card-body">

        <form method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="user">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" name="pass">
          </div>
          
          <button class="btn btn-primary btn-block" name="login">Login</button>
        </form>
        <?php
        if (isset($_POST['login']))
        {
          $ambil = $koneksi->query("SELECT * FROM admin WHERE username='$_POST[user]' AND password = '$_POST[pass]'");
          $yangcocok = $ambil->num_rows;
          if ($yangcocok==1) 
          {
            $_SESSION['admin']=$ambil->fetch_assoc();
            echo "<div class='alert alert-info'>Login Berhasil</div>";
            echo "<meta http-equiv='refresh' content='1;url=index.php'>";
          }
          else
          {
            echo "<div class='alert alert-danger'>Login Gagal</div>";
            echo "<meta http-equiv='refresh' content='1;url=login.php'>";
          }
        }
        ?>



        <div class="text-center">
          
          <a class="d-block small" href="forgot-password.html">Lupa Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
