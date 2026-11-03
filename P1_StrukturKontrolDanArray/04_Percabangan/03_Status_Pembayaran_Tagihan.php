<?php
// Kasus: Pengecekan status tagihan listrik dan denda keterlambatan
$tagihan = 250000;
$hari_keterlambatan = 5;

if ($hari_keterlambatan > 0) {
    $denda = $hari_keterlambatan * 5000;
    $total_bayar = $tagihan + $denda;
    echo "Status: <b>Terlambat ($hari_keterlambatan hari)</b><br>";
    echo "Denda: Rp" . number_format($denda, 0, ',', '.') . "<br>";
    echo "Total Tagihan yang harus dibayar: Rp" . number_format($total_bayar, 0, ',', '.');
} else {
    echo "Status: <b>Tepat Waktu</b><br>";
    echo "Total Tagihan: Rp" . number_format($tagihan, 0, ',', '.');
}
?>

