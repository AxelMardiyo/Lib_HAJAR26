<?php
// Kasus: Mencetak deret bilangan kelipatan 5 dari 5 sampai 50 menggunakan perulangan FOR
echo "<h3>Deret Kelipatan 5 (1 - 50)</h3>";

for ($i = 5; $i <= 50; $i += 5) {
    echo "$i ";
}

echo "<br><br><b>Bilangan Ganjil antara 1 sampai 15:</b><br>";
for ($j = 1; $j <= 15; $j++) {
    if ($j % 2 !== 0) {
        echo "$j ";
    }
}
?>

