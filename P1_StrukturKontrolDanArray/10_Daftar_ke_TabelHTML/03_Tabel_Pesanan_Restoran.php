<?php
// Kasus: Rekap pesanan restoran dengan status pembayaran dan perhitungan pajak otomatis
$pesanan = [
    ["id" => "ORD-101", "meja" => "Meja 03", "menu" => "Nasi Goreng Spesial", "porsi" => 2, "harga" => 28000, "lunas" => true],
    ["id" => "ORD-102", "meja" => "Meja 07", "menu" => "Ayam Bakar Madu", "porsi" => 1, "harga" => 35000, "lunas" => false],
    ["id" => "ORD-103", "meja" => "Meja 02", "menu" => "Mie Goreng Seafood", "porsi" => 3, "harga" => 30000, "lunas" => true],
    ["id" => "ORD-104", "meja" => "Meja 05", "menu" => "Es Teh Manis Jumbo", "porsi" => 4, "harga" => 8000, "lunas" => true],
    ["id" => "ORD-105", "meja" => "Meja 01", "menu" => "Sate Ayam (10 Tusuk)", "porsi" => 2, "harga" => 25000, "lunas" => false]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Rekap Pesanan Restoran Rasa Nusantara</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 30px;">

    <h2>Daftar Pesanan Meja Restoran</h2>

    <table border="1" cellpadding="8" cellspacing="0" style="border-collapse: collapse; width: 100%;">
        <tr bgcolor="#d97706" style="color: white;">
            <th>ID Pesanan</th>
            <th>No Meja</th>
            <th>Menu Pesanan</th>
            <th>Harga Satuan</th>
            <th>Jumlah (Porsi)</th>
            <th>Subtotal</th>
            <th>Status Pembayaran</th>
        </tr>

        <?php 
        $grand_total = 0;
        foreach ($pesanan as $order) { 
            $subtotal = $order["harga"] * $order["porsi"];
            $grand_total += $subtotal;
        ?>
            <tr>
                <td align="center"><b><?= $order["id"] ?></b></td>
                <td align="center"><?= $order["meja"] ?></td>
                <td><?= $order["menu"] ?></td>
                <td align="right">Rp<?= number_format($order["harga"], 0, ',', '.') ?></td>
                <td align="center"><?= $order["porsi"] ?></td>
                <td align="right">Rp<?= number_format($subtotal, 0, ',', '.') ?></td>
                <td align="center">
                    <?php if ($order["lunas"]) { ?>
                        <span style="color: #16a34a; font-weight: bold;">LUNAS</span>
                    <?php } else { ?>
                        <span style="color: #dc2626; font-weight: bold;">BELUM DIBAYAR</span>
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>

        <tr bgcolor="#fef3c7" style="font-weight: bold;">
            <td colspan="5" align="right">Total Penjualan:</td>
            <td align="right">Rp<?= number_format($grand_total, 0, ',', '.') ?></td>
            <td></td>
        </tr>
    </table>

</body>
</html>

