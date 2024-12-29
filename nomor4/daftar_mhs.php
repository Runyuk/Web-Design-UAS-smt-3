<?php
include 'konek.php';

$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($cnn, $query);

echo "<h2>Daftar Mahasiswa</h2>";
if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['nim']}</td>
                <td>{$row['nama']}</td>
                <td>{$row['alamat']}</td>
                <td>{$row['jurusan']}</td>
                <td>
                    <a href='edit_mahasiswa.php?nim={$row['nim']}'>Edit</a>
                    <a href='hapus_mahasiswa.php?nim={$row['nim']}'>Hapus</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data mahasiswa.";
}

mysqli_close($cnn);
?>
<br>
<a href="tambah_mhs.php">Tambah Mahasiswa</a>