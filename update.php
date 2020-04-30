<?php
include "database.php";

$query = "UPDATE tabel SET username='$_POST[username]', email='$_POST[email]' WHERE id='$_POST[id]'";
$data  = $db->prepare($query);
$data->execute();

header("location: form.php");