<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Mahasiswa</title>
</head>
<body>
    <h2>Tambah Mahasiswa</h2>
    <form action="proses_tambah.php" method="POST">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br><br>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat"></textarea><br><br>
        <label for="jurusan">Jurusan:</label>
        <input type="text" id="jurusan" name="jurusan"><br><br>
        <input type="submit" value="Tambah Mahasiswa">
    </form>
    <br>
    <a href="daftar_mhs.php">Lihat Daftar Mahasiswa</a>
</body>
</html>