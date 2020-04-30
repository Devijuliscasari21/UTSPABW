<?php

session_start();
if(session_destroy()){
    echo "<script>alert('Berhasil Logout');</script>";
    header('location:form_login_petugas.php');
}