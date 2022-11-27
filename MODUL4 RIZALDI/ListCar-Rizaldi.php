<?php

session_start();

if(!isset($_SESSION["login"])){
    header("Location: Login.php");
    exit;
}


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
    <title>List Car</title>
</head>
<?php 
 require 'config/function.php';
 $listcar = query("SELECT * FROM showroom_rizaldi_table");


?>
<style>
    #konten{
        padding: 20px 100px;
    }
</style>
<body>
<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="Home-Rizaldi.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Add-Rizaldi.php">My Car</a>
          </li>
        </ul>
      </div>
      <a href="Add-Rizaldi.php"><button type="button" class="btn btn-light" >Add Car</button></a>
    </div>
  </nav>
    <section id="konten">
        <h2>My Show Room</h2>
        <p>List Show Room Rizaldi_1202204251</p>
        <div class="row row-cols-1 row-cols-md-3 g-4" id="card">
            <?php foreach($listcar as $row) : ?>
                <div class="col">
                    <div class="card h-100">
                            <img src="image/<?= $row["foto_mobil"] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row["merk_mobil"]?></h5>
                                <p class="card-text"><?= $row["deskripsi"]?></p>
                                <a href="Detail-Rizaldi.php?id_mobil=<?= $row["id_mobil"]?>" class="btn btn-primary rounded-pill">Edit</a>
                                <a href="config/delete.php?id_mobil=<?= $row["id_mobil"];?>" class="btn btn-danger rounded-pill">Hapus</a>
                            </div>
                    </div>
                </div>
            <?php endforeach?>    
        </div>
    </section>
</body>
</html>