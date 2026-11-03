<?php
// Kasus: Menghitung total belanjaan dengan diskon dan ongkir
$harga_sepatu = 150000;
$jumlah_beli = 2;

// Operator Aritmatika
$total_harga = $harga_sepatu * $jumlah_beli;
$diskon = 20000;

// Operator Penugasan (Mengurangi total harga dengan diskon, lalu menambah ongkir)
$total_harga -= $diskon; 
$total_harga += 15000; // Tambah ongkir

echo "Total yang harus dibayar: Rp" . $total_harga;
?>