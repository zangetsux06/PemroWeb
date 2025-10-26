<html>
<head>
    <title>Menghitung selisih dua buah waktu</title>
</head>
<body>
    <h1>Menghitung selisih dua buah waktu</h1>
    <?php
    /*
    Script ini akan mencari selisih antara waktu 10:34:45 dengan 12:25:31.
    Hasil selisih waktu dinyatakan dalam detik.
    */

    $jam1 = 10;
    $menit1 = 34;
    $detik1 = 45;

    $jam2 = 12;
    $menit2 = 25;
    $detik2 = 31;

    // menghitung total detik untuk waktu pertama
    $totalDetik1 = $jam1 * 3600 + $menit1 * 60 + $detik1;

    // menghitung total detik untuk waktu kedua
    $totalDetik2 = $jam2 * 3600 + $menit2 * 60 + $detik2;

    // menghitung selisih total detik dari kedua waktu
    $selisih = $totalDetik2 - $totalDetik1;

    echo "<p>Selisih dari kedua waktu adalah " . $selisih . " detik</p>";
    ?>
</body>
</html>
