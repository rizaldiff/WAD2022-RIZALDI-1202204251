<?php
    include('connector.php');
    if (isset($_POST['edit'])){

    }
    
    $ubah = mysqli_query($conn, "UPDATE showroom_rizaldi_table SET nama_mobil='$_POST[nama_mobil]',
                                                                    pemilik_mobil='$_POST[pemilik_mobil]',
                                                                    merk_mobil='$_POST[merk_mobil]',
                                                                    tanggal_beli='$_POST[tanggal_beli]',
                                                                    deskripsi='$_POST[deskripsi]',
                                                                    foto_mobil='$_POST[foto_mobil]',
                                                                    status_pembayaran='$_POST[status_pembayaran]'
                                                                WHERE id_mobil='$_POST[id_mobil]'
                                                                    ");
    if($ubah) {
        echo "<script>
            alert('Data telah diedit');
            document.location='Detail-Rizaldi.php';
            </script>";
    } else {
        echo "<script>alert('Gagal diedit')
            document.location='Detail-Rizaldi.php';
        <   /script>";
    }

?>