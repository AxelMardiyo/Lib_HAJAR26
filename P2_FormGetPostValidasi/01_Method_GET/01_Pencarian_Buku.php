<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pencarian Buku (Method GET)</title>
</head>
<body>

    <h2>Pencarian Katalog Buku (Method GET)</h2>

    <!-- Form menggunakan method GET -->
    <form action="" method="GET">
        <label>Judul Buku:</label><br>
        <input type="text" name="keyword" placeholder="Masukkan judul buku..." value="<?= isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : '' ?>"><br><br>

        <label>Kategori:</label><br>
        <select name="kategori">
            <option value="Semua">-- Semua Kategori --</option>
            <option value="Teknologi" <?= (isset($_GET['kategori']) && $_GET['kategori'] === 'Teknologi') ? 'selected' : '' ?>>Teknologi</option>
            <option value="Sains" <?= (isset($_GET['kategori']) && $_GET['kategori'] === 'Sains') ? 'selected' : '' ?>>Sains</option>
            <option value="Bisnis" <?= (isset($_GET['kategori']) && $_GET['kategori'] === 'Bisnis') ? 'selected' : '' ?>>Bisnis</option>
        </select><br><br>

        <button type="submit">Cari Buku</button>
    </form>

    <hr>

    <?php
    // Menangkap data dari URL menggunakan $_GET
    if (isset($_GET['keyword']) && !empty($_GET['keyword'])) {
        $keyword = htmlspecialchars($_GET['keyword']);
        $kategori = htmlspecialchars($_GET['kategori'] ?? 'Semua');

        echo "<h3>Hasil Pencarian:</h3>";
        echo "Kata Kunci: <b>$keyword</b><br>";
        echo "Kategori: <b>$kategori</b><br>";
        echo "Query URL: ?keyword=" . urlencode($keyword) . "&kategori=" . urlencode($kategori);
    }
    ?>

</body>
</html>
