<?php
// Kasus: Mengecek kelayakan membuat SIM berdasarkan batas usia minimal
$usia_pendaftar = 16;
$syarat_usia_sim = 17;

echo "Usia Pendaftar: $usia_pendaftar tahun<br>";
echo "Apakah usia mencukupi untuk membuat SIM? ";
var_dump($usia_pendaftar >= $syarat_usia_sim);

echo "<br>Apakah pendaftar masih di bawah umur? ";
var_dump($usia_pendaftar < $syarat_usia_sim);
?>

