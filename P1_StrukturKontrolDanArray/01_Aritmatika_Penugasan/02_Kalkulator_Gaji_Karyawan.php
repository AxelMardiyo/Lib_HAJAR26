<?php
// Kasus: Menghitung total gaji karyawan (Gaji pokok + tunjangan + lembur - potongan BPJS)
$gaji_pokok = 4500000;
$tunjangan_makan = 500000;
$upah_lembur_per_jam = 30000;
$jam_lembur = 8;
$potongan_bpjs = 150000;

// Operator Aritmatika: Hitung total uang lembur
$total_lembur = $upah_lembur_per_jam * $jam_lembur;

// Operator Penugasan: Akumulasi total penerimaan
$total_gaji = $gaji_pokok;
$total_gaji += $tunjangan_makan; // Tambah tunjangan
$total_gaji += $total_lembur;    // Tambah lembur
$total_gaji -= $potongan_bpjs;   // Kurangi potongan

echo "<h3>Slip Gaji Sederhana</h3>";
echo "Gaji Pokok: Rp" . number_format($gaji_pokok, 0, ',', '.') . "<br>";
echo "Tunjangan: Rp" . number_format($tunjangan_makan, 0, ',', '.') . "<br>";
echo "Lembur ($jam_lembur jam): Rp" . number_format($total_lembur, 0, ',', '.') . "<br>";
echo "Potongan BPJS: Rp" . number_format($potongan_bpjs, 0, ',', '.') . "<br>";
echo "<b>Gaji Bersih (Take Home Pay): Rp" . number_format($total_gaji, 0, ',', '.') . "</b>";
?>

