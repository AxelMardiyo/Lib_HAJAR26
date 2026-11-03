<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cek Resi Pengiriman (Method GET)</title>
</head>
<body>

    <h2>Lacak Status Paket (Method GET)</h2>

    <form action="" method="GET">
        <label>Masukkan Nomor Resi:</label><br>
        <input type="text" name="no_resi" placeholder="Contoh: JNT-12345" required value="<?= isset($_GET['no_resi']) ? htmlspecialchars($_GET['no_resi']) : '' ?>"><br><br>

        <button type="submit">Lacak Paket</button>
    </form>

    <hr>

    <?php
    if (isset($_GET['no_resi']) && !empty(trim($_GET['no_resi']))) {
        $resi = strtoupper(htmlspecialchars(trim($_GET['no_resi'])));

        echo "<h3>Hasil Pelacakan:</h3>";
        echo "Nomor Resi: <b>$resi</b><br>";
        echo "Status: <b>Paket Sedang Dikirim</b><br>";
        echo "Kurir: J&T Express";
    }
    ?>

</body>
</html>
