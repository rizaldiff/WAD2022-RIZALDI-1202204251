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
          <a class="nav-link" href="Rizaldi_home.php">Home</a>
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
            <h5 class="mt-3"> Thank you RIZALDI_1202204251 for reserving</h5>
            <p> Please double check your reservation details</p>
            
        </div>
    </div>
</div>
<!-- EAD end -->
<!-- Data -->
<?php 
  $nama =  $_POST['nama'];
  $tanggal =$_POST['tanggal'];
  $jam =  $_POST['jam'];
  $durasi = $_POST['durasi'];
  $mobil = $_POST['mobil'];
  $nomor = $_POST['nomor'];
  $plusservis = $_POST['plusservis'];
  $checkout=date('Y-m-d',strtotime($tanggal . "+$durasi day"));


  $carprice= [];


  switch ($mobil){
      case"Rush":
      $carprice=200;
      break;
      case"Agya":
      $carprice=100;
      break;
      case"Avanza":
      $carprice=150;
      break;
  }


  $serprice =[];
  switch ($plusservis){
      case"Health protocol":
          $serprice=25;
          break;
      case"Driver":
          $serprice=100;
          break;
      case"Fuel Filled":
          $serprice=250;
          break;         
  }
 


  $total = ((int)$carprice * (int)$durasi) + (int)$serprice;
?>


<div class="container">
        <table class="table">
            <thead >
                <thead>
                    <th scope="col m-5">Booking Number</th>
                    <th scope="col m-5">Name</th>
                    <th scope="col m-5">Check in</th>
                    <th scope="col m-5">Check out</th>
                    <th scope="col m-5">Car Type</th>
                    <th scope="col m-5">Phone Number</th>
                    <th scope="col m-5">Service(s)</th>
                    <th scope="col m-5">Total Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope ="row"><?php echo rand() ?></th>
                    <td><?php echo $nama ?></td>
                    <td><?php echo $tanggal ."<br>" .$jam?></td>
                    <td><?php echo $checkout."<br>" .$jam?></td>
                    <td><?php echo $mobil ?></td>
                    <td><?php echo $nomor ?></td>
                    <td><?php
                              if(!empty($_POST['plusservis'])) {
                              foreach($_POST['plusservis'] as $check) {
                              echo $check . "<br>"; 
                                 }
                              }
                              else{
                                echo "no service";
                              }
                              ?> </td>                     
                    <td><?php echo "Rp".$total.".000" ?></td>
                </tr>
            </tbody>
        </table>
    
</div>

<!-- Data end -->

<!-- Footer -->
<footer class="text-center text-dark mt-5" style="background-color:lightgray;cursor: pointer;">
  <p > Created by RIZALDI_1202204251</p>
 </footer>
<!-- Footer end -->
</body>
</html>
