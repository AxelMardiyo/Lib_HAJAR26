<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Pasien Klinik ($_POST & isset)</title>
</head>
<body>

    <h2>Pendaftaran Pasien Rawat Jalan</h2>

    <form action="" method="POST">
        <label>Nomor Rekam Medis (No RM):</label><br>
        <input type="text" name="no_rm" placeholder="RM-001" required><br><br>

        <label>Nama Lengkap Pasien:</label><br>
        <input type="text" name="nama_pasien" placeholder="Nama pasien" required><br><br>

        <label>Poli Tujuan:</label><br>
        <select name="poli" required>
            <option value="Poli Umum">Poli Umum</option>
            <option value="Poli Gigi">Poli Gigi</option>
            <option value="Poli Anak">Poli Anak</option>
            <option value="Poli Mata">Poli Mata</option>
        </select><br><br>

        <label>Keluhan Pasien:</label><br>
        <textarea name="keluhan" rows="2" cols="40" placeholder="Keluhan yang dirasakan..." required></textarea><br><br>

        <button type="submit" name="daftar_pasien">Daftarkan Pasien</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['daftar_pasien'])) {
        $no_rm = $_POST['no_rm'];
        $nama_pasien = $_POST['nama_pasien'];
        $poli = $_POST['poli'];
        $keluhan = $_POST['keluhan'];

        echo "<h3>Tiket Antrian Pasien:</h3>";
        echo "No RM: <b>" . htmlspecialchars($no_rm) . "</b><br>";
        echo "Pasien: <b>" . htmlspecialchars($nama_pasien) . "</b><br>";
        echo "Poli: " . htmlspecialchars($poli) . "<br>";
        echo "Keluhan: <i>" . htmlspecialchars($keluhan) . "</i>";
    }
    ?>

</body>
</html>
