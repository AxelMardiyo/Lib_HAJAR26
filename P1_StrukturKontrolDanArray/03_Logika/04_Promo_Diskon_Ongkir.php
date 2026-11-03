<?php
// Kasus: Voucher gratis ongkir berlaku jika:
// (Member VIP ATAU Total Belanja >= 150000) DAN Metode Bayar BUKAN COD
$status_member = "VIP";
$total_belanja = 120000;
$metode_bayar = "Transfer";

$syarat_belanja = ($status_member === "VIP" || $total_belanja >= 150000);
$bukan_cod = ($metode_bayar !== "COD");

// Operator Logika Kombinasi
$dapat_gratis_ongkir = $syarat_belanja && $bukan_cod;

echo "Total Belanja: Rp" . number_format($total_belanja, 0, ',', '.') . "<br>";
echo "Status Member: $status_member<br>";
echo "Metode Bayar: $metode_bayar<br>";
echo "Berhak Gratis Ongkir: ";
var_dump($dapat_gratis_ongkir);
?>

