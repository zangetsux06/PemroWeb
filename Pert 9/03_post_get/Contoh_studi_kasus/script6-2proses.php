<!DOCTYPE html>
<html lang="id">
<head><meta charset="utf-8"><title>Menghitung Komisi Salesman</title></head>
<body>
<h1>Menghitung Komisi Salesman</h1>
<?php
$nilaiJual    = $_POST['penjualan'];
$prosenKomisi = $_POST['komisi'];
$komisi       = $nilaiJual * $prosenKomisi / 100;

echo "<p>Nilai penjualan salesman adalah: Rp. $nilaiJual.</p>";
echo "<p>Prosentase Komisi: $prosenKomisi%.</p>";
echo "<p>Komisi yang didapat salesman adalah: Rp. $komisi.</p>";
?>
</body>
</html>
