<!DOCTYPE html>
<html lang="id">
<head><meta charset="utf-8"><title>Menghitung Selisih Dua Waktu</title></head>
<body>
<h1>Menghitung Selisih Dua Waktu</h1>
<?php
$jam1   = $_POST['jam1'];   $menit1 = $_POST['menit1'];   $detik1 = $_POST['detik1'];
$jam2   = $_POST['jam2'];   $menit2 = $_POST['menit2'];   $detik2 = $_POST['detik2'];

$totalDetik1 = 3600 * $jam1 + 60 * $menit1 + $detik1;
$totalDetik2 = 3600 * $jam2 + 60 * $menit2 + $detik2;

$selisih = abs($totalDetik1 - $totalDetik2);
echo "<p>Selisih dari kedua waktu adalah : $selisih detik</p>";
?>
</body>
</html>
