<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Login (Method POST)</title>
</head>
<body>

    <h2>Login Akun (Method POST)</h2>

    <!-- Form menggunakan method POST (data tidak tampil di URL) -->
    <form action="" method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" placeholder="Masukkan username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" placeholder="Masukkan password" required><br><br>

        <button type="submit" name="submit_login">Masuk</button>
    </form>

    <hr>

    <?php
    // Membaca data dengan method POST
    if (isset($_POST['submit_login'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        if ($user === "admin" && $pass === "12345") {
            echo "<b>Login Berhasil!</b> Selamat datang, " . htmlspecialchars($user) . ".";
        } else {
            echo "<b style='color:red;'>Login Gagal!</b> Username atau password salah.";
        }
    }
    ?>

</body>
</html>
