<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Survei Layanan (Radio & Checkbox)</title>
</head>
<body>

    <h2>Kuesioner Survei Layanan</h2>

    <form action="" method="POST">
        <!-- Radio: pilihan tunggal -->
        <label><b>Tingkat Kepuasan:</b></label><br>
        <input type="radio" name="kepuasan" value="Sangat Puas" checked> Sangat Puas<br>
        <input type="radio" name="kepuasan" value="Puas"> Puas<br>
        <input type="radio" name="kepuasan" value="Cukup"> Cukup<br>
        <input type="radio" name="kepuasan" value="Kurang Puas"> Kurang Puas<br><br>

        <!-- Checkbox: pilihan jamak (array) -->
        <label><b>Fitur yang Sering Digunakan (Boleh lebih dari satu):</b></label><br>
        <input type="checkbox" name="fitur[]" value="Pencarian Cepat"> Pencarian Cepat<br>
        <input type="checkbox" name="fitur[]" value="Notifikasi WhatsApp"> Notifikasi WhatsApp<br>
        <input type="checkbox" name="fitur[]" value="Download Laporan PDF"> Download Laporan PDF<br>
        <input type="checkbox" name="fitur[]" value="Live Chat Bantuan"> Live Chat Bantuan<br><br>

        <!-- Textarea -->
        <label><b>Kritik & Saran:</b></label><br>
        <textarea name="saran" rows="3" cols="40" placeholder="Tuliskan masukan Anda..."></textarea><br><br>

        <button type="submit" name="kirim_survei">Kirim Survei</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['kirim_survei'])) {
        $kepuasan = htmlspecialchars($_POST['kepuasan'] ?? '-');
        $fitur_pilihan = isset($_POST['fitur']) ? $_POST['fitur'] : [];
        $saran = !empty($_POST['saran']) ? htmlspecialchars($_POST['saran']) : "Tidak ada saran tambahan.";

        echo "<h3>Hasil Survei:</h3>";
        echo "Penilaian Kepuasan: <b>$kepuasan</b><br>";
        echo "Fitur yang Dipilih: ";
        if (!empty($fitur_pilihan)) {
            echo "<b>" . htmlspecialchars(implode(", ", $fitur_pilihan)) . "</b><br>";
        } else {
            echo "<i>Tidak ada yang dipilih</i><br>";
        }
        echo "Kritik & Saran: " . nl2br($saran);
    }
    ?>

</body>
</html>
