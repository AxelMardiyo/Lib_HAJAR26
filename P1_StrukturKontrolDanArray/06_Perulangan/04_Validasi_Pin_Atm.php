<?php
// Kasus: Simulasi percobaan memasukkan PIN ATM dengan perulangan DO-WHILE
// Kode di dalam blok do pasti dijalankan minimal satu kali
$pin_benar = "123456";
$percobaan = 1;
$maksimal_percobaan = 3;

do {
    // Simulasi PIN yang diinput pada setiap percobaan
    $pin_input = ($percobaan == 3) ? "123456" : "999999";

    echo "Percobaan ke-$percobaan memasukkan PIN...<br>";

    if ($pin_input === $pin_benar) {
        echo "<b style='color:green'>PIN Benar! Akses rekening dibuka.</b><br>";
        break;
    } else {
        echo "<span style='color:red'>PIN Salah!</span><br>";
    }

    $percobaan++;
} while ($percobaan <= $maksimal_percobaan);

if ($percobaan > $maksimal_percobaan && $pin_input !== $pin_benar) {
    echo "<b style='color:red'>Kartu ATM diblokir karena salah memasukkan PIN 3 kali!</b>";
}
?>

