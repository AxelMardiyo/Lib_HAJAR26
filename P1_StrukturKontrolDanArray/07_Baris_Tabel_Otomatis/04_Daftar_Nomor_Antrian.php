<?php
// Kasus: Mencetak daftar nomor antrian loket secara otomatis dan status pelayanan
$jumlah_antrian = 8;
$antrian_sekarang = 4;

echo "<h3>Daftar Antrian Loket Pelayanan</h3>";
echo "<table border='1' cellpadding='6' cellspacing='0' style='border-collapse: collapse; width: 350px;'>";
echo "<tr bgcolor='#fef08a'><th>No. Antrian</th><th>Status</th></tr>";

for ($i = 1; $i <= $jumlah_antrian; $i++) {
    $kode_antrian = "A-" . str_pad($i, 3, "0", STR_PAD_LEFT);
    
    if ($i < $antrian_sekarang) {
        $status = "<span style='color:gray;'>Selesai</span>";
        $bg = "#f3f4f6";
    } elseif ($i == $antrian_sekarang) {
        $status = "<b style='color:blue;'>Sedang Dilayani</b>";
        $bg = "#bfdbfe";
    } else {
        $status = "<span style='color:green;'>Menunggu</span>";
        $bg = "#ffffff";
    }

    echo "<tr bgcolor='$bg'>";
    echo "<td align='center'>$kode_antrian</td>";
    echo "<td align='center'>$status</td>";
    echo "</tr>";
}

echo "</table>";
?>

