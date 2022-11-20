<?php
    include('connector.php');
    $mobil = $_POST ['mobil'];
    $nama  = $_POST ['nama'];
    $merk = $_POST ['merk'];
    $tanggal= $_POST ['tanggal'];
    $desk= $_POST ['desk'];
    $query = mysqli_query($connect, "INSERT INTO showroom_rizaldi_table (nama_mobil,pemilik_mobil,merk_mobil,tanggal_beli,deskripsi)
                                    VALUES('$mobil','$nama','$merk','$tanggal','$desk')");

    if($query) {
        echo "<script>alert('Data telah ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=Add-Rizaldi.php'>";
    }else{
        echo "<script>alert('Gagal ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=Add-Rizaldi.php'>"; 
    }
?>