<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pemesanan Minuman Kafe</title>
</head>
<body>

    <h2>Pemesanan Minuman Kafe</h2>

    <form action="" method="POST">
        <!-- Select -->
        <label>Pilih Minuman:</label><br>
        <select name="minuman" required>
            <option value="Kopi Susu Gula Aren">Kopi Susu Gula Aren (Rp18.000)</option>
            <option value="Caramel Latte">Caramel Latte (Rp24.000)</option>
            <option value="Matcha Ice Blend">Matcha Ice Blend (Rp22.000)</option>
            <option value="Lemon Tea">Lemon Tea (Rp15.000)</option>
        </select><br><br>

        <!-- Number dengan value default, min, max -->
        <label>Jumlah Porsi:</label><br>
        <input type="number" name="jumlah" min="1" max="10" value="1" required><br><br>

        <!-- Checkbox -->
        <label>Topping Tambahan:</label><br>
        <input type="checkbox" name="topping[]" value="Boba Pearl"> Boba Pearl<br>
        <input type="checkbox" name="topping[]" value="Grass Jelly"> Grass Jelly<br>
        <input type="checkbox" name="topping[]" value="Whipped Cream"> Whipped Cream<br><br>

        <!-- Textarea -->
        <label>Catatan Pesanan:</label><br>
        <textarea name="catatan" rows="2" cols="40" placeholder="Contoh: Less ice, normal sugar"></textarea><br><br>

        <button type="submit" name="pesan_sekarang">Pesan Sekarang</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['pesan_sekarang'])) {
        $minuman = htmlspecialchars($_POST['minuman']);
        $jumlah = (int)$_POST['jumlah'];
        $topping = isset($_POST['topping']) ? $_POST['topping'] : [];
        $catatan = !empty($_POST['catatan']) ? htmlspecialchars($_POST['catatan']) : "-";

        echo "<h3>Struk Ringkasan Pesanan:</h3>";
        echo "Menu: <b>$minuman</b> ($jumlah porsi)<br>";
        echo "Topping: " . (!empty($topping) ? htmlspecialchars(implode(", ", $topping)) : "Tanpa topping") . "<br>";
        echo "Catatan: <i>$catatan</i>";
    }
    ?>

</body>
</html>
