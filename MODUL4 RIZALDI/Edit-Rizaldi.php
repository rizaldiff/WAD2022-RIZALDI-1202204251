<?php

session_start();

if(!isset($_SESSION["login"])){
    header("Location: Login.php");
    exit;
}



require 'config/function.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="Home-Rizaldi.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Add-Rizaldi.php">My Car</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar end -->
  <?php include('config/connector.php');
    $query = mysqli_query($conn, "SELECT * FROM showroom_rizaldi_table");
    $row_query = mysqli_fetch_array($query);
  ?>

  <h3 style="margin-left: 200px;"><b><?php echo $row_query['nama_mobil'] ?></b></h3>
  <h10 style="margin-left: 200px;color:grey">Edit Mobil <?php echo $row_query['nama_mobil'] ?></h10>
  <!-- Show Detail  -->
  <div class="row" style="padding-top: 60px ;">
    <div class="col-6">
      <img src=image/<?= $row_query["foto_mobil"] ?>>
    </div>
    <div class="col-6">
      <form action="config/edit.php" method="POST">
        <div class="mb-3">
          <input type="hidden" id="id_mobil" name="id_mobil" value="<?= $row_query['id_mobil'] ?>">
        </div>
        <div class="mb-3">
          <label for="nama_mobil" class="form-label"><b>Nama Mobil<b></label>
          <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" value="<?php echo $row_query['nama_mobil'] ?>">
        </div>
        <div class="mb-3">
          <label for="pemilik_mobil" class="form-label"><b>Nama Pemilik<b></label>
          <input type="text" class="form-control" id="pemilik_mobil" name="pemilik_mobil" value="<?php echo $row_query['pemilik_mobil'] ?>">
        </div>
        <div class="mb-3">
          <label for="merk_mobil" class="form-label"><b>Merk</b></label>
          <input type="text" class="form-control" id="merk_mobil" name="merk_mobil" value="<?php echo $row_query['merk_mobil'] ?>">
        </div>

        <div class="mb-3">
          <label for="tanggal_beli" class="form-label">Tanggal Beli</label>
          <input type="date" class="form-control" id="tanggal_beli" name="tanggal_beli" value="<?php echo $row_query['tanggal_beli'] ?>">
        </div>

        <div class="mb-3">
          <label for="deskripsi" class="form-label">Deskripsi</label>
          <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" rows="8"><?php echo $row_query['deskripsi'] ?></textarea>
        </div>

        <div class="mb-3">
          <label for="foto_mobil" class="form-label"><b>Foto</b></label>
          <input class="form-control" type="file" id="foto_mobil" name="foto_mobil" value="<?= $row_query["foto_mobil"] ?>">
        </div>

        <div class="mb-5">
          <div>
            <label for="status_pembayaran" class="form-label"><b>Status Pembayaran<b></label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status_pembayaran" id="lunas" value="lunas" <?php if ($row_query['status_pembayaran'] == 'lunas') echo 'checked' ?>>
            <label class="form-check-label" for="lunas">Lunas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status_pembayaran" id="belumlunas" value="belum lunas" <?php if ($row_query['status_pembayaran'] == 'belum lunas') echo 'checked' ?>>
            <label class="form-check-label" for="belumlunas">Belum Lunas</label>
          </div>
        </div>

        <div class="mb-3">
          <div>
            <button type="submit" class="btn btn-primary" value="edit" name="edit" style="width: 120px; height:40px">Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- Show Detail end -->
</body>

</html>