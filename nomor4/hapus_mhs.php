<?php
include 'konek.php';

$nim = $_GET['nim'];
$query = "DELETE FROM mahasiswa WHERE nim='$nim'";

if (mysqli_query($cnn, $query)) {
    echo "Data mahasiswa berhasil dihapus.";
} else {
    echo "Error: " . mysqli_error($cnn);
}

mysqli_close($cnn);
?>
<a href="daftar_mhs.php">Kembali ke Daftar Mahasiswa</a>