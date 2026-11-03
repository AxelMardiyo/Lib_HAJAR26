<?php
// Kasus: Menampilkan jadwal kuliah mingguan menggunakan array multidimensi dan foreach
$jadwal_kuliah = [
    [
        "hari" => "Senin",
        "matkul" => "Pemrograman Web Lanjut",
        "ruang" => "Lab Komputer 3",
        "dosen" => "Dr. Ir. Hendra, M.Kom",
        "sks" => 3
    ],
    [
        "hari" => "Selasa",
        "matkul" => "Basis Data Relasional",
        "ruang" => "Ruang Teori B.201",
        "dosen" => "Nurul Hidayati, M.T",
        "sks" => 3
    ],
    [
        "hari" => "Kamis",
        "matkul" => "Kecerdasan Buatan",
        "ruang" => "Lab AI & Data Science",
        "dosen" => "Agus Setiawan, Ph.D",
        "sks" => 2
    ]
];

echo "<h3>Jadwal Perkuliahan Semester Ini</h3>";

$total_sks = 0;
foreach ($jadwal_kuliah as $jadwal) {
    $total_sks += $jadwal["sks"];
    echo "<b>[{$jadwal['hari']}]</b> {$jadwal['matkul']} ({$jadwal['sks']} SKS)<br>";
    echo "Lokasi: {$jadwal['ruang']} | Dosen: {$jadwal['dosen']}<br><br>";
}

echo "<b>Total Beban SKS: $total_sks SKS</b>";
?>

