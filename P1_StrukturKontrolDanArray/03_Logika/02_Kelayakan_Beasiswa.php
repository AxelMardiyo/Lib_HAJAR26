<?php
// Kasus: Syarat menerima beasiswa berprestasi: IPK >= 3.50 DAN Penghasilan Ortu <= 4.000.000
$ipk = 3.75;
$penghasilan_ortu = 3500000;

$syarat_ipk = ($ipk >= 3.50);
$syarat_ekonomi = ($penghasilan_ortu <= 4000000);

// Operator AND (&&) - Kedua syarat harus terpenuhi
$lolos_beasiswa = $syarat_ipk && $syarat_ekonomi;

echo "IPK Mahasiswa: $ipk<br>";
echo "Penghasilan Orang Tua: Rp" . number_format($penghasilan_ortu, 0, ',', '.') . "<br>";
echo "Status Kelolosan Beasiswa: ";
var_dump($lolos_beasiswa);
?>

