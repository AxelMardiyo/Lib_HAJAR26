<?php
// Kasus: Array di dalam array untuk menyimpan banyak data kompleks
$katalog_game = [
    ["judul" => "Cyberpunk 2077", "genre" => "RPG", "harga" => 450000],
    ["judul" => "Valorant", "genre" => "FPS", "harga" => 0],
    ["judul" => "Stardew Valley", "genre" => "Simulasi", "harga" => 120000]
];

echo "<h3>Katalog Game</h3>";
foreach ($katalog_game as $game) {
    $status_harga = ($game["harga"] == 0) ? "Gratis" : "Rp" . $game["harga"];
    echo "- " . $game["judul"] . " (" . $game["genre"] . ") : " . $status_harga . "<br>";
}
?>