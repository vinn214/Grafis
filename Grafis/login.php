<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>

<style>
  body {
    background-image:url(rplgabungan.jpeg);
    background-attacment:fixed;
    background-size:cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Menggunakan tinggi viewport untuk konten penuh */
    margin: 0; /* Menghapus margin default */
    font-family: 'Poppins', sans-serif; /* Menggunakan font yang diinginkan */
  }

  .login-container {
    max-width: 400px; /* Maksimum lebar konten login */
    width: 100%;
    padding: 20px; /* Padding untuk memberikan ruang di sekitar konten */
    background: rgba(255,255,255,0.5); /* Warna latar belakang konten */
    border-radius: 8px; /* Membuat sudut border rounded */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efek bayangan untuk konten */
  }

  .inner_detail-box {
    text-align: center; /* Pusatkan teks dan elemen dalam kotak */
  }

  .btn-primary {
    /* Gaya tombol masuk */
    padding: 10px 20px;
    font-size: 16px;
  }
</style>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="icon" href="images/favicon.png" type="image/gif" />
  <style>body{background-image:aqua}</style>

  <title>Grafis</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- lightbox Gallery-->
  <link rel="stylesheet" href="css/ekko-lightbox.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="bg-primary">

  <!-- header section strats -->
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.html">
          <center>
          <span>
          </span>
        </a>
        <div class="" id="">
            </div>
          </div>
</center>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->

  <!-- slider section -->
  <div class="login-container">
  <section class="slider_section position-relative">
    <div class="detail-box">
      <div class="col-md-8 col-lg-6 mx-auto">
        <div class="inner_detail-box">
          <center>
            <h1 class="mb-3">
              <img src="../Grafis/img/logosmk-removebg-preview.png" alt="Image" class="img-fluid tm-img" style="width:60px;height: 60px;">
            </h1>
            <h1 class="mb-3">
              Log in
            </h1>
            <form action="proses_login.php" method="POST">
              <table border="0" width="400">
                <tr>
                  <td><label for="username">Username:</label></td>
                  <td><input type="text" name="username" id="username" required></td>
                </tr>
                <tr>
                  <td><label for="password">Password:</label></td>
                  <td><input type="password" name="password" id="password" required></td>
                </tr>
              </table>
              <br>
              <div>
                <input class="btn btn-primary" type="submit" value="Masuk">
              </div>
            </form>
          </center>
        </div>
      </div>
    </div>
  </section>
</div>

  <!-- end slider section -->




  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- lightbox Gallery-->
  <script src="js/ekko-lightbox.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>

</body>

</html>