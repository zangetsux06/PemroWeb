<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Menghitung Saldo Akhir Tabungan</title>
</head>
<body>
    <h1>Menghitung Saldo Akhir Tabungan</h1>
    <form method="post" action="soal_1proses.php">
        <label>Masukkan Saldo Awal (Rp): </label>
        <input type="number" name="saldoAwal" required>
        <br><br>

        <label>Masukkan Bunga per Bulan (%): </label>
        <input type="number" step="0.01" name="bunga" required>
        <br><br>

        <label>Lama Waktu (bulan): </label>
        <input type="number" name="bulan" required>
        <br><br>

        <input type="submit" value="Hitung">
        <input type="reset" value="Reset">
    </form>
</body>
</html>
