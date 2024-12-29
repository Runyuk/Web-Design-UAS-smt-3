<?php 
$nilai = isset($_POST["nilai_input"]) ? $_POST["nilai_input"] : 0;

    // Validasi input
    if (!is_numeric($nilai)) {
        $grade = "E";
        $keterangan = "Nilai tidak valid";
    } else {
        if($nilai >= 90){ 
            $grade = "A";
            $keterangan = "Lulus dengan pujian";
        }elseif ($nilai >= 76){ 
            $grade = "B";
            $keterangan = "Lulus Baik";
        }elseif ($nilai >= 60){ 
            $grade = "C";
            $keterangan = "Lulus cukup"; 
        }elseif($nilai >=50){ 
            $grade = "D";
            $keterangan = "Tidak Lulus"; 
        }else{ 
            $grade = "E";
            $keterangan = "Gagal";
        }
    }

echo "Grade: $grade <br>";
echo "Keterangan: $keterangan <br>";
?>

<form method="post" action="">
    <input type="text" name="nilai_input" placeholder="Masukkan nilai" />
    <input type="submit" value="Submit" />
</form>

<?php
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