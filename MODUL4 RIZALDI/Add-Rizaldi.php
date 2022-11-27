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
    <title>Add Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 <?php 
require 'config/insert.php';
//udah pernah disubmit belom
if(isset($_POST["submit"])) {
    


    //cek data berhasil ditambahkan atau tidak
    if(tambah($_POST) > 0){
        echo "
        <script>
            alert('data berhasil ditambahkan');
            
        </script>

        ";
        
    } else {
        echo "        
        <script>
            alert('data gagal ditambahkan');
            
        </script>
    ";
    }

}
?>
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
          <a class="nav-link" href="ListCar-Rizaldi.php">My Car</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Navbar end -->
<!-- form -->

<div class="container">
    <div class="row text-center mt-5">
        <div class="col ">
            <h1 class = "display-4 text-dark ">Tambah Mobil</h1>
            <p>Tambah Mobil baru anda ke list showroom</p>          
        </div>
    </div>
    <div class="row">
        <div class="col-9" style="margin-left: 200px;">
             <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Mobil</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="BMW I4" name="nama_mobil">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Pemilik Mobil</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama-Nim" name="pemilik_mobil">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="BMW" name="merk_mobil">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Beli</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="11/12/2022" name="tanggal_beli">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                    <textarea type="text" class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="7"></textarea>
                </div>  
                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto</label>
                    <input class="form-control" type="file" id="formFile" name="foto_mobil">
                </div>
                <div class="mb-5">
                    <div>            
                        <label for="status_pembayaran" class="form-label"><b>Status Pembayaran<b></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status_pembayaran" id="lunas" value="lunas">
                        <label class="form-check-label" for="lunas">Lunas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status_pembayaran" id="belumlunas" value="belum lunas">
                        <label class="form-check-label" for="belumlunas">Belum Lunas</label>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" value="submit" name="submit" style="width: 120px; height:40px">Selesai</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- form end -->
<body>
    
</body>
</html>