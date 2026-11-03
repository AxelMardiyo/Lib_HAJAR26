<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Validasi Dasar Form (isset & empty)</title>
</head>
<body>

    <h2>Validasi Dasar Form Input</h2>
    <p>Mencegah data kosong masuk database menggunakan fungsi <code>empty()</code> dan <code>isset()</code>.</p>

    <?php
    $pesan_error = [];
    $berhasil = false;

    // Cek apakah tombol submit sudah dikirim
    if (isset($_POST['kirim'])) {
        $nama = trim($_POST['nama'] ?? '');
        $telepon = trim($_POST['telepon'] ?? '');

        // Validasi menggunakan empty()
        if (empty($nama)) {
            $pesan_error[] = "Nama lengkap tidak boleh kosong!";
        }

        if (empty($telepon)) {
            $pesan_error[] = "Nomor telepon tidak boleh kosong!";
        } elseif (!is_numeric($telepon)) {
            $pesan_error[] = "Nomor telepon harus berupa angka!";
        }

        // Jika tidak ada error sama sekali
        if (empty($pesan_error)) {
            $berhasil = true;
        }
    }

    // Tampilkan pesan error jika ada
    if (!empty($pesan_error)) {
        echo "<b style='color:red;'>Terjadi Kesalahan Input:</b><br>";
        foreach ($pesan_error as $err) {
            echo "- $err<br>";
        }
        echo "<br>";
    }
    ?>

    <form action="" method="POST" novalidate>
        <!-- novalidate agar validasi PHP dapat terlihat jelas -->
        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama" value="<?= htmlspecialchars($_POST['nama'] ?? '') ?>"><br><br>

        <label>Nomor Telepon:</label><br>
        <input type="text" name="telepon" value="<?= htmlspecialchars($_POST['telepon'] ?? '') ?>"><br><br>

        <button type="submit" name="kirim">Kirim & Validasi</button>
    </form>

    <hr>

    <?php if ($berhasil) { ?>
        <p style="color:green;"><b>Validasi Berhasil!</b> Data valid dan siap disimpan ke database.</p>
        Nama: <b><?= htmlspecialchars($nama) ?></b><br>
        No. HP: <b><?= htmlspecialchars($telepon) ?></b>
    <?php } ?>

</body>
</html>
