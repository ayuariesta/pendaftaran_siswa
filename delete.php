<?php

    include 'koneksi.php';

    $idsiswa = $_GET['idsiswa'];

    mysqli_query($db, "DELETE FROM tbsiswa WHERE id_siswa = '$idsiswa'");


    header("location:delete-berhasil.php");
?>