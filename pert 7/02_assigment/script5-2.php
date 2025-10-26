<html>
<head>
    <title>Menghitung Gaji Bersih Karyawan</title>
</head>
<body>
    <h1>Menghitung Gaji Bersih Karyawan</h1>
    <?php
    // Script ini akan menghitung gaji bersih karyawan yang dirumuskan dengan
    // Gaji Bersih = Gaji Pokok + Tunjangan - Pajak
    // Misalkan gaji pokoknya Rp. 1.000.000,-, tunjangan Rp. 500.000,-
    // dan pajaknya 15% dari gaji kotor (gaji pokok + tunjangan)
    // Berikut ini beberapa cara pembuatan script yang menghasilkan output sama.

    // CARA KE 1
    $gajiPokok = 1000000;   // gaji pokok
    $tunjangan = 500000;    // tunjangan
    $gajiKotor = $gajiPokok + $tunjangan; // hitung gaji kotor
    $pajak = 0.15 * $gajiKotor; // hitung pajak
    $gajiBersih = $gajiKotor - $pajak; // hitung gaji bersih
    echo "<p>Gaji bersih karyawan adalah Rp. " . $gajiBersih . "</p>"; // tampilkan hasil

    // CARA KE 2
    $gajiPokok = 1000000;   // gaji pokok
    $tunjangan = 500000;    // tunjangan
    $gajiKotor = $gajiPokok + $tunjangan; // hitung gaji kotor
    $gajiBersih = $gajiKotor - (0.15 * $gajiKotor); // hitung gaji bersih
    echo "<p>Gaji bersih karyawan adalah Rp. " . $gajiBersih . "</p>"; // tampilkan hasil

    // CARA KE 3
    $gajiPokok = 1000000;   // gaji pokok
    $tunjangan = 500000;    // tunjangan
    $gajiBersih = $gajiPokok + $tunjangan - 0.15 * ($gajiPokok + $tunjangan); // langsung hitung gaji bersih
    echo "<p>Gaji bersih karyawan adalah Rp. " . $gajiBersih . "</p>"; // tampilkan hasil
    ?>
</body>
</html>
