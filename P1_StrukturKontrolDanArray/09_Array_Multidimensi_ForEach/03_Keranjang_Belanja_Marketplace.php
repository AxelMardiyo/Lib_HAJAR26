<?php
// Kasus: Menghitung total belanjaan dari keranjang belanja online
$keranjang = [
    ["nama_produk" => "Kaos Polos Cotton Combed", "harga" => 65000, "jumlah" => 2],
    ["nama_produk" => "Celana Chino Slim Fit", "harga" => 145000, "jumlah" => 1],
    ["nama_produk" => "Kaos Kaki Sneaker 3-Pack", "harga" => 25000, "jumlah" => 3]
];

echo "<h3>Rincian Keranjang Belanja</h3>";
$grand_total = 0;

foreach ($keranjang as $item) {
    $subtotal = $item["harga"] * $item["jumlah"];
    $grand_total += $subtotal;

    echo "- <b>{$item['nama_produk']}</b><br>";
    echo "  Harga: Rp" . number_format($item["harga"], 0, ',', '.') . " x {$item['jumlah']} pcs = <b>Rp" . number_format($subtotal, 0, ',', '.') . "</b><br>";
}

echo "<hr>";
echo "<b>Total Tagihan Belanja: Rp" . number_format($grand_total, 0, ',', '.') . "</b>";
?>

