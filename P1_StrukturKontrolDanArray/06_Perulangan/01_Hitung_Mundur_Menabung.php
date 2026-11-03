<?php
// Kasus 1: For Loop (Hitung mundur flash sale)
echo "Flash sale dimulai dalam:<br>";
for ($waktu = 5; $waktu > 0; $waktu--) {
    echo "$waktu detik...<br>";
}
echo "Mulai!<br><br>";

// Kasus 2: While Loop (Menabung sampai target tercapai)
$tabungan = 0;
$target = 50000;
$hari = 1;

while ($tabungan < $target) {
    $tabungan += 10000; // Nabung 10rb per hari
    echo "Hari ke-$hari: Tabungan Rp$tabungan<br>";
    $hari++;
}
?>