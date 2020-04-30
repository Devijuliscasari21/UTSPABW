<?php
error_reporting(0);
include "database.php";
include "session.php";

$kode = $_GET['kode_pasien'];
$query = "SELECT * FROM pasien WHERE kode_pasien=?";
$data  = $db->prepare($query);
$data->execute(array($kode));

$tabel = $data->fetch(PDO::FETCH_OBJ);
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
            <h3 class="center light black-text text-darken center">Form Data Pasien</h3><br><br>
            <form action="aksi_pasien.php" method="post" class="">


              <div class="input-field">
                <?php if (isset($kode)) {
                ?>
                  <input type="text" name="kode_pasien" value="<?php echo $kode != '' ? $kode  : ''; ?>" id="kode_pasien" required readonly>
                  <label for="kode_pasien">KODE PASIEN</label>
                <?php } else {
                ?>
                  <input type="text" name="kode_pasien" value="<?php echo $kode != '' ? $kode  : ''; ?>" id="kode_pasien" required>
                  <label for="kode_pasien">KODE PASIEN</label>
                <?php
                } ?>



              </div>

              <div class="input-field">
                <input type="text" name="nama_pasien" value="<?php echo $tabel->nama_pasien != '' ? $tabel->nama_pasien : '';?>" id="nama" required>
                <label for="nama">NAMA PASIEN</label>
              </div>

              <div class="input-field">
                <input type="text" name="alamat" id="alamat" value="<?php echo $tabel->alamat != '' ? $tabel->alamat : '';?>" required>
                <label for="alamat">ALAMAT PASIEN</label>
              </div>


              <div class="input-field">
                <input type="text" value="<?php echo $tabel->usia != '' ? $tabel->usia : '';?>" name="usia" id="usia" required>
                <label for="usia">USIA PASIEN</label>
              </div>

              <div class="input-field">
                <input type="text" name="keterangan" value="<?php echo $tabel->keterangan != '' ? $tabel->keterangan : '';?>" id="keterangan" required>
                <label for="keterangan">KETERANGAN KONDISI PASIEN</label>
              </div>
              <input type="submit" class="btn light-blue accent-1" value="Submit">
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
        <!-- footer 

<footer class="light-white lighten-4 grey-text center">
    <p class="flow-text">Devi Julisca Sari. Copyright 2020.</p>
</footer> -->
      </div>
    </section>
  </div>

</body>

</html>