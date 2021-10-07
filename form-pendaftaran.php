<?php
  include 'simpan.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Sistem Informasi Pendaftaran Siswa</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="style.css">
      </head>

    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
          <img src="images\dts-logo.png"  width="95" height="42" halt="logo-dts">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="pendaftar.php">Calon Peserta</a>
              <a class="nav-link" href="form-pendaftaran.php">Daftar Baru</a>
            </div>
          </div>
        </div>
      </nav>

      <div class="container-fluid-1" style=" margin-left: 30px;">
        <h3 style="margin-top: 12px;  margin-bottom: 16px">Tambah Data Peserta</h3>
        <form action="simpan.php" method="post" class="form">
          <div class="form-wrapper d-flex" >
            <label  class="label-input">Nama</label>
            <input type="text" class="form-control" name="inputNama" required>
          </div>
          <div class="form-wrapper">
            <label class="label-comment">Alamat</label>
            <textarea name="inputAlamat" id="" class="form-control" style="height: 69px" required></textarea>
          </div>
          <div class="form-wrapper">
              <label class="label-input" required>Jenis Kelamin</label>
              <input type="radio" name="inputJK" value="Laki-laki" style="margin-right: 5px">Laki-laki
          </div>
          <div class="form-wrapper">
            <label class="label-input" required></label>
              <input type="radio" name="inputJK" value="Perempuan" style="margin-right: 5px;">Perempuan
          </div>
          <div class="form-wrapper">
            <label>Agama</label>
            <select class="form-control" name="inputAgama" required>
              <option value="">Pilih salah satu</option>
              <option value="Islam">Islam</option>
              <option value="Hindu">Hindu</option>
              <option value="Kristen">Kristen Protestan</option>
              <option value="Katholik">Katholik</option>
              <option value="Buddha">Buddha</option>
              <option value="Konghucu">Konghucu</option>
            </select>
          </div>
          <div class="form-wrapper">
            <label for="" class="label-input">Sekolah Asal</label>
            <input type="text" class="form-control" name="inputSekolah" required>
          </div>
          <button type="submit" class="btn btn-primary" name="simpan" value="simpan">Simpan</button>
          <button type="reset" class="btn btn-info" name="reset" value="reset">Reset</button>
          <a class="btn btn-success" href="index.php" role="button">Kembali</a>
          
        </form>
        
    </div>
    </body>
</html>