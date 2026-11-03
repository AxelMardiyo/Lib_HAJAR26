<?php
// Kasus: Mengecek apakah berat muatan lift melebihi kapasitas maksimal
$kapasitas_maksimal = 650; // kg
$total_berat_penumpang = 580; // kg

echo "Kapasitas Maksimal: $kapasitas_maksimal kg<br>";
echo "Total Muatan Sekarang: $total_berat_penumpang kg<br>";

echo "Apakah muatan masih aman (tidak melebihi kapasitas)? ";
var_dump($total_berat_penumpang <= $kapasitas_maksimal);

echo "<br>Apakah lift overload? ";
var_dump($total_berat_penumpang > $kapasitas_maksimal);

echo "<br>Apakah kapasitas terisi penuh persis? ";
var_dump($total_berat_penumpang == $kapasitas_maksimal);
?>

