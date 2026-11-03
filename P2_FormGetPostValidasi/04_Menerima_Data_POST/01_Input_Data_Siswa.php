<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Menerima Data Siswa ($_POST & isset)</title>
</head>
<body>

    <h2>Formulir Data Siswa</h2>

    <!-- Form dikirim dengan method POST -->
    <form action="" method="POST">
        <label>Nomor Induk Siswa (NIS):</label><br>
        <input type="text" name="nis" placeholder="Contoh: 10291" required><br><br>

        <label>Nama Siswa:</label><br>
        <!-- name="nama" akan ditangkap oleh $_POST['nama'] -->
        <input type="text" name="nama" placeholder="Contoh: Siti Aisyah" required><br><br>

        <label>Kelas:</label><br>
        <select name="kelas" required>
            <option value="X RPL 1">X RPL 1</option>
            <option value="XI RPL 1">XI RPL 1</option>
            <option value="XII RPL 1">XII RPL 1</option>
        </select><br><br>

        <!-- Tombol submit dengan atribut name="kirim_data" -->
        <button type="submit" name="kirim_data">Simpan Data Siswa</button>
    </form>

    <hr>

    <?php
    // 1. isset() mengecek apakah tombol sudah diklik
    if (isset($_POST['kirim_data'])) {
        // 2. Membaca data berdasarkan name input di form HTML
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];

        echo "<h3>Data Siswa Berhasil Diterima:</h3>";
        echo "NIS: " . htmlspecialchars($nis) . "<br>";
        echo "Nama: <b>" . htmlspecialchars($nama) . "</b><br>";
        echo "Kelas: " . htmlspecialchars($kelas) . "<br>";
    }
    ?>

</body>
</html>
