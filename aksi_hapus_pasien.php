<?php
include "database.php";
$kode_pasien=$_GET['kode_pasien'];

$query = "DELETE FROM pasien WHERE kode_pasien=?";
$data  = $db->prepare($query);
$data->execute(array($kode_pasien));

header("location: list_pasien.php");