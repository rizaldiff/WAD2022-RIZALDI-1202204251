<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
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
<!-- Container -->

<div class="container">
    <div class="row mt-5">
      <h1> Detail </h1>
      <p> Detail Mobil Rush</p>
    </div>
    <div class="row" style="padding-top: 60px ;" >
      <div class="col-6" >
           <img src="Rush.png" alt="" width="100%">
        
      </div>
      <div class="col-6">
        <form action="#" method="POST">
            <div class="mb-2">
                <label for="mobil" class="form-label">Nama Mobil</label>
                 <input type="text" class="form-control" id="mobil" name="mobil" placeholder="" value="">
            </div>
            <div class="mb-2">
                <label for="nama" class="form-label">Nama Pemilik</label>
                 <input type="text" class="form-control" id="nama" name="nama" placeholder="" value="">
            </div>
            <div class="mb-2">
                <label for="merk" class="form-label">Merk</label>
                 <input type="text" class="form-control" id="merk" name="merk" placeholder="" value="">
            </div>
            <div class="mb-2">
                <label for="tanggal" class="form-label">Tanggal beli</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="">
            </div>
            <div class="mb-2">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="des" name="desk" rows="3">
            </div>
            <div class="mb-2">
                    <label for="formFile" class="form-label">Foto</label>
                    <input class="form-control" type="file" id="formFile">
            </div>
            <div class="mt-5"> Status Pembayaran
                <div class="form-check mt-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                     Lunas
                    </label>
                </div>
            <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                    Belum lunas
                    </label>
                </div>
                    
            </div>
            <button class="m-2 btn btn-primary"><a href="Edit-Rizaldi.php"> Edit </a></button>
        </form>
      </div>
    </div>
  </div>
<!-- Container end -->

</body>
</html>