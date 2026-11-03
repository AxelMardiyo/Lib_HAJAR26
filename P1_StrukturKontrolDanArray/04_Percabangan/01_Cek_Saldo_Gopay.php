<?php
// Kasus: Mengecek apakah saldo cukup untuk membeli item
$saldo_gopay = 50000;
$harga_item = 75000;

if ($saldo_gopay >= $harga_item) {
    echo "Pembayaran berhasil! Sisa saldo: Rp" . ($saldo_gopay - $harga_item);
} else {
    echo "Mohon maaf, saldo Anda tidak mencukupi. Kurang Rp" . ($harga_item - $saldo_gopay);
}
?>