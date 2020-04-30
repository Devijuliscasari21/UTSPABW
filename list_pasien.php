<?php
include "database.php";
include "session.php";

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
          <a href="#" class="brand-logo ">Welcome</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons ">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#">Home </a></li>
            <li><a href="#">About Me </a></li>
            <li><a href="#">PABW </a></li>
            <li><a href="#">Contact </a></li>
            <li><a href="list_pasien.php">Data Pasien </a></li>
            <li><a href="list_petugas.php">Data Petugas </a></li>
            <li><a href="logout.php">Logout </a></li>
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

    <?php
    include "database.php";
    ?>

    <section id="" class="">
      <div class="card-panel">
        <div class="container">

          <table>

            <thead>
              <th>NO.</th>
              <th>KODE PASIEN</th>
              <th>NAMA PASIEN</th>
              <th>ALAMAT</th>
              <th>USIA</th>
              <th>KETERANGAN</th>
              <th width="100">AKSI</th>
            </thead>

            <tbody>

              <?php
              $query = "SELECT * FROM pasien";
              $data  = $db->prepare($query);
              $data->execute();

              $no = 1;
              while ($row = $data->fetch(PDO::FETCH_OBJ)) {


              ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $row->kode_pasien; ?></td>
                  <td><?php echo $row->nama_pasien; ?></td>
                  <td><?php echo $row->alamat; ?></td>
                  <td><?php echo $row->usia; ?></td>
                  <td><?php echo $row->keterangan; ?></td>
                  <td><a class="btn blue-light accent-2" href="form_pasien.php?kode_pasien=<?php echo $row->kode_pasien; ?>">Edit Pasien</a></td>
                  <td><a class="btn red accent-2" href="aksi_hapus_pasien.php?kode_pasien=<?php echo $row->kode_pasien; ?>">Hapus Pasien</a></td>
                </tr>
              <?php
              } ?>
            </tbody>

          </table>
          <a href="form_pasien.php" class="btn-floating btn-medium right waves-light red"><i class="material-icons">add</i></a>
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
    </section>
  </div>

</body>

</html>
