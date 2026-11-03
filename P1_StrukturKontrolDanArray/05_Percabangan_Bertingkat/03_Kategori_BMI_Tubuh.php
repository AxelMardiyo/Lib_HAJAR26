<?php
// Kasus: Klasifikasi Body Mass Index (BMI) berdasarkan berat dan tinggi badan
// Rumus: BMI = berat (kg) / (tinggi (m) ^ 2)
$berat = 68; // kg
$tinggi = 1.72; // meter

$bmi = round($berat / ($tinggi ** 2), 1);

if ($bmi < 18.5) {
    $kategori = "Berat Badan Kurang (Underweight)";
} elseif ($bmi <= 24.9) {
    $kategori = "Berat Badan Normal (Ideal)";
} elseif ($bmi <= 29.9) {
    $kategori = "Kelebihan Berat Badan (Overweight)";
} else {
    $kategori = "Obesitas";
}

echo "Tinggi: {$tinggi} m | Berat: {$berat} kg<br>";
echo "Skor BMI Anda: <b>$bmi</b><br>";
echo "Kategori: <b>$kategori</b>";
?>

