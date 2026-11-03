<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Validasi Pendaftaran Workshop</title>
</head>
<body>

    <h2>Pendaftaran Workshop Koding</h2>

    <?php
    $err_nama = $err_email = $err_usia = "";
    $is_valid = false;

    if (isset($_POST['daftar_workshop'])) {
        $nama = trim($_POST['nama'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $usia = trim($_POST['usia'] ?? '');

        // Pengecekan empty() per-field
        if (empty($nama)) {
            $err_nama = "Nama peserta tidak boleh kosong!";
        }

        if (empty($email)) {
            $err_email = "Email wajib diisi!";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err_email = "Format email tidak valid!";
        }

        if (empty($usia)) {
            $err_usia = "Usia tidak boleh kosong!";
        } elseif ((int)$usia < 15) {
            $err_usia = "Usia minimal peserta adalah 15 tahun!";
        }

        if (empty($err_nama) && empty($err_email) && empty($err_usia)) {
            $is_valid = true;
        }
    }
    ?>

    <form action="" method="POST" novalidate>
        <label>Nama Peserta:</label><br>
        <input type="text" name="nama" value="<?= htmlspecialchars($_POST['nama'] ?? '') ?>"><br>
        <?php if (!empty($err_nama)) echo "<small style='color:red;'>$err_nama</small><br>"; ?>
        <br>

        <label>Email Aktif:</label><br>
        <input type="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"><br>
        <?php if (!empty($err_email)) echo "<small style='color:red;'>$err_email</small><br>"; ?>
        <br>

        <label>Usia (Tahun):</label><br>
        <input type="number" name="usia" value="<?= htmlspecialchars($_POST['usia'] ?? '') ?>"><br>
        <?php if (!empty($err_usia)) echo "<small style='color:red;'>$err_usia</small><br>"; ?>
        <br>

        <button type="submit" name="daftar_workshop">Daftar Workshop</button>
    </form>

    <hr>

    <?php if ($is_valid) { ?>
        <h3 style="color:green;">Pendaftaran Diterima (Valid)!</h3>
        Peserta: <b><?= htmlspecialchars($nama) ?></b><br>
        Email: <b><?= htmlspecialchars($email) ?></b><br>
        Usia: <b><?= htmlspecialchars($usia) ?> tahun</b>
    <?php } ?>

</body>
</html>
