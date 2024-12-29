<?php
$cnn = mysqli_connect('localhost', 'root', '', 'uas_webdes_smt3');
if (!$cnn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
} else {
    echo "Coneksi berhsil";
}
?>