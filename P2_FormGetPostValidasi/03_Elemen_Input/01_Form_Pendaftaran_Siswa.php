<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Data Siswa (Variasi Elemen Input)</title>
</head>
<body>

    <h2>Formulir Data Siswa Baru</h2>

    <form action="" method="POST">
        <!-- Tipe text -->
        <label>Nama Lengkap Siswa:</label><br>
        <input type="text" name="nama" placeholder="Contoh: Muhammad Ihsan" required><br><br>

        <!-- Tipe number -->
        <label>Nomor Induk Siswa (NIS):</label><br>
        <input type="number" name="nis" placeholder="Contoh: 2026101" required><br><br>

        <!-- Tipe email -->
        <label>Email Siswa:</label><br>
        <input type="email" name="email" placeholder="ihsan@sekolah.sch.id" required><br><br>

        <!-- Pilihan radio (Pilihan Tunggal) -->
        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="gender" value="Laki-laki" checked> Laki-laki
        <input type="radio" name="gender" value="Perempuan"> Perempuan<br><br>

        <!-- Pilihan select (Dropdown) -->
        <label>Pilihan Jurusan:</label><br>
        <select name="jurusan" required>
            <option value="">-- Pilih Jurusan --</option>
            <option value="Rekayasa Perangkat Lunak (RPL)">Rekayasa Perangkat Lunak (RPL)</option>
            <option value="Teknik Komputer & Jaringan (TKJ)">Teknik Komputer & Jaringan (TKJ)</option>
            <option value="Multimedia & DKV">Multimedia & DKV</option>
        </select><br><br>

        <!-- Teks panjang textarea -->
        <label>Alamat Tempat Tinggal:</label><br>
        <textarea name="alamat" rows="3" cols="40" placeholder="Alamat rumah..." required></textarea><br><br>

        <button type="submit" name="kirim_siswa">Kirim Formulir</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['kirim_siswa'])) {
        echo "<h3>Data Siswa Diterima:</h3>";
        echo "Nama: <b>" . htmlspecialchars($_POST['nama']) . "</b><br>";
        echo "NIS: " . htmlspecialchars($_POST['nis']) . "<br>";
        echo "Email: " . htmlspecialchars($_POST['email']) . "<br>";
        echo "Gender: " . htmlspecialchars($_POST['gender']) . "<br>";
        echo "Jurusan: <b>" . htmlspecialchars($_POST['jurusan']) . "</b><br>";
        echo "Alamat: " . nl2br(htmlspecialchars($_POST['alamat']));
    }
    ?>

</body>
</html>
