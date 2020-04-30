<?php
error_reporting(0);
include "database.php";
session_start();

if(isset($_POST['login'])){
$username = $_POST['username'];
$sandi = $_POST['password'];

$cek_login = $db->prepare("SELECT * FROM petugas WHERE username = ? AND sandi = ?");
$cek_login->execute(array($username, $sandi));
$row = $cek_login->fetch(PDO::FETCH_OBJ);

if (empty($row->username)) {
  echo "<script>alert('Login Failed');</script>";
} else {
  echo "<script>alert('Login Sukses');</script>";
  $_SESSION['petugas'] = $_POST['username'];
  header('location:list_pasien.php');
}
}
?>


<!DOCTYPE html>
<html>

<head>
  <!-- materialize -->
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="materialize.min.css" media="screen,projection" />
  <!--my css-->
  <link rel="stylesheet" href="style.css" <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>UTS</title>
</head>

<body id="home">
  <!-- Navbar -->
  <div class="navbar-fixed ">
    <nav class="light-blue accent-1">
      <div class="container ">
        <div class="nav-wrapper">
          <a href="indexlagi.html" class="brand-logo ">Welcome</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons ">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="indexlagi.html">Home </a></li>
            <li><a href="indexlagi.html">About Me </a></li>
            <li><a href="indexlagi.html">PABW </a></li>
            <li><a href="indexlagi.html">Contact </a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- sidenav-->
  <ul class="sidenav " id="mobile-nav">
    <li><a href="">Home </a></li>
    <li><a href="">About Me </a></li>
    <li><a href="">PABW </a></li>
    <li><a href="">Contact </a></li>
  </ul>


  <!-- form 1 -->
  <div class="container">

    <section id="" class="">
      <div class="card-panel">
        <div class="container">
          <div class="row">
            <h3 class="center light black-text text-darken center">Login</h3>
            <form action="" method="post" class="was-validated">
              <div class="input-field">
                <input type="text" name="username" id="username" placeholder="Enter username" required>
                <label for="username">Username</label>
              </div>

              <div class="input-field">
                <input type="password" name="password" id="email" placeholder="Enter Password" class="validate">
                <label for="email">Password</label>
              </div>
              <input type="submit" name="login" class="btn light-blue accent-1" value="Submit">
              <a href="form_register_petugas.php" class="btn light-green accent-1">Register Petugas</a>
          </div>
          </form>
        </div>


      </div>
  </div>


  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="materialize.min.js"></script>
  </script>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>


  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="materialize.min.js"></script>
  <script>
    const sidenav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sidenav);


    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 600,
      interval: 3000
    });

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll);
  </script>

</body>

</html>