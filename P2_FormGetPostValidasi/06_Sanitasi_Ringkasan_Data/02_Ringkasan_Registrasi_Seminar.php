<?php
$errors = [];
$is_success = false;

$nama_peserta = "";
$instansi = "";
$email = "";
$paket = "";

if (isset($_POST['daftar_seminar'])) {
    $nama_peserta = trim($_POST['nama_peserta'] ?? '');
    $instansi     = trim($_POST['instansi'] ?? '');
    $email        = trim($_POST['email'] ?? '');
    $paket        = trim($_POST['paket'] ?? '');

    if (empty($nama_peserta)) {
        $errors[] = "Nama peserta tidak boleh kosong!";
    }

    if (empty($instansi)) {
        $errors[] = "Asal sekolah / instansi wajib diisi!";
    }

    if (empty($email)) {
        $errors[] = "Email wajib diisi!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Alamat email tidak valid!";
    }

    if (empty($paket)) {
        $errors[] = "Pilih salah satu paket seminar!";
    }

    if (empty($errors)) {
        $is_success = true;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ringkasan Pendaftaran Seminar</title>
</head>
<body>

    <h2>Pendaftaran Seminar Nasional Teknologi</h2>

    <?php if (!empty($errors)) { ?>
        <b style="color:red;">Error Pendaftaran:</b><br>
        <?php foreach ($errors as $e) echo "- $e<br>"; ?>
        <br>
    <?php } ?>

    <form action="" method="POST" novalidate>
        <label>Nama Peserta:</label><br>
        <input type="text" name="nama_peserta" value="<?= htmlspecialchars($nama_peserta) ?>" placeholder="Nama lengkap"><br><br>

        <label>Instansi / Sekolah:</label><br>
        <input type="text" name="instansi" value="<?= htmlspecialchars($instansi) ?>" placeholder="Asal instansi"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?= htmlspecialchars($email) ?>" placeholder="email@contoh.com"><br><br>

        <label>Pilihan Paket:</label><br>
        <select name="paket">
            <option value="">-- Pilih Paket --</option>
            <option value="Reguler" <?= ($paket === 'Reguler') ? 'selected' : '' ?>>Reguler</option>
            <option value="VIP" <?= ($paket === 'VIP') ? 'selected' : '' ?>>VIP</option>
        </select><br><br>

        <button type="submit" name="daftar_seminar">Daftar Seminar</button>
    </form>

    <hr>

    <!-- Tampilkan ringkasan hanya jika berhasil dan valid -->
    <?php if ($is_success) { ?>
        <h3 style="color:green;">Ringkasan Data Peserta Seminar (Valid):</h3>
        
        <table border="1" cellpadding="6" cellspacing="0">
            <tr>
                <td><b>Nama Peserta</b></td>
                <td><?= htmlspecialchars($nama_peserta) ?></td>
            </tr>
            <tr>
                <td><b>Instansi</b></td>
                <td><?= htmlspecialchars($instansi) ?></td>
            </tr>
            <tr>
                <td><b>Email</b></td>
                <td><?= htmlspecialchars($email) ?></td>
            </tr>
            <tr>
                <td><b>Paket Seminar</b></td>
                <td><?= htmlspecialchars($paket) ?></td>
            </tr>
        </table>
        
        <p>E-Sertifikat dan tiket masuk akan dikirimkan ke email di atas.</p>
    <?php } ?>

</body>
</html>
