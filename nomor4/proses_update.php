<?php
include 'konek.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];

    $query = "UPDATE mahasiswa SET nama='$nama', alamat='$alamat', jurusan='$jurusan' WHERE nim='$nim'";
    
    if (mysqli_query($cnn, $query)) {
        echo "Data mahasiswa berhasil diperbarui.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($cnn);
    }
}

mysqli_close($cnn);
?>
<a href="daftar_mhs.php">Kembali ke Daftar Mahasiswa</a>