<?php
$saldoAwal = 1000000;  // saldo awal nasabah
$bunga = 0.0025;       // bunga 0,25% per bulan
$bulan = 11;           // lama waktu dalam bulan

// perhitungan saldo akhir (bunga majemuk)
$saldoAkhir = $saldoAwal * pow((1 + $bunga), $bulan);

echo "Saldo akhir setelah " . $bulan . " bulan adalah : Rp. " . number_format($saldoAkhir, 2, ',', '.') . ",-";
?>
