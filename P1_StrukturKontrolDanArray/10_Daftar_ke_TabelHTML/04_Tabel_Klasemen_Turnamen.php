<?php
// Kasus: Menampilkan klasemen liga mini futsal menggunakan perulangan tabel HTML
// Poin dihitung: Menang = 3 poin, Seri = 1 poin, Kalah = 0 poin
$klasemen = [
    ["tim" => "Garuda Muda FC", "main" => 5, "menang" => 4, "seri" => 1, "kalah" => 0, "gol_masuk" => 12, "kebobolan" => 3],
    ["tim" => "Elang Perkasa", "main" => 5, "menang" => 3, "seri" => 1, "kalah" => 1, "gol_masuk" => 9, "kebobolan" => 5],
    ["tim" => "Singa Andalas", "main" => 5, "menang" => 2, "seri" => 1, "kalah" => 2, "gol_masuk" => 7, "kebobolan" => 7],
    ["tim" => "Badak Hitam", "main" => 5, "menang" => 1, "seri" => 0, "kalah" => 4, "gol_masuk" => 4, "kebobolan" => 11],
    ["tim" => "Rajawali Putih", "main" => 5, "menang" => 0, "seri" => 1, "kalah" => 4, "gol_masuk" => 2, "kebobolan" => 8]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Klasemen Turnamen Mini Futsal</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 30px;">

    <h2>Klasemen Sementara Liga Futsal Kampus</h2>

    <table border="1" cellpadding="8" cellspacing="0" style="border-collapse: collapse; width: 100%; text-align: center;">
        <tr bgcolor="#1e293b" style="color: white;">
            <th>Pos</th>
            <th align="left">Klub / Tim</th>
            <th>Main</th>
            <th>Menang</th>
            <th>Seri</th>
            <th>Kalah</th>
            <th>GM</th>
            <th>GK</th>
            <th>Selisih</th>
            <th>Poin</th>
        </tr>

        <?php 
        $pos = 1;
        foreach ($klasemen as $tim) { 
            $poin = ($tim["menang"] * 3) + ($tim["seri"] * 1);
            $selisih_gol = $tim["gol_masuk"] - $tim["kebobolan"];

            // Baris juara (peringkat 1) disorot warna hijau muda
            $bg = ($pos === 1) ? "#dcfce7" : (($pos % 2 === 0) ? "#f8fafc" : "#ffffff");
        ?>
            <tr bgcolor="<?= $bg ?>">
                <td><b><?= $pos++ ?></b></td>
                <td align="left"><b><?= $tim["tim"] ?></b></td>
                <td><?= $tim["main"] ?></td>
                <td><?= $tim["menang"] ?></td>
                <td><?= $tim["seri"] ?></td>
                <td><?= $tim["kalah"] ?></td>
                <td><?= $tim["gol_masuk"] ?></td>
                <td><?= $tim["kebobolan"] ?></td>
                <td><?= ($selisih_gol > 0 ? "+$selisih_gol" : $selisih_gol) ?></td>
                <td><b style="font-size: 16px;"><?= $poin ?></b></td>
            </tr>
        <?php } ?>
    </table>

    <p style="font-size: 13px; color: #64748b;">
        * GM = Gol Memasukkan, GK = Gol Kemasukan. Peringkat 1 otomatis lolos ke babak final.
    </p>

</body>
</html>

