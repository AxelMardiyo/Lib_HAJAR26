<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Validasi Pemesanan Tiket</title>
</head>
<body>

    <h2>Pemesanan Tiket Bioskop</h2>

    <?php
    $errors = [];
    $berhasil_pesan = false;

    if (isset($_POST['pesan_tiket'])) {
        $nama = trim($_POST['nama_pemesan'] ?? '');
        $film = trim($_POST['film'] ?? '');
        $jumlah = (int)($_POST['jumlah_tiket'] ?? 0);
        $metode = trim($_POST['metode_bayar'] ?? '');

        if (empty($nama)) {
            $errors[] = "Nama pemesan tidak boleh kosong!";
        }
        if (empty($film)) {
            $errors[] = "Silakan pilih judul film!";
        }
        if ($jumlah <= 0 || $jumlah > 6) {
            $errors[] = "Jumlah tiket minimal 1 dan maksimal 6 tiket!";
        }
        if (empty($metode)) {
            $errors[] = "Pilih salah satu metode pembayaran!";
        }

        if (empty($errors)) {
            $berhasil_pesan = true;
            $harga_per_tiket = 45000;
            $total_bayar = $jumlah * $harga_per_tiket;
        }
    }

    if (!empty($errors)) {
        echo "<b style='color:red;'>Peringatan Validasi:</b><br>";
        foreach ($errors as $e) {
            echo "- $e<br>";
        }
        echo "<br>";
    }
    ?>

    <form action="" method="POST" novalidate>
        <label>Nama Pemesan:</label><br>
        <input type="text" name="nama_pemesan" value="<?= htmlspecialchars($_POST['nama_pemesan'] ?? '') ?>"><br><br>

        <label>Pilih Judul Film:</label><br>
        <select name="film">
            <option value="">-- Pilih Film --</option>
            <option value="Avatar 3" <?= (($_POST['film'] ?? '') === 'Avatar 3') ? 'selected' : '' ?>>Avatar 3</option>
            <option value="Detective Conan" <?= (($_POST['film'] ?? '') === 'Detective Conan') ? 'selected' : '' ?>>Detective Conan</option>
            <option value="Spiderman" <?= (($_POST['film'] ?? '') === 'Spiderman') ? 'selected' : '' ?>>Spiderman</option>
        </select><br><br>

        <label>Jumlah Tiket:</label><br>
        <input type="number" name="jumlah_tiket" value="<?= htmlspecialchars($_POST['jumlah_tiket'] ?? '1') ?>"><br><br>

        <label>Metode Pembayaran:</label><br>
        <select name="metode_bayar">
            <option value="">-- Pilih Pembayaran --</option>
            <option value="QRIS" <?= (($_POST['metode_bayar'] ?? '') === 'QRIS') ? 'selected' : '' ?>>QRIS</option>
            <option value="Transfer Bank" <?= (($_POST['metode_bayar'] ?? '') === 'Transfer Bank') ? 'selected' : '' ?>>Transfer Bank</option>
        </select><br><br>

        <button type="submit" name="pesan_tiket">Bayar Tiket</button>
    </form>

    <hr>

    <?php if ($berhasil_pesan) { ?>
        <h3 style="color:green;">E-Tiket Berhasil Diterbitkan!</h3>
        Pemesan: <b><?= htmlspecialchars($nama) ?></b><br>
        Film: <b><?= htmlspecialchars($film) ?></b><br>
        Jumlah Tiket: <b><?= $jumlah ?></b> (@ Rp<?= number_format($harga_per_tiket, 0, ',', '.') ?>)<br>
        Total Tagihan: <b>Rp<?= number_format($total_bayar, 0, ',', '.') ?></b><br>
        Metode Bayar: <?= htmlspecialchars($metode) ?> (Lunas)
    <?php } ?>

</body>
</html>
