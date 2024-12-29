<?php 
   error_reporting(E_ALL);
   ini_set('display_errors', 1);
   ?>
<?php 
$nilai = isset($_POST["nilai_input"]) ? $_POST["nilai_input"] : 0;

// Menentukan grade berdasarkan nilai menggunakan if-else
if ($nilai >= 90) { 
    $grade = 'A';
    $keterangan = "Nilai Memuaskan"; 
} elseif ($nilai >= 76) { 
    $grade = 'B';
    $keterangan = "Nilai Bagus";
} elseif ($nilai >= 60) { 
    $grade = 'C';
    $keterangan = "Nilai Cukup";  
} elseif ($nilai >= 50) { 
    $grade = 'D';
    $keterangan = "Nilai Kurang"; 
} else { 
    $grade = 'E';
    $keterangan = "Nilai Sangat Kurang"; 
}

// Menampilkan grade dan keterangan
echo "Grade: $grade <br>";
echo "Keterangan: $keterangan <br>";

// Menentukan keterangan tambahan menggunakan switch-case
switch ($grade) {
    case 'A':
        echo "Selamat! Anda mendapatkan nilai yang sangat baik.";
        break;
    case 'B':
        echo "Bagus! Terus pertahankan.";
        break;
    case 'C':
        echo "Cukup, tetapi masih bisa ditingkatkan.";
        break;
    case 'D':
        echo "Perlu lebih banyak usaha.";
        break;
    case 'E':
        echo "Silakan belajar lebih giat.";
        break;
    default:
        echo "Nilai tidak valid.";
        break;
}
?> 

<!-- Form should be removed from this file if it's in webdes.html -->