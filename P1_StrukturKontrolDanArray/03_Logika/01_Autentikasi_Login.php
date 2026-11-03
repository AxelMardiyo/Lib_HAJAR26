<?php
// Kasus: Siswa hanya bisa login jika username benar DAN password benar
$input_username = "admin";
$input_password = "123";

$db_username = "admin";
$db_password = "123";

$cek_username = ($input_username == $db_username);
$cek_password = ($input_password == $db_password);

// Operator AND (&&) - Keduanya harus true
$login_berhasil = $cek_username && $cek_password;

echo "Status Login: ";
var_dump($login_berhasil);
?>