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
          <a class="nav-link"  href="Rizaldi_home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"aria-current="page" href="Rizaldi_booking.php">Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Rizaldi_mybooking.php">MyBooking</a>
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
            <h1 class = "display-4 text-dark ">Rent your car now!</h1>
            
        </div>
    </div>
</div>
<!-- EAD -->
<!-- Form-->
<div class="container">
    <div class="row">
        <div class="col-lg-5 mt-5">
            <img src="Rush.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-7">
            <form action="Rizaldi_mybooking.php" method="GET">
                <div class="mb-2">
                    <label for="nama" class="form-label">Name</label>
                    <input readonly type="text" class="form-control" id="nama" name="nama" placeholder="" value="Rizaldi_1202204251">
                </div>
                <div class="mb-2">
                    <label for="tanggal" class="form-label">Book Date</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required >
                </div>
                <div class="mb-2">
                    <label for="jam" class="form-label">Start Time</label>
                    <input type="time" class="form-control" id="jam" name="jam" required>
                </div>
                <div class="mb-2">
                    <label for="durasi" class="form-label" >Duration (Days)</label>
                    <input type="number" min="1" class="form-control" id="durasi" name="durasi" required >
                </div>
                <div class="mb-2">
                    <label for="mobil" class="form-label">Car Type</label>
                    <select name="mobil" class="form-select" id="">
                        <option value="Rush">Toyota Rush</option>
                        <option value="Agya">Toyota Agya</option>
                        <option value="Avanza">Toyota Avanza</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="nomor" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="nomor" name="nomor" required >
                </div>
                <div class="mb-2">
                    <label for="servis">Add Services</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Health protocol" name="plusservis">
                        <label class="form-check-label" >
                        Health protocol/Rp.25.000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Driver" name="plusservis">
                        <label class="form-check-label">
                        Driver/Rp.100.000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Fuel Filled" name="plusservis">
                        <label class="form-check-label">
                        Fuel Filled/Rp.250.000
                        </label>
                    </div>                 
                </div>
                <div class="pt-2">
                    <div class="d-grid gap-2">
                        <button class="btn btn-success" type="submit">Book</button>          
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Form end -->
<!-- Footer -->
<footer class="text-center text-dark mt-5" style="background-color:lightgray;cursor: pointer;">
  <p > Created by RIZALDI_1202204251</p>
 </footer>
<!-- Footer end -->
</body>
</html>