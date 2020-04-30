<?php
include "database.php";

$kode = $_POST['kode_pasien'];
$query = "SELECT * FROM pasien WHERE kode_pasien=?";
$data  = $db->prepare($query);
$data->execute(array($kode));

$tabel = $data->fetch(PDO::FETCH_OBJ);

//$kode_pasien = $_POST['kode_pasien'];
$nama_pasien = $_POST['nama_pasien'];
$alamat_pasien = $_POST['alamat'];
$usia_pasien = $_POST['usia'];
$keterangan_pasien = $_POST['keterangan'];

if ($kode==$tabel->kode_pasien) {
    try{
    $query = "UPDATE pasien SET nama_pasien = ?, alamat=?, usia=?, keterangan=? WHERE kode_pasien = ?";
    $data = $db->prepare($query);   //menyimpan query sql
    $data->execute(array($nama_pasien, $alamat_pasien, $usia_pasien, $keterangan_pasien, $kode));               //menjalankan perintah query sql
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    header("location: list_pasien.php");
} else {
    try{
    $query = "INSERT INTO pasien VALUES (?,?,?,?,?)";
    $data = $db->prepare($query);   //menyimpan query sql
    $data->execute(array($kode, $nama_pasien, $alamat_pasien, $usia_pasien, $keterangan_pasien));               //menjalankan perintah query sql
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    header("location: list_pasien.php");
}
