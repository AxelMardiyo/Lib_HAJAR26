<?php
$errors = [];
$submitted = false;

$nama_pelapor = "";
$kategori = "";
$isi_laporan = "";

if (isset($_POST['kirim_laporan'])) {
    $nama_pelapor = trim($_POST['nama_pelapor'] ?? '');
    $kategori     = trim($_POST['kategori'] ?? '');
    $isi_laporan  = trim($_POST['isi_laporan'] ?? '');

    if (empty($nama_pelapor)) {
        $errors[] = "Nama pelapor wajib diisi!";
    }

    if (empty($kategori)) {
        $errors[] = "Pilih kategori pengaduan!";
    }

    if (empty($isi_laporan)) {
        $errors[] = "Uraian isi pengaduan tidak boleh kosong!";
    } elseif (strlen($isi_laporan) < 10) {
        $errors[] = "Uraian pengaduan minimal 10 karakter!";
    }

    if (empty($errors)) {
        $submitted = true;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pengaduan (htmlspecialchars)</title>
</head>
<body>

    <h2>Layanan Pengaduan & Aspirasi Siswa</h2>
    <p>Uji coba: Coba masukkan teks berisi tag HTML seperti <code>&lt;b&gt;Tebal&lt;/b&gt;</code> atau <code>&lt;script&gt;alert(1)&lt;/script&gt;</code> pada isi laporan.</p>

    <?php if (!empty($errors)) { ?>
        <b style="color:red;">Error Input Pengaduan:</b><br>
        <?php foreach ($errors as $e) echo "- $e<br>"; ?>
        <br>
    <?php } ?>

    <form action="" method="POST" novalidate>
        <label>Nama Pelapor:</label><br>
        <input type="text" name="nama_pelapor" value="<?= htmlspecialchars($nama_pelapor) ?>" placeholder="Nama lengkap Anda"><br><br>

        <label>Kategori Pengaduan:</label><br>
        <select name="kategori">
            <option value="">-- Pilih Kategori --</option>
            <option value="Fasilitas Gedung" <?= ($kategori === 'Fasilitas Gedung') ? 'selected' : '' ?>>Fasilitas Gedung / Lab</option>
            <option value="Jaringan Internet" <?= ($kategori === 'Jaringan Internet') ? 'selected' : '' ?>>Jaringan Internet & Wifi</option>
            <option value="Pelayanan Administrasi" <?= ($kategori === 'Pelayanan Administrasi') ? 'selected' : '' ?>>Pelayanan Administrasi</option>
        </select><br><br>

        <label>Uraian Isi Pengaduan:</label><br>
        <textarea name="isi_laporan" rows="4" cols="45" placeholder="Tuliskan keluhan atau laporan..."><?= htmlspecialchars($isi_laporan) ?></textarea><br><br>

        <button type="submit" name="kirim_laporan">Kirim Laporan</button>
    </form>

    <hr>

    <!-- Tampilkan ringkasan hanya setelah data valid -->
    <?php if ($submitted) { ?>
        <h3>Ringkasan Laporan Pengaduan Diterima:</h3>
        
        <p>Nama Pelapor: <b><?= htmlspecialchars($nama_pelapor) ?></b></p>
        <p>Kategori: <b><?= htmlspecialchars($kategori) ?></b></p>
        <p>Isi Laporan:</p>
        <blockquote>
            <!-- Fungsi htmlspecialchars() mengubah karakter khusus menjadi entitas HTML agar aman dari XSS -->
            <?= nl2br(htmlspecialchars($isi_laporan)) ?>
        </blockquote>

        <p><small>*Fungsi <code>htmlspecialchars()</code> memastikan karakter <code>&lt;</code> dan <code>&gt;</code> tidak dieksekusi sebagai tag browser atau merusak layout.</small></p>
    <?php } ?>

</body>
</html>
