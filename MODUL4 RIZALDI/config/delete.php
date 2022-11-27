<?php 
$id_mobil = $_GET["id_mobil"];

$conn = mysqli_connect("localhost", "root", "", "wad_modul4_rizaldi");

$result = mysqli_query($conn, "DELETE FROM showroom_rizaldi_table WHERE id_mobil = $id_mobil");


if(($result) > 0){
    echo "
    <script>
        alert('data berhasil dihapus');
        document.location.href = '../ListCar-Rizaldi.php';   
    </script>
    ";
    
} else {
    "
    <script>
        alert('data gagal dihapus');
        document.location.href = '../ListCar-Rizaldi.php';   
    </script>

    ";
}

return mysqli_affected_rows($conn);
?>