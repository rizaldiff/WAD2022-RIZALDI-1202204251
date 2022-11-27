<?php

require 'config/function.php';
if(isset($_POST['registrasi'])){
   if(registrasi($_POST) > 0){
    echo "<script>
				alert('user berhasil ditambahkan');
                document.location.href='Login.php';
		      </script>";
   }else {
    echo' user gagal ditambahkan';
   }
}
?>
    


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="log.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Login -->
<div class="login d-flex">
    <div class="login-left w-50 h-40">
        <img src="image/BG.jpeg" class="d-block" alt="...">
    </div>
    <div class="login-right w-50 h-100">
        <div class="row align-items-center h-100">
            <div class="col-8">
                <div class="header mb-5">
                    <h1>Registrasi</h1>
                </div>
                <div class="formm">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" name="email" autofocus autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nama" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nomor Handphone</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="no_hp" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Konfirmasi Password*</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="" name="password2" required>
                        </div>
                
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary" value="registrasi" name="registrasi" style="width: 120px; height:40px">Daftar</button>
                        </div> 
                        <div class="mt-2">
                            <span class="d-inline">Anda sudah punya akun ? <a href="Login.php" class="signup d-inline">Login</a> </span>
                        </div> 
                    </form>
                </div>
            </div> 
        </div>      
    </div>
</div>

<!-- Login end -->


</body>
</html>