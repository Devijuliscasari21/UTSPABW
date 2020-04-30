<?php
include "database.php";

$query = "INSERT INTO tabel VALUES ('', '$_POST[username]', '$_POST[email]')";
$data = $db->prepare($query);   //menyimpan query sql
$data->execute();               //menjalankan perintah query sql

header("location: form.php");