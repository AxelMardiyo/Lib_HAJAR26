<?php
// Kasus: Mencetak tabel perkalian angka 7 (dari 1 sampai 10) secara otomatis menggunakan loop
$angka = 7;

echo "<h3>Tabel Perkalian $angka</h3>";
echo "<table border='1' cellpadding='6' cellspacing='0' style='border-collapse: collapse; text-align: center;'>";
echo "<tr bgcolor='#f2f2f2'><th>Operasi</th><th>Hasil</th></tr>";

for ($i = 1; $i <= 10; $i++) {
    $hasil = $angka * $i;
    echo "<tr>";
    echo "<td>$angka x $i</td>";
    echo "<td><b>$hasil</b></td>";
    echo "</tr>";
}

echo "</table>";
?>

