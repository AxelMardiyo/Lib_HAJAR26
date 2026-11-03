<?php
// Kasus: Mencetak jadwal piket mingguan secara otomatis dari array hari dengan perulangan FOR
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"];
$petugas = ["Ahmad & Budi", "Citra & Dewi", "Eko & Fajar", "Gita & Hadi", "Indra & Joko"];

echo "<h3>Jadwal Piket Kerja</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse;'>";
echo "<tr bgcolor='#dbeafe'><th>No</th><th>Hari</th><th>Petugas Kebersihan</th></tr>";

for ($i = 0; $i < count($hari); $i++) {
    $no = $i + 1;
    echo "<tr>";
    echo "<td align='center'>$no</td>";
    echo "<td><b>{$hari[$i]}</b></td>";
    echo "<td>{$petugas[$i]}</td>";
    echo "</tr>";
}

echo "</table>";
?>

