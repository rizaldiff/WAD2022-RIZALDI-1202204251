<?php
$mobil = [
  [

      "img" => "Rush.png"
  ],
  [

      "img" => "Agya.png"
  ],
  [

      "img" => "Avanza.png"
  ],
]
?>









<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>

</style>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="Rizaldi_home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Rizaldi_booking.php">Booking</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar end -->
  <!-- EAD -->
  <div class="container">
    <div class="row text-center">
      <div class="col mb-3">
        <h1 class="display-4 text-dark ">Welcome to EAD rent</h1>
        <P>Find your deal here!</P>
      </div>
    </div>
  </div>
  <!-- EAD-->
  <!-- Menu -->
  <div class="container">

    <div class="row">
        <div class="col-4">
          
            <div class="card">
                <img src=<?php echo $mobil[0]["img"];?> class="card-img-top" alt="Rush">
                <div class="card-body">
                  <h5 class="card-title">Toyota Rush</h5>
                  <p class="card-text">Rp.200.000/day</p>
                </div>
                <ul class="list-group list-group-flush text-center">
                  <li class="list-group-item text-primary">7 Kursi</li>
                  <li class="list-group-item text-primary">1500 CC</li>
                  <li class="list-group-item text-primary">Manual</li>
                </ul>
                <div class="card-body text-center">
                <button class="m-2 btn btn-primary" type="submit"><a href="Rizaldi_booking.php?img=<?= $mobil[0]["img"];?>" style="color:white">Book Now</a></button>
                </div>
            </div>
        </div>
      <div class="col-4">
        <div class="card">
          <img src="<?php echo $mobil[1]["img"]; ?>" alt="Agya">
          <div class="card-body">
            <h5 class="card-title">Toyota Agya</h5>
            <p class="card-text">Rp.100.000/day</p>
          </div>
          <ul class="list-group list-group-flush text-center">
            <li class="list-group-item text-primary">5 Kursi</li>
            <li class="list-group-item text-primary">1200 CC</li>
            <li class="list-group-item text-primary">Matic</li>
          </ul>
          <div class="card-body text-center">
            <button class="m-2 btn btn-primary" type="submit"><a href="Rizaldi_booking.php?img=<?= $mobil[1]["img"]; ?>" style="color:white">Book Now</a></button>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="<?php echo $mobil[2]["img"]; ?>" class="card-img-top" alt="Avanza">
          <div class="card-body">
            <h5 class="card-title">Toyota Avanza</h5>
            <p class="card-text">Rp.150.000/day</p>
          </div>
          <ul class="list-group list-group-flush text-center">
            <li class="list-group-item text-primary">7 Kursi</li>
            <li class="list-group-item text-primary">1500 CC</li>
            <li class="list-group-item text-primary">Manual</li>
          </ul>
          <div class="card-body text-center">
            <button class="m-2 btn btn-primary" type="submit"><a href="Rizaldi_booking.php?img=<?= $mobil[2]["img"]; ?>" style="color:white">Book Now</a></button>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Menu end -->
  <!-- Footer -->
  <footer class="text-center text-dark mt-5" style="background-color:lightgray;cursor: pointer;">
    <p> Created by RIZALDI_1202204251</p>
  </footer>
  <!-- Footer end -->
</body>

</html>