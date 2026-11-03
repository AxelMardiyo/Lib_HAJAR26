<?php
// Kasus: Menggabungkan Array Multidimensi, Foreach, Ternary/If-Else, dan HTML Table
// Menampilkan status ketersediaan barang berdasarkan sisa stok
$katalog_produk = [
    ["kode" => "PRD-01", "nama" => "SSD NVMe 512GB", "kategori" => "Storage", "stok" => 12, "harga" => 650000],
    ["kode" => "PRD-02", "nama" => "RAM DDR4 8GB", "kategori" => "Memory", "stok" => 3, "harga" => 320000],
    ["kode" => "PRD-03", "nama" => "Mechanical Keyboard", "kategori" => "Aksesoris", "stok" => 0, "harga" => 450000],
    ["kode" => "PRD-04", "nama" => "Mouse Wireless", "kategori" => "Aksesoris", "stok" => 18, "harga" => 150000],
    ["kode" => "PRD-05", "nama" => "Monitor 24 Inch IPS", "kategori" => "Display", "stok" => 2, "harga" => 1400000]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Inventaris Gudang Toko Komputer</title>
</head>
<body>

    <h3>Laporan Stok Produk Gudang</h3>
    
    <table border="1" cellpadding="8" cellspacing="0" style="border-collapse: collapse; width: 100%; font-family: sans-serif;">
        <tr bgcolor="#e2e8f0">
            <th>Kode</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Harga Satuan</th>
            <th>Jumlah Stok</th>
            <th>Status Restok</th>
        </tr>
        
        <?php foreach ($katalog_produk as $item) { 
            // Logika pengecekan stok barang:
            // Stok 0 = Habis, stok < 5 = Segera Restok, sisanya = Aman
            if ($item["stok"] == 0) {
                $status = "HABIS";
                $warna = "#dc2626"; // Merah
            } elseif ($item["stok"] < 5) {
                $status = "Perlu Restok Segera";
                $warna = "#d97706"; // Oranye
            } else {
                $status = "Tersedia";
                $warna = "#16a34a"; // Hijau
            }
        ?>
            <tr>
                <td align="center"><b><?= $item["kode"] ?></b></td>
                <td><?= $item["nama"] ?></td>
                <td><?= $item["kategori"] ?></td>
                <td>Rp<?= number_format($item["harga"], 0, ',', '.') ?></td>
                <td align="center"><?= $item["stok"] ?> unit</td>
                <td align="center" style="color: <?= $warna ?>; font-weight: bold;">
                    <?= $status ?>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>