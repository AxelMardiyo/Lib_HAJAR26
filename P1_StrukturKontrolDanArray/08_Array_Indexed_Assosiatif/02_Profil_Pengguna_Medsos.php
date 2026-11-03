<?php
// Array Indexed: Daftar minat/hobi pengguna
$hobi = ["Coding", "Desain Grafis", "Gaming", "Fotografi"];

// Array Assosiatif: Profil akun pengguna media sosial
$profil_user = [
    "username" => "@alex_dev",
    "nama_lengkap" => "Alex Pratama",
    "email" => "alex@example.com",
    "pengikut" => 1420,
    "is_verified" => true
];

echo "<h3>Profil Pengguna</h3>";
echo "Nama: " . $profil_user["nama_lengkap"] . " (" . $profil_user["username"] . ")<br>";
echo "Email: " . $profil_user["email"] . "<br>";
echo "Jumlah Pengikut: " . $profil_user["pengikut"] . "<br>";
echo "Status Akun: " . ($profil_user["is_verified"] ? "Centang Biru (Terverifikasi)" : "Reguler") . "<br>";

echo "<br><b>Hobi Utama:</b> " . $hobi[0] . "<br>";
echo "<b>Hobi Lainnya:</b> " . $hobi[1] . ", " . $hobi[2];
?>

