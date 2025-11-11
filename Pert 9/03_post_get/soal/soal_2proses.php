<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Hasil Pecahan Uang</title>
</head>
<body>
    <h1>Hasil Pecahan Uang</h1>
    <?php
    /*
    Script ini menerima input jumlah uang dari form,
    lalu menghitung banyaknya pecahan:
    Rp 100.000, Rp 50.000, Rp 20.000, Rp 5.000, Rp 100, dan Rp 50
    */

    $jumlahUang = $_POST['jumlahUang'];

    // menghitung jumlah pecahan
    $a = intdiv($jumlahUang, 100000);
    $sisa = $jumlahUang % 100000;

    $b = intdiv($sisa, 50000);
    $sisa = $sisa % 50000;

    $c = intdiv($sisa, 20000);
    $sisa = $sisa % 20000;

    $d = intdiv($sisa, 5000);
    $sisa = $sisa % 5000;

    $e = intdiv($sisa, 100);
    $sisa = $sisa % 100;

    $f = intdiv($sisa, 50);

    // menampilkan hasil
    echo "<p>Jumlah uang yang dimasukkan: Rp " . number_format($jumlahUang, 0, ',', '.') . "</p>";
    echo "Jumlah Rp. 100.000 : " . $a . "<br />";
    echo "Jumlah Rp. 50.000 : " . $b . "<br />";
    echo "Jumlah Rp. 20.000 : " . $c . "<br />";
    echo "Jumlah Rp. 5.000 : " . $d . "<br />";
    echo "Jumlah Rp. 100 : " . $e . "<br />";
    echo "Jumlah Rp. 50 : " . $f . "<br />";
    ?>
</body>
</html>
