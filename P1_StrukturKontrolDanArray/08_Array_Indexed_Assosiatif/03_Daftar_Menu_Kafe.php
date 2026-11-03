<?php
// Array Indexed: Kategori menu di kafe
$kategori = ["Kopi", "Non-Kopi", "Camilan"];

// Array Assosiatif: Daftar harga makanan dan minuman
$harga_menu = [
    "Espresso" => 18000,
    "Caramel Macchiato" => 28000,
    "Matcha Latte" => 25000,
    "Croissant" => 22000,
    "French Fries" => 20000
];

echo "<h3>Menu Kafe Kopi Senja</h3>";
echo "Kategori Pilihan: " . implode(" | ", $kategori) . "<br><br>";

echo "<b>Rekomendasi Menu:</b><br>";
echo "- Espresso: Rp" . number_format($harga_menu["Espresso"], 0, ',', '.') . "<br>";
echo "- Caramel Macchiato: Rp" . number_format($harga_menu["Caramel Macchiato"], 0, ',', '.') . "<br>";
echo "- French Fries: Rp" . number_format($harga_menu["French Fries"], 0, ',', '.');
?>

