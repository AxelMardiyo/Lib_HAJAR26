<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Filter Produk Toko (Method GET)</title>
</head>
<body>

    <h2>Filter Katalog Produk (Method GET)</h2>

    <form action="" method="GET">
        <label>Kategori Produk:</label><br>
        <select name="kategori">
            <option value="Semua">Semua Kategori</option>
            <option value="Laptop" <?= (isset($_GET['kategori']) && $_GET['kategori'] === 'Laptop') ? 'selected' : '' ?>>Laptop</option>
            <option value="Smartphone" <?= (isset($_GET['kategori']) && $_GET['kategori'] === 'Smartphone') ? 'selected' : '' ?>>Smartphone</option>
            <option value="Aksesoris" <?= (isset($_GET['kategori']) && $_GET['kategori'] === 'Aksesoris') ? 'selected' : '' ?>>Aksesoris</option>
        </select><br><br>

        <label>Maksimal Harga (Rp):</label><br>
        <input type="number" name="max_harga" placeholder="Contoh: 5000000" value="<?= isset($_GET['max_harga']) ? htmlspecialchars($_GET['max_harga']) : '' ?>"><br><br>

        <button type="submit">Terapkan Filter</button>
        <a href="02_Filter_Produk.php">Reset Filter</a>
    </form>

    <hr>

    <?php
    if (isset($_GET['kategori'])) {
        $kat = htmlspecialchars($_GET['kategori']);
        $max = !empty($_GET['max_harga']) ? (int)$_GET['max_harga'] : 0;

        echo "<h3>Status Filter Aktif:</h3>";
        echo "Kategori: <b>$kat</b><br>";
        echo "Batas Harga: " . ($max > 0 ? "Rp" . number_format($max, 0, ',', '.') : "Semua Harga") . "<br>";
    }
    ?>

</body>
</html>
