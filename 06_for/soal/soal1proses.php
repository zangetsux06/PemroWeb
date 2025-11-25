<html>
<head>
    <title>Hasil Perhitungan Saldo Akhir</title>
</head>
<body>
<h1>Hasil Perhitungan Saldo Akhir Tabungan</h1>

<?php

$saldo = $_POST['saldo'];
$bulan = $_POST['bulan'];

echo "<p>Saldo awal : Rp ".$saldo."</p>";
echo "<p>Lama menabung : ".$bulan." bulan</p><br />";

for ($i = 1; $i <= $bulan; $i++)
{
    // tentukan bunga berdasarkan saldo terakhir
    if ($saldo < 1100000)
        $bunga = 0.03;       // 3%
    else
        $bunga = 0.04;       // 4%

    // hitung saldo setelah bunga bulan ini
    $saldo = $saldo + ($saldo * $bunga);

    // kurangi biaya admin 9000
    $saldo = $saldo - 9000;

    echo "Saldo pada akhir bulan ke-".$i." adalah Rp ".number_format($saldo, 0, ',', '.')."<br />";
}

echo "<h3>Saldo akhir setelah ".$bulan." bulan adalah : Rp ".number_format($saldo, 0, ',', '.')."</h3>";

?>

</body>
</html>
