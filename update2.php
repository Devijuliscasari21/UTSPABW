<?php
include "database2.php";

$query = "UPDATE tabel2 SET NIK='$_POST[NIK]',namakepalakeluarga='$_POST[namakepalakeluarga]',kelurahan='$_POST[kelurahan]',kecamatan='$_POST[kecamatan]',rw='$_POST[rw]',rt='$_POST[rt]' WHERE id='$_POST[id]'";
$data  = $db->prepare($query);
$data->execute();

header("location: form2.php");