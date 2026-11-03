<?php
// Kasus: Menghitung biaya parkir berdasarkan jenis kendaraan dan lama durasi (dalam jam)
$jenis_kendaraan = "Mobil";
$durasi_jam = 4;

switch (strtolower($jenis_kendaraan)) {
    case "motor":
        $tarif_awal = 2000;
        $tarif_per_jam = 1000;
        break;
    case "mobil":
        $tarif_awal = 5000;
        $tarif_per_jam = 3000;
        break;
    case "truk":
    case "bus":
        $tarif_awal = 10000;
        $tarif_per_jam = 5000;
        break;
    default:
        $tarif_awal = 0;
        $tarif_per_jam = 0;
        echo "Jenis kendaraan tidak dikenali!";
        exit;
}

$total_parkir = $tarif_awal + (($durasi_jam - 1) * $tarif_per_jam);

echo "Kendaraan: $jenis_kendaraan<br>";
echo "Durasi Parkir: $durasi_jam jam<br>";
echo "Total Biaya Parkir: Rp" . number_format($total_parkir, 0, ',', '.');
?>

