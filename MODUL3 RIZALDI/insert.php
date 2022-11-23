<?php
    include('connector.php');
    $id_mobil = $_POST ['id_mobil'];
    $nama_mobil = $_POST ['nama_mobil'];
    $pemilik_mobil = $_POST ['pemilik_mobil'];
    $merk_mobil = $_POST ['merk_mobil'];
    $tanggal_beli = $_POST ['tanggal_beli'];
    $deskripsi = $_POST ['deskripsi'];
    $foto_mobil = $_POST ['foto_mobil'];
    $status_pembayaran = $_POST ['status_pembayaran'];
    
    $query = mysqli_query($conn, "INSERT INTO showroom_rizaldi_table (id_mobil, nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil,
                                            status_pembayaran) VALUES('$id_mobil', '$nama_mobil','$pemilik_mobil','$merk_mobil','$tanggal_beli','$deskripsi',
                                            '$foto_mobil','$status_pembayaran')");
    if($query) {
        echo "<script>alert('Data telah ditambahkan')
            document.location='Detail-Rizaldi.php';
            </script>";
    } else {
        echo "<script>alert('Gagal ditambahkan')
            document.location='ListCar-Rizaldi.php';
            </script>";
    }

?>