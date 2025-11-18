<html>
<head>
    <title>Menghitung Upah Mingguan (Golongan)</title>
</head>
<body>
<h1>Hasil Perhitungan Upah Mingguan (Golongan)</h1>

<?php

$jam      = $_POST['jamkerja'];
$golongan = $_POST['golongan'];

// menentukan upah per jam berdasarkan golongan
if ($golongan == "A")
    $upahPerJam = 4000;
else
    if ($golongan == "B")
        $upahPerJam = 5000;
    else
        if ($golongan == "C")
            $upahPerJam = 6000;
        else
            $upahPerJam = 7500;   // golongan D

$upahLembur = 3000;

if ($jam > 48)
{
    $jamLembur = $jam - 48;
    $jamNormal = 48;

    $totalUpah = ($jamNormal * $upahPerJam) + ($jamLembur * $upahLembur);

    echo "<p>Golongan : ".$golongan."</p>";
    echo "<p>Jam kerja normal : ".$jamNormal." jam</p>";
    echo "<p>Jam lembur : ".$jamLembur." jam</p>";
    echo "<p>Total upah yang diterima : Rp ".$totalUpah.",-</p>";
}
else
{
    $totalUpah = $jam * $upahPerJam;

    echo "<p>Golongan : ".$golongan."</p>";
    echo "<p>Jam kerja : ".$jam." jam</p>";
    echo "<p>Tidak ada lembur.</p>";
    echo "<p>Total upah yang diterima : Rp ".$totalUpah.",-</p>";
}

?>

</body>
</html>
