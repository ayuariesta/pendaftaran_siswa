<?php

    include 'koneksi.php';

    $idsiswa = $_POST['ID'];
    $nama = $_POST['updateNama'];
    $alamat = $_POST['updateAlamat'];
    $jenis_kelamin = $_POST['updateJK'];
    $agama = $_POST['updateAgama'];
    $sekolah = $_POST['updateSekolah'];

    mysqli_query($db, "UPDATE tbsiswa SET id_siswa='$idsiswa',
                                          nama_siswa='$nama',
                                          alamat='$alamat',
                                          jenis_kelamin='$jenis_kelamin',
                                          agama='$agama',
                                          sekolah_asal='$sekolah'
    WHERE id_siswa='$idsiswa'");

    header("location:update-berhasil.php");
?>