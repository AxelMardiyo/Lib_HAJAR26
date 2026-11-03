<?php
// Kasus: Menampilkan data karyawan dalam bentuk tabel HTML dengan status masa kerja dan badge warna
$karyawan = [
    ["nik" => "EMP-001", "nama" => "Ahmad Fauzi", "divisi" => "IT Support", "gaji" => 6500000, "status" => "Tetap", "kinerja" => "Sangat Baik"],
    ["nik" => "EMP-002", "nama" => "Siti Nurhaliza", "divisi" => "Keuangan", "gaji" => 7200000, "status" => "Tetap", "kinerja" => "Baik"],
    ["nik" => "EMP-003", "nama" => "Rian Ardiansyah", "divisi" => "Pemasaran", "gaji" => 4800000, "status" => "Kontrak", "kinerja" => "Cukup"],
    ["nik" => "EMP-004", "nama" => "Putri Melati", "divisi" => "Desain Kreatif", "gaji" => 5500000, "status" => "Tetap", "kinerja" => "Sangat Baik"],
    ["nik" => "EMP-005", "nama" => "Bayu Prakoso", "divisi" => "Logistik", "gaji" => 4200000, "status" => "Magang", "kinerja" => "Baik"]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Karyawan Perusahaan</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 30px;">

    <h2>Laporan Data Karyawan PT. Maju Bersama</h2>

    <table border="1" cellpadding="9" cellspacing="0" style="border-collapse: collapse; width: 100%;">
        <tr bgcolor="#0284c7" style="color: white;">
            <th>No</th>
            <th>NIK</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Gaji Pokok</th>
            <th>Status Kepegawaian</th>
            <th>Penilaian Kinerja</th>
        </tr>

        <?php 
        $no = 1;
        $total_beban_gaji = 0;
        foreach ($karyawan as $k) { 
            $total_beban_gaji += $k["gaji"];

            // Penentuan warna badge status
            if ($k["status"] === "Tetap") {
                $status_color = "#16a34a"; // Hijau
            } elseif ($k["status"] === "Kontrak") {
                $status_color = "#ea580c"; // Oranye
            } else {
                $status_color = "#7c3aed"; // Ungu (Magang)
            }
        ?>
            <tr bgcolor="<?= ($no % 2 === 0) ? '#f8fafc' : '#ffffff' ?>">
                <td align="center"><?= $no++ ?></td>
                <td align="center"><b><?= $k["nik"] ?></b></td>
                <td><?= $k["nama"] ?></td>
                <td><?= $k["divisi"] ?></td>
                <td align="right">Rp<?= number_format($k["gaji"], 0, ',', '.') ?></td>
                <td align="center" style="color: <?= $status_color ?>; font-weight: bold;">
                    <?= $k["status"] ?>
                </td>
                <td align="center"><?= $k["kinerja"] ?></td>
            </tr>
        <?php } ?>

        <tr bgcolor="#e2e8f0" style="font-weight: bold;">
            <td colspan="4" align="right">Total Pengeluaran Gaji:</td>
            <td align="right">Rp<?= number_format($total_beban_gaji, 0, ',', '.') ?></td>
            <td colspan="2"></td>
        </tr>
    </table>

</body>
</html>

