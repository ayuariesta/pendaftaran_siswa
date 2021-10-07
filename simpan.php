<?php

include 'koneksi.php';

if(isset($_POST['simpan']))
    {
        $simpan = mysqli_query($db, "INSERT INTO tbsiswa (nama_siswa, alamat, jenis_kelamin, agama, sekolah_asal)
                                    VALUES ('$_POST[inputNama]',
                                            '$_POST[inputAlamat]',
                                            '$_POST[inputJK]',
                                            '$_POST[inputAgama]',
                                            '$_POST[inputSekolah]')");

        header("location:beranda-berhasil.php");
    }
?>