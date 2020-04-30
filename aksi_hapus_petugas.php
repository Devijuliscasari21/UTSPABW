<?php
include "database.php";
$kode_petugas=$_GET['kode_petugas'];

$query = "DELETE FROM petugas WHERE kode_petugas=?";
$data  = $db->prepare($query);
$data->execute(array($kode_petugas));

header("location: list_petugas.php");