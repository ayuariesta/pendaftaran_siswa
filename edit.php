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
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
          data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" 
          aria-expanded="false" aria-label="Toggle navigation">
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
        <h3 style="margin-top: 15px;  margin-bottom: 20px">Update Data Peserta</h3>
        <?php
            include 'koneksi.php';
            $idsiswa = $_GET['idsiswa'];
            $tampil = mysqli_query($db, "SELECT * from tbsiswa WHERE id_siswa='$idsiswa'");
            while($data = mysqli_fetch_array($tampil)){
        ?>
        <form action="update.php" method="post" class="form">
          <div class="form-wrapper" >
            <label  class="label-input">ID</label>
            <input type="text" class="form-control" name="ID" value="<?php echo $data['id_siswa'];?>" readonly>
          </div>
          <div class="form-wrapper" >
            <label  class="label-input">Nama</label>
            <input type="text" class="form-control" name="updateNama" value="<?php echo $data['nama_siswa']; ?>">
          </div>
          <div class="form-wrapper">
            <label class="label-comment">Alamat</label>
            <textarea name="updateAlamat" id="" class="form-control" style="height: 69px"><?php echo $data['alamat'] ?></textarea>
          </div>
          <div class="form-wrapper">
            <label class="label-input" >Jenis Kelamin</label>
              <input type="radio" name="updateJK" value="Laki-laki" style="margin-right: 5px" <?php if($data['jenis_kelamin']=='Laki-laki') echo 'checked'?>>Laki-laki
              <input type="radio" name="updateJK" value="Perempuan" style="margin-right: 5px; margin-left: 20px" <?php if($data['jenis_kelamin']=='Perempuan') echo 'checked'?>>Perempuan
          </div>
          <div class="form-wrapper">
            <label>Agama</label>
            <select class="form-control" name="updateAgama">
              <?php

                if ($data['agama'] == "Islam") echo "<option value='Islam' selected>Islam</option>";
                else echo "<option value='Islam'>Islam</option>";

                if ($data['agama'] == "Hindu") echo "<option value='Hindu' selected>Hindu</option>";
                else echo "<option value='Hindu'>Hindu</option>";

                if ($data['agama'] == "Kristen") echo "<option value='Kristen' selected>Kristen Protestan</option>";
                else echo "<option value='Kristen'>Kristen Protestan</option>";

                if ($data['agama'] == "Katholik") echo "<option value='Katholik' selected>Katholik</option>";
                else echo "<option value='Katholik'>Katholik</option>";

                if ($data['agama'] == "Buddha") echo "<option value='Buddha' selected>Buddha</option>";
                else echo "<option value='Buddha'>Buddha</option>";

                if ($data['agama'] == "Konghucu") echo "<option value='Konghucu' selected>Konghucu</option>";
                else echo "<option value='Konghucu'>Konghucu</option>";
               ?>
            </select>
          </div>
          <div class="form-wrapper">
            <label for="" class="label-input">Sekolah Asal</label>
            <input type="text" class="form-control" name="updateSekolah" value="<?php echo $data['sekolah_asal']; ?>">
          </div>
          <button type="submit" class="btn btn-primary" name="update" value="update">Update</button>
          <a class="btn btn-success" href="beranda.php" role="button">Kembali</a>
        </form>
        <?php
            }
        ?>
    </div>
    </body>
</html>