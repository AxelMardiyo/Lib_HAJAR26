<?php
// Kasus: Menghitung luas & keliling lingkaran, serta sisa bagi (modulus)
$jari_jari = 14;
$phi = 22 / 7;

// Operator Aritmatika: Luas = phi * r^2
$luas = $phi * ($jari_jari ** 2);
// Keliling = 2 * phi * r
$keliling = 2 * $phi * $jari_jari;

echo "Jari-jari: $jari_jari cm<br>";
echo "Luas Lingkaran: $luas cm&sup2;<br>";
echo "Keliling Lingkaran: $keliling cm<br>";

// Operator Penugasan & Modulus
$total_koin = 47;
$sisa_koin = $total_koin;
$sisa_koin %= 5; // Dibagi ke 5 orang sama rata, cek sisa
echo "<br>Total koin: $total_koin. Dibagi 5 orang, sisa: $sisa_koin koin.";
?>

