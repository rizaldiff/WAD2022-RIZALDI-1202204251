<?php
  include('connector.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Car</title>
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
<?php include('connector.php');
        $query = mysqli_query($conn, "SELECT * FROM showroom_rizaldi_table");
        $row_query = mysqli_fetch_array($query);
        ?>
        <h3 style="margin-left: 450px;"><b>My Show Room</b></h3>
        <h10 style="margin-left: 450px;color:grey">List Show Room <?php echo $row_query['pemilik_mobil'] ?></h10>
<!-- Card -->
        <div class="card-group" style="margin-left: 460px">
            <div class="row row-cols-2 row-cols-md-3 g-4" style="margin-right: 100px;"> 
                <div class="card" style="width: 450px; height: 500px;color:white">
                    <center><img src=<?php echo $row_query['foto_mobil'];?> style="width:97%; margin-top:20px" class="card-img" ></center>
                    <div class="card-body">
                        <h2 style="color:black"><b><?php echo $row_query['nama_mobil'] ?></b></h2>
                        <h7 style="color:grey"><?php echo $row_query['deskripsi'] ?></h7>
                            <pre></pre><pre></pre>
                        <a href="Detail-Rizaldi.php" class="btn btn-primary rounded-5" role="button" style="width: 150px; height:40px; margin-right:20px">Detail</a>
                        <a class="btn btn-danger rounded-5" role="button" style="width: 150px; height:40px">Delete</a>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 g-4" style="margin-right: 30px;"> 
                <div class="card" style="width: 450px; height: 500px;color:white">
                    <center><img src="https://store.sirclo.com/blog/wp-content/uploads/2022/03/eco-racing-1.jpg" style="width:97%; margin-top:20px" class="card-img" ></center>
                    <div class="card-body">
                        <h2 style="color:black"><b>Mobil 2</b></h2>
                        <h7 style="color:grey"> <?php echo $row_query['deskripsi'] ?></h7>
                            <pre></pre><pre></pre>
                        <a href="Detail-Amanda.php" class="btn btn-primary rounded-5" role="button" style="width: 150px; height:40px; margin-right:20px">Detail</a>
                        <a class="btn btn-danger rounded-5" role="button" style="width: 150px; height:40px">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="card-group" style="margin-left: 460px; margin-right: 100px;">
            <div class="row row-cols-2 row-cols-md-3 g-4" style="margin-right: 30px;"> 
                <div class="card" style="width: 450px; height: 500px;color:white">
                    <center><img src="https://cdn02.indozone.id/local/5e5389c66a8f6.jpg" style="width:97%; margin-top:20px" class="card-img" ></center>
                    <div class="card-body">
                        <h2 style="color:black"><b>Mobil 3</b></h2>
                        <h7 style="color:grey"><?php echo $row_query['deskripsi'] ?></h7>
                            <pre></pre><pre></pre>
                        <a href="Detail-Amanda.php" class="btn btn-primary rounded-5" role="button" style="width: 150px; height:40px; margin-right:20px">Detail</a>
                        <a class="btn btn-danger rounded-5" role="button" style="width: 150px; height:40px">Delete</a>
                    </div>
                </div>
            </div>
        </div>
<!-- Card end -->
</body>
</html>