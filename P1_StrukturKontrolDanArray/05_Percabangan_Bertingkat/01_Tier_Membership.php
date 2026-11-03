<?php
// Kasus: Menentukan status membership berdasarkan total poin loyalitas
$poin_user = 1250;

if ($poin_user >= 2000) {
    echo "Tier Anda: Platinum (Diskon 30%)";
} elseif ($poin_user >= 1000) {
    echo "Tier Anda: Gold (Diskon 15%)";
} elseif ($poin_user >= 500) {
    echo "Tier Anda: Silver (Diskon 5%)";
} else {
    echo "Tier Anda: Bronze (Tidak ada diskon)";
}
?>