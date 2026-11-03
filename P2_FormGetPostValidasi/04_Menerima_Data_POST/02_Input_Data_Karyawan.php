<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Menerima Data Karyawan ($_POST & isset)</title>
</head>
<body>

    <h2>Entri Data Karyawan</h2>

    <form action="" method="POST">
        <label>Nomor Induk Karyawan (NIK):</label><br>
        <input type="text" name="nik" placeholder="KRY-001" required><br><br>

        <label>Nama Karyawan:</label><br>
        <input type="text" name="nama_karyawan" placeholder="Nama lengkap" required><br><br>

        <label>Divisi:</label><br>
        <select name="divisi" required>
            <option value="Teknologi Informasi">Teknologi Informasi</option>
            <option value="Pemasaran">Pemasaran</option>
            <option value="Operasional">Operasional</option>
        </select><br><br>

        <label>Jam Lembur:</label><br>
        <input type="number" name="jam_lembur" value="0" min="0" required><br><br>

        <button type="submit" name="btn_simpan">Simpan Karyawan</button>
    </form>

    <hr>

    <?php
    // Mengecek apakah tombol 'btn_simpan' telah diklik
    if (isset($_POST['btn_simpan'])) {
        $nik = $_POST['nik'];
        $nama = $_POST['nama_karyawan'];
        $divisi = $_POST['divisi'];
        $lembur = (int)$_POST['jam_lembur'];
        $uang_lembur = $lembur * 25000;

        echo "<h3>Hasil Input Data Karyawan:</h3>";
        echo "NIK: <b>" . htmlspecialchars($nik) . "</b><br>";
        echo "Nama: " . htmlspecialchars($nama) . "<br>";
        echo "Divisi: " . htmlspecialchars($divisi) . "<br>";
        echo "Uang Lembur ($lembur jam): Rp" . number_format($uang_lembur, 0, ',', '.');
    }
    ?>

</body>
</html>
