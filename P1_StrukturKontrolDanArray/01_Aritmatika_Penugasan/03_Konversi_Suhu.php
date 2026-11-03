<?php
// Kasus: Konversi suhu dari Celcius ke Fahrenheit, Reamur, dan Kelvin
$celcius = 30;

// Operator Aritmatika perkalian, pembagian, penjumlahan
$fahrenheit = ($celcius * 9 / 5) + 32;
$reamur = $celcius * 4 / 5;
$kelvin = $celcius + 273.15;

echo "Suhu Awal: " . $celcius . " &deg;C<br>";
echo "Dalam Fahrenheit: " . $fahrenheit . " &deg;F<br>";
echo "Dalam Reamur: " . $reamur . " &deg;R<br>";
echo "Dalam Kelvin: " . $kelvin . " K";
?>

