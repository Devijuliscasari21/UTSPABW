<?php
include "database.php";

$kode = $_POST['kode_petugas'];
$query = "SELECT * FROM petugas WHERE kode_petugas=?";
$data  = $db->prepare($query);
$data->execute(array($kode));
    
$tabel = $data->fetch(PDO::FETCH_OBJ);

//$kode_petugas = $_POST['kode_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$sandi = $_POST['sandi'];


if ($kode==$tabel->kode_petugas) {
    try{
    $query = "UPDATE petugas SET nama_petugas = ?, username=?, sandi=? WHERE kode_petugas = ?";
    $data = $db->prepare($query);   //menyimpan query sql
    $data->execute(array($nama_petugas, $username, $sandi, $kode));               //menjalankan perintah query sql
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    header("location: list_petugas.php");

}
