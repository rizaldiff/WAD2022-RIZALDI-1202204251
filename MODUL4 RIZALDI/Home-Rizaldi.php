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
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha3tg84-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>

<?php include('config/connector.php');
  $query = mysqli_query($conn, "SELECT * FROM user_rizaldi");
  $row_query = mysqli_fetch_array($query);
?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Listcar-Rizaldi.php">My Car</a>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <a href="Add-Rizaldi.php"><button type="button" class="btn btn-light" >Add Car</button></a>
    <div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" >
    Rizaldi
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="Profile-Rizaldi.php">Profile</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="Logout.php">Log Out</a></li>
  </ul>
</div>
      
      
    </div>
  </div>
</nav>
<!-- Navbar End -->
<!-- Container -->
<!-- Jumbotron -->
<div class="container">
    <div class="row" style="padding-top: 120px ;" >
        <div class="col-6" >
            <div class="jumbotron">
                <h1 class="display-4"><strong>Selamat Datang Di <br>Show Room Rizaldi </strong> </h1>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates numquam nemo, odit nam earum sequi </p>
                <hr class="my-4">   
                <a class="btn btn-primary btn-lg" href="Add-Rizaldi.php" role="button">My car</a>
            </div>
            <div class="row mt-5">
                <div class="col-3">
                    <img src="image/logo-ead.png" alt="" width="100px" height="50px">
                </div>
                <div class="col">
                    <p>Rizaldi_1202204251</p>
                </div>
                
            </div>
        </div>
        <div class="col-6" >
            <div class="image">
                <img src="image/car.jpeg" width=" 80%"alt="">
            </div>
        </div>
    </div>
</div>
<!-- Jumbotron end -->
<!-- Container end -->
</body>
</html>