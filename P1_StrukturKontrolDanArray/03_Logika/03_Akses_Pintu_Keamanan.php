<?php
// Kasus: Akses pintu ruangan server: Boleh masuk jika punya Kartu Akses ATAU Sidik Jari terdaftar,
// serta status kartu TIDAK diblokir (NOT)
$punya_kartu = false;
$sidik_jari_cocok = true;
$kartu_diblokir = false;

// Operator OR (||) dan Operator NOT (!)
$identitas_valid = ($punya_kartu || $sidik_jari_cocok);
$kartu_aktif = !$kartu_diblokir;

$boleh_masuk = $identitas_valid && $kartu_aktif;

echo "Punya Kartu: " . ($punya_kartu ? "Ya" : "Tidak") . "<br>";
echo "Sidik Jari Cocok: " . ($sidik_jari_cocok ? "Ya" : "Tidak") . "<br>";
echo "Kartu Terblokir: " . ($kartu_diblokir ? "Ya" : "Tidak") . "<br>";
echo "Izin Akses Pintu Ruangan Server: ";
var_dump($boleh_masuk);
?>

