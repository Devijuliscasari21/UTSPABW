<?php
include "database2.php";

$query = "DELETE FROM tabel2 WHERE id='$_GET[id]'";
$data  = $db->prepare($query);
$data->execute();

header("location: form2.php");