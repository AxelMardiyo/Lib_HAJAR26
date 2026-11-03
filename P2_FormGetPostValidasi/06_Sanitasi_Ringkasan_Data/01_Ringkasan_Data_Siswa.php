<?php
// Inisialisasi variabel dan status validasi
$errors = [];
$show_summary = false;

$nis = "";
$nama = "";
$jurusan = "";
$gender = "";
$alamat = "";

if (isset($_POST['simpan_siswa'])) {
    $nis     = trim($_POST['nis'] ?? '');
    $nama    = trim($_POST['nama'] ?? '');
    $jurusan = trim($_POST['jurusan'] ?? '');
    $gender  = trim($_POST['gender'] ?? '');
    $alamat  = trim($_POST['alamat'] ?? '');

    // 1. Validasi Dasar (empty)
    if (empty($nis)) {
        $errors[] = "NIS wajib diisi!";
    } elseif (!is_numeric($nis)) {
        $errors[] = "NIS harus berupa angka!";
    }

    if (empty($nama)) {
        $errors[] = "Nama siswa tidak boleh kosong!";
    }

    if (empty($jurusan)) {
        $errors[] = "Silakan pilih salah satu jurusan!";
    }

    if (empty($gender)) {
        $errors[] = "Jenis kelamin harus dipilih!";
    }

    if (empty($alamat)) {
        $errors[] = "Alamat tempat tinggal wajib diisi!";
    }

    // 2. Tampilkan ringkasan HANYA setelah data valid
    if (empty($errors)) {
        $show_summary = true;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ringkasan Data Siswa & Sanitasi HTML</title>
</head>
<body>

    <h2>Input Data Siswa</h2>
    <p>Mencegah data kosong dan menggunakan fungsi <code>htmlspecialchars()</code> agar input tidak merusak struktur HTML.</p>

    <?php if (!empty($errors)) { ?>
        <b style="color:red;">Mohon Perbaiki Kesalahan:</b><br>
        <?php foreach ($errors as $e) { echo "- $e<br>"; } ?>
        <br>
    <?php } ?>

    <form action="" method="POST" novalidate>
        <label>Nomor Induk Siswa (NIS):</label><br>
        <input type="text" name="nis" value="<?= htmlspecialchars($nis) ?>"><br><br>

        <label>Nama Lengkap Siswa:</label><br>
        <input type="text" name="nama" value="<?= htmlspecialchars($nama) ?>"><br><br>

        <label>Jurusan:</label><br>
        <select name="jurusan">
            <option value="">-- Pilih Jurusan --</option>
            <option value="Rekayasa Perangkat Lunak" <?= ($jurusan === 'Rekayasa Perangkat Lunak') ? 'selected' : '' ?>>Rekayasa Perangkat Lunak</option>
            <option value="Teknik Komputer & Jaringan" <?= ($jurusan === 'Teknik Komputer & Jaringan') ? 'selected' : '' ?>>Teknik Komputer & Jaringan</option>
            <option value="Desain Komunikasi Visual" <?= ($jurusan === 'Desain Komunikasi Visual') ? 'selected' : '' ?>>Desain Komunikasi Visual</option>
        </select><br><br>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="gender" value="Laki-laki" <?= ($gender === 'Laki-laki') ? 'checked' : '' ?>> Laki-laki
        <input type="radio" name="gender" value="Perempuan" <?= ($gender === 'Perempuan') ? 'checked' : '' ?>> Perempuan<br><br>

        <label>Alamat Lengkap:</label><br>
        <textarea name="alamat" rows="3" cols="40"><?= htmlspecialchars($alamat) ?></textarea><br><br>

        <button type="submit" name="simpan_siswa">Validasi & Tampilkan Ringkasan</button>
    </form>

    <hr>

    <!-- Ringkasan hanya tampil setelah data benar-benar valid -->
    <?php if ($show_summary) { ?>
        <h3>Ringkasan Data Siswa (Valid)</h3>

        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <td><b>Nomor Induk Siswa</b></td>
                <!-- Sanitasi dengan htmlspecialchars() -->
                <td><?= htmlspecialchars($nis) ?></td>
            </tr>
            <tr>
                <td><b>Nama Lengkap</b></td>
                <td><?= htmlspecialchars($nama) ?></td>
            </tr>
            <tr>
                <td><b>Jurusan</b></td>
                <td><?= htmlspecialchars($jurusan) ?></td>
            </tr>
            <tr>
                <td><b>Jenis Kelamin</b></td>
                <td><?= htmlspecialchars($gender) ?></td>
            </tr>
            <tr>
                <td><b>Alamat</b></td>
                <td><?= nl2br(htmlspecialchars($alamat)) ?></td>
            </tr>
        </table>
        
        <p style="color:green;"><b>Status:</b> Data telah valid dan aman dari injeksi HTML/XSS.</p>
    <?php } ?>

</body>
</html>
