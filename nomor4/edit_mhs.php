<?php
include 'konek.php';

$nim = $_GET['nim'];
$query = "SELECT * FROM mahasiswa WHERE nim='$nim'";
$result = mysqli_query($cnn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h2>Edit Mahasiswa</h2>
    <form action="proses_update.php" method="POST">
        <input type="hidden" name="nim" value="<?php echo $row['nim']; ?>">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required><br><br>
        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat"><?php echo $row['alamat']; ?></textarea><br><br>
        <label for="jurusan">Jurusan:</label>
        <input type="text" id="jurusan" name="jurusan" value="<?php echo $row['jurusan']; ?>"><br><br>
        <input type="submit" value="Update Mahasiswa">
    </form>
    <br>
    <a href="daftar_mhs.php">Kembali ke Daftar Mahasiswa</a>
</body>
</html>