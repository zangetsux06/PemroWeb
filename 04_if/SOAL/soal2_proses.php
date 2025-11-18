<html>
<head>
    <title>Menghitung Upah Mingguan</title>
</head>
<body>
<h1>Hasil Perhitungan Upah Mingguan</h1>

<?php

$jam = $_POST['jamkerja'];

$upahNormal = 2000;
$upahLembur = 3000;

if ($jam > 48)
{
    $jamLembur = $jam - 48;
    $jamNormal = 48;

    $totalUpah = ($jamNormal * $upahNormal) + ($jamLembur * $upahLembur);

    echo "<p>Jam kerja normal : ".$jamNormal." jam</p>";
    echo "<p>Jam lembur : ".$jamLembur." jam</p>";
    echo "<p>Total upah yang diterima : Rp ".$totalUpah.",-</p>";
}
else
{
    $totalUpah = $jam * $upahNormal;

    echo "<p>Jam kerja : ".$jam." jam</p>";
    echo "<p>Tidak ada lembur.</p>";
    echo "<p>Total upah yang diterima : Rp ".$totalUpah.",-</p>";
}

?>

</body>
</html>
