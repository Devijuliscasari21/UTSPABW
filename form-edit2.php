<!DOCTYPE html>
<html>
  <head>
      <!-- materialize -->
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize.min.css"  media="screen,projection"/>
    <!--my css-->
    <link rel="stylesheet" href="style.css"
    <!--Let browser know website is optimized for mobile-->



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
                    <li><a href="indexlagi.html">Home           </a></li>
                    <li><a href="indexlagi.html">About Me       </a></li>
                    <li><a href="indexlagi.html">PABW   </a></li>
                    <li><a href="indexlagi.html">Contact        </a></li>
                </ul>
             </div>
            </div>
        </nav>
      </div>

      <!-- sidenav-->
      <ul class="sidenav " id="mobile-nav">
        <li><a href="">Home           </a></li>
        <li><a href="">About Me       </a></li>
        <li><a href="">PABW           </a></li>
        <li><a href="">Contact        </a></li>
      </ul>






      <!-- form 1 -->
      <div class="container">








<?php
include "database2.php";

$query = "SELECT * FROM tabel2 WHERE id='$_GET[id]'";
$data  = $db->prepare($query);
$data->execute();

$tabel2 = $data->fetch(PDO::FETCH_LAZY);
?>


<section id="" class="">
<div class="card-panel">
    <div class="container">
        <div class="row">
            <h3 class="center light black-text text-darken center">Edit Data Yang Menerima Bantuan</h3><br><br>
<form method="post" action="update2.php">
    <input type="hidden" name="id" value="<?php echo $tabel2->id?>"/>


    <div class="input-field">
        <input type="text" name="NIK" id="NIK"  value="<?php echo $tabel2->NIK?>" required>
        <label for="NIK">NIK</label>
      </div>

      <div class="input-field">
        <input type="text" name="namakepalakeluarga" id="namakepalakeluarga"  value="<?php echo $tabel2->namakepalakeluarga?>" required>
        <label for="namakepalakeluarga">Nama Kepala Keluarga</labe>
      </div>

      <div class="input-field">
        <input type="text" name="kelurahan" id="kelurahan" value="<?php echo $tabel2->kelurahan?>"  required>
        <label for="kelurahan">Kelurahan</labe>
      </div>

      <div class="input-field">
        <input type="text" name="kecamatan" id="kecamatan"  value="<?php echo $tabel2->kecamatan?>" required>
        <label for="kecamatan">Kecamatan</labe>
      </div>

      <div class="input-field">
        <input type="text" name="rw" id="rw"   value="<?php echo $tabel2->rw?>" required>
        <label for="rw">RW</labe>
      </div>

      <div class="input-field">
        <input type="text" name="rt" id="rt"  value="<?php echo $tabel2->rt?>"  required>
        <label for="rt">RT</labe>
      </div>

      <button type="submit" class="btn light-blue accent-1">Submit</button>
</form>








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
            indicators   : false,
            height      : 500,
            transition  : 600,
            interval    : 3000
        });

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll);
 


  </body>
</html>
<section id="pabw" class="services light-blue lighten-4  scrollspy">
<br><br><br><br><br><br>
  </section>
<!-- footer -->

<footer class="light-white lighten-4 grey-text center">
    <p class="flow-text">Devi Julisca Sari. Copyright 2020.</p>
</footer>
      