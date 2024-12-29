<?php
// Membuat array berisi bilangan dari 1 sampai 50
$bilangan = range(1, 50);

// Inisialisasi variabel untuk menyimpan jumlah dan daftar bilangan genap
$jumlahGenap = 0;
$daftarGenap = [];

// Menggunakan perulangan for untuk memeriksa setiap elemen array
for ($i = 0; $i < count($bilangan); $i++) {
    // Memeriksa apakah bilangan genap
    if ($bilangan[$i] % 2 === 0) {
        $jumlahGenap++; // Menambah jumlah bilangan genap
        $daftarGenap[] = $bilangan[$i]; // Menambahkan bilangan genap ke dalam daftar
    }
}

// Menampilkan hasil
echo "Daftar bilangan genap: " . implode(", ", $daftarGenap) . "<br>";
echo "Jumlah bilangan genap: " . $jumlahGenap;
?>