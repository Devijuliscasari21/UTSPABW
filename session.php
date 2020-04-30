<?php
include "database.php";
session_start();
$cek_login=$_SESSION['petugas'];
$petugas=$db->prepare('SELECT * FROM petugas WHERE username = ?');
$petugas->execute(array($cek_login));
$row=$petugas->fetch(PDO::FETCH_OBJ);
$start_session=$row->username;
if(!isset($start_session)){
  echo "<script>alert('Anda Harus Login');</script>";
  header('location: form_login_petugas.php');
} else {
 // echo "<script>alert('Login Sukses');</script>";
}

?>