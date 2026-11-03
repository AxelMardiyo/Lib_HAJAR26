<?php
// Kasus: Mengecek apakah tim memenuhi syarat level untuk mendaftar turnamen
$level_tim = 25;
$syarat_minimal = 30;

echo "Apakah level tim memenuhi syarat? ";
// Mengembalikan boolean (true/false)
var_dump($level_tim >= $syarat_minimal);

$status_akun = "aktif";
echo "<br>Apakah akun tidak dibanned? ";
var_dump($status_akun !== "banned");
?>