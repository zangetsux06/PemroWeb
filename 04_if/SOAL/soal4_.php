<html>
<head>
    <title>Jumlah Hari dalam Bulan</title>
</head>
<body>
<h1>Menentukan Jumlah Hari dalam Bulan Ini</h1>

<?php

$bulan = date("n");   // angka bulan 1–12

switch ($bulan)
{
    case 1 :
        $jumlahHari = 31;
        break;
    case 2 :
        // tahun kabisat mempengaruhi februari
        $tahun = date("Y");
        if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0))
            $jumlahHari = 29;
        else
            $jumlahHari = 28;
        break;
    case 3 :
        $jumlahHari = 31;
        break;
    case 4 :
        $jumlahHari = 30;
        break;
    case 5 :
        $jumlahHari = 31;
        break;
    case 6 :
        $jumlahHari = 30;
        break;
    case 7 :
        $jumlahHari = 31;
        break;
    case 8 :
        $jumlahHari = 31;
        break;
    case 9 :
        $jumlahHari = 30;
        break;
    case 10 :
        $jumlahHari = 31;
        break;
    case 11 :
        $jumlahHari = 30;
        break;
    case 12 :
        $jumlahHari = 31;
        break;
}

echo "<p>Bulan sekarang adalah bulan ke-".$bulan."</p>";
echo "<p>Jumlah hari pada bulan ini adalah : ".$jumlahHari." hari</p>";

?>

</body>
</html>
