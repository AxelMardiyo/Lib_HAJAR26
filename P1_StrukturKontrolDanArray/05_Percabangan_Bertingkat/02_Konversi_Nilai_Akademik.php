<?php
// Kasus: Konversi nilai akhir mahasiswa ke dalam nilai huruf dan predikat
$nilai_akhir = 82;

if ($nilai_akhir >= 85) {
    $huruf = "A";
    $predikat = "Sangat Memuaskan";
} elseif ($nilai_akhir >= 75) {
    $huruf = "B";
    $predikat = "Memuaskan";
} elseif ($nilai_akhir >= 65) {
    $huruf = "C";
    $predikat = "Cukup";
} elseif ($nilai_akhir >= 50) {
    $huruf = "D";
    $predikat = "Kurang";
} else {
    $huruf = "E";
    $predikat = "Gagal";
}

echo "Nilai Angka: $nilai_akhir<br>";
echo "Nilai Huruf: <b>$huruf</b><br>";
echo "Predikat: <i>$predikat</i>";
?>

