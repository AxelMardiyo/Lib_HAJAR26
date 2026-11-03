<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Member (Method POST)</title>
</head>
<body>

    <h2>Pendaftaran Member Baru (Method POST)</h2>

    <form action="" method="POST">
        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama_lengkap" placeholder="Contoh: Budi Santoso" required><br><br>

        <label>Alamat Email:</label><br>
        <input type="email" name="email" placeholder="budi@example.com" required><br><br>

        <label>Password Akun:</label><br>
        <input type="password" name="password" placeholder="Minimal 6 karakter" required><br><br>

        <button type="submit" name="daftar_member">Daftar Sekarang</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['daftar_member'])) {
        $nama = htmlspecialchars($_POST['nama_lengkap']);
        $email = htmlspecialchars($_POST['email']);

        echo "<h3>Pendaftaran Berhasil:</h3>";
        echo "Nama: <b>$nama</b><br>";
        echo "Email: <b>$email</b><br>";
        echo "Status: Data terkirim aman via method POST.";
    }
    ?>

</body>
</html>
