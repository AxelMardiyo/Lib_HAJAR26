<?php
// Array Assosiatif: Informasi detail buku di perpustakaan
$buku = [
    "isbn" => "978-602-03-8591-2",
    "judul" => "Pemrograman Web Modern dengan PHP & MySQL",
    "penulis" => "Budi Raharjo",
    "tahun_terbit" => 2023,
    "jumlah_halaman" => 380,
    "lokasi_rak" => "Rak C-04"
];

// Array Indexed: Daftar bab isi buku
$daftar_bab = [
    "Pengenalan Dasar Web",
    "Sintaks PHP dan Kontrol Alur",
    "Array dan Fungsi",
    "Koneksi Database MySQL",
    "Proyek Aplikasi Kasir Web"
];

echo "<h3>Informasi Katalog Buku</h3>";
echo "Judul: <b>{$buku['judul']}</b><br>";
echo "Penulis: {$buku['penulis']} ({$buku['tahun_terbit']})<br>";
echo "ISBN: {$buku['isbn']}<br>";
echo "Tebal: {$buku['jumlah_halaman']} Halaman<br>";
echo "Posisi: <b>{$buku['lokasi_rak']}</b><br><br>";

echo "<b>Bab Pembahasan Pertama:</b> Bab 1 - {$daftar_bab[0]}<br>";
echo "<b>Bab Pembahasan Terakhir:</b> Bab 5 - {$daftar_bab[4]}";
?>

