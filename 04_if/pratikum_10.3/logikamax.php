<?php
$bil1 = 6;
$bil2 = 9;
$bil3 = 10;

// cari max antara bil1 dan bil2
if ($bil1 > $bil2) {
    $max = $bil1;
} else {
    $max = $bil2;
}

// bandingkan max dengan bil3
if ($bil3 > $max) {
    $maxSemua = $bil3;
} else {
    $maxSemua = $max;
}

echo "Nilai terbesar dari ketiga bilangan adalah: " . $maxSemua;
?>
