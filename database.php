<?php

try{
    //path koneksi
    $db = new PDO("mysql:host=localhost;dbname=pabw","root","");
}catch(PDOException $e){
    echo $e->getMessage();
}
