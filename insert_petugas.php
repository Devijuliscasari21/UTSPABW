<?php
//error_reporting(0);
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
}else {
  echo "DODOL";
}
?>