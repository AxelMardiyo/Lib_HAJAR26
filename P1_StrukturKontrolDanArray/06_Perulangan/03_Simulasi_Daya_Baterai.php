<?php
// Kasus: Simulasi pengisian daya baterai HP menggunakan perulangan WHILE
$baterai = 30; // Mulai dari 30%
$penambahan_per_menit = 15;
$menit = 0;

echo "<b>Mulai Pengisian Daya Cepat (Fast Charging):</b><br>";

while ($baterai < 100) {
    echo "Menit ke-$menit: Baterai terisi $baterai%<br>";
    $baterai += $penambahan_per_menit;
    $menit += 10;
}

// Pastikan batas maksimal tidak melebihi 100%
if ($baterai > 100) {
    $baterai = 100;
}

echo "Menit ke-$menit: Baterai terisi $baterai% (Penuh!)<br>";
echo "Pengisian daya selesai dalam waktu $menit menit.";
?>

