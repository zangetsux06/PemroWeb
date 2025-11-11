<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Hasil Perhitungan Saldo Akhir</title>
</head>
<body>
    <h1>Hasil Perhitungan Saldo Akhir</h1>
    <?php
 

    $saldoAwal = $_POST['saldoAwal'];
    $bungaPersen = $_POST['bunga'];
    $bulan = $_POST['bulan'];

    // konversi persen ke desimal
    $bunga = $bungaPersen / 100;

    // perhitungan bunga majemuk
    $saldoAkhir = $saldoAwal * pow((1 + $bunga), $bulan);

    // menampilkan hasil
    echo "<p>Saldo awal: Rp " . number_format($saldoAwal, 2, ',', '.') . "</p>";
    echo "<p>Bunga per bulan: " . $bungaPersen . "%</p>";
    echo "<p>Lama waktu: " . $bulan . " bulan</p>";
    echo "<h3>Saldo akhir setelah $bulan bulan adalah: Rp " . number_format($saldoAkhir, 2, ',', '.') . "</h3>";
    ?>
</body>
</html>
