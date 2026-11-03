<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ubah Kata Sandi (Method POST)</title>
</head>
<body>

    <h2>Ganti Password (Method POST)</h2>

    <form action="" method="POST">
        <label>Password Lama:</label><br>
        <input type="password" name="pass_lama" required><br><br>

        <label>Password Baru:</label><br>
        <input type="password" name="pass_baru" required><br><br>

        <label>Konfirmasi Password Baru:</label><br>
        <input type="password" name="pass_konfirmasi" required><br><br>

        <button type="submit" name="simpan_password">Perbarui Password</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['simpan_password'])) {
        $baru = $_POST['pass_baru'];
        $konfirmasi = $_POST['pass_konfirmasi'];

        if ($baru !== $konfirmasi) {
            echo "<b>Gagal!</b> Konfirmasi password baru tidak cocok.";
        } elseif (strlen($baru) < 6) {
            echo "<b>Gagal!</b> Password baru minimal 6 karakter.";
        } else {
            echo "<b>Berhasil!</b> Password telah diperbarui dengan aman via \$_POST.";
        }
    }
    ?>

</body>
</html>
