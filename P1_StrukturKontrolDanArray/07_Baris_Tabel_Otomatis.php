<?php
// Kasus: Mencetak daftar nomor rak secara otomatis menggunakan perulangan
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Nomor Rak</th><th>Status</th></tr>";

for ($i = 1; $i <= 5; $i++) {
    // Generate baris tabel otomatis
    echo "<tr>";
    echo "<td>Rak-A0$i</td>";
    echo "<td>Tersedia</td>";
    echo "</tr>";
}

echo "</table>";
?>