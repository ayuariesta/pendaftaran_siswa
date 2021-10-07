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

      <div class="container-fluid">
        <h3 style="margin-top: 15px;  margin-bottom: 20px">Pendaftar</h3>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Peserta</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $tampil = mysqli_query($db, "SELECT * from tbsiswa");
                    while($data = mysqli_fetch_array($tampil)) :
                ?>
                <tr>
                    <td><?=$data['id_siswa']?></td>
                    <td><?=$data['nama_siswa']?></td>
                    <td><?=$data['alamat']?></td>
                    <td><?=$data['jenis_kelamin']?></td>
                    <td><?=$data['agama']?></td>
                    <td><?=$data['sekolah_asal']?></td>
                    <td>
                    <a href="edit.php?idsiswa=<?php echo $data['id_siswa']; ?>" type="button" class="btn btn-warning btn-sm"><b>Edit</b></a>
                    <a href="delete.php?idsiswa=<?php echo $data['id_siswa']; ?>" type="button" class="btn btn-danger btn-sm" onclick = "return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')" class="tombol"><b>Delete</b></a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
      </div>
    </body>
</html>