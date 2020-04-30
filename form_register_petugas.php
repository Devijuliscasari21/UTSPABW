<?php
error_reporting(0);
include "database.php";
if (isset($_POST['register'])) {
  
  $nama_petugas = $_POST['nama_petugas'];
  $username = $_POST['username'];
  $sandi = $_POST['sandi'];

try {
  $query = "INSERT INTO petugas VALUES (null,?,?,?)";
  $data = $db->prepare($query);   //menyimpan query sql
  $data->execute(array($nama_petugas, $username, $sandi));               //menjalankan perintah query sql
} catch (PDOException $e) {
  echo $e->getMessage();
}
header('location:form_login_petugas.php');
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
  <link rel="stylesheet" href="style.css"> <!--Let browser know website is optimized for mobile-->



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
            <h3 class="center light black-text text-darken center">Form Data Petugas</h3><br><br>
            <form action="" method="post" class="was-validate">
              

              <div class="input-field">
                <input type="text" name="nama_petugas" id="nama_petugas" required>
                <label for="nama_petugas">NAMA PETUGAS</label>
              </div>

              <div class="input-field">
                <input type="text" name="username" id="username" required>
                <label for="username">USERNAME</label>
              </div>

              <div class="input-field">
                <input type="password" name="sandi" id="password" required>
                <label for="password">PASSWORD</label>
              </div>
              <input type="submit" name="register" class="btn blue-light color-accent 1" value="Submit">
          </div>
          </form>
        </div>


        <hr />




        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="materialize.min.js"></script>


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
        <!-- footer -->

        <footer class="light-white lighten-4 grey-text center">
          <p class="flow-text">Devi Julisca Sari. Copyright 2020.</p>
        </footer>
      </div>
    </section>
  </div>

</body>

</html>