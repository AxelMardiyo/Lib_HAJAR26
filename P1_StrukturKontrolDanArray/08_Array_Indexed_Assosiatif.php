<?php
// Array Indexed (Daftar software yang terinstall)
$software = ["Visual Studio Code", "XAMPP", "Chrome"];
echo "Software utama: " . $software[0] . "<br>";

// Array Assosiatif (Data spesifikasi laptop dengan nama kunci)
$laptop = [
    "merk" => "Lenovo Thinkpad",
    "ram" => "16GB",
    "storage" => "512GB SSD"
];
echo "Spesifikasi: " . $laptop["merk"] . " dengan RAM " . $laptop["ram"];
?>