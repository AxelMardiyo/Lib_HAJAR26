<?php
// Kasus: Mengecek apakah nilai siswa mencapai Kriteria Ketuntasan Minimal (KKM)
$nilai_ujian = 78;
$kkm = 75;

echo "Nilai Siswa: $nilai_ujian (KKM: $kkm)<br>";
echo "Apakah siswa lulus ujian? ";
var_dump($nilai_ujian >= $kkm);

$nilai_sempurna = 100;
echo "<br>Apakah siswa mendapat nilai sempurna? ";
var_dump($nilai_ujian === $nilai_sempurna);
?>

