<?php
// Kasus: Memberikan bonus merchandise gratis jika total belanja melebihi minimal belanja
$total_belanja = 120000;
$minimal_belanja_hadiah = 100000;

echo "Total Belanja: Rp" . number_format($total_belanja, 0, ',', '.') . "<br>";

if ($total_belanja >= $minimal_belanja_hadiah) {
    echo "Selamat! Anda berhak mendapatkan <b>Tumbler Eksklusif Gratis</b>!";
} else {
    $selisih = $minimal_belanja_hadiah - $total_belanja;
    echo "Belanja Rp" . number_format($selisih, 0, ',', '.') . " lagi untuk mendapatkan Tumbler Gratis.";
}
?>

