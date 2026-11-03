<?php
// Kasus: Menghitung rata-rata nilai dan kelulusan dari array multidimensi siswa
$data_siswa = [
    ["nama" => "Andi Saputra", "tugas" => 80, "uts" => 75, "uas" => 85],
    ["nama" => "Bella Safitri", "tugas" => 90, "uts" => 88, "uas" => 92],
    ["nama" => "Candra Wijaya", "tugas" => 60, "uts" => 65, "uas" => 55],
    ["nama" => "Dina Lestari", "tugas" => 75, "uts" => 70, "uas" => 80]
];

echo "<h3>Rekap Nilai Siswa</h3>";

foreach ($data_siswa as $siswa) {
    // Hitung nilai akhir dengan bobot (30% Tugas + 30% UTS + 40% UAS)
    $nilai_akhir = ($siswa["tugas"] * 0.3) + ($siswa["uts"] * 0.3) + ($siswa["uas"] * 0.4);
    $status = ($nilai_akhir >= 70) ? "<span style='color:green;'>LULUS</span>" : "<span style='color:red;'>REMIDIAL</span>";

    echo "<b>Nama:</b> {$siswa['nama']}<br>";
    echo "Tugas: {$siswa['tugas']} | UTS: {$siswa['uts']} | UAS: {$siswa['uas']}<br>";
    echo "Nilai Akhir: " . round($nilai_akhir, 1) . " - Status: $status<br><br>";
}
?>

