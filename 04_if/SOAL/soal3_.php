<html>
<head>
    <title>Menghitung Upah Mingguan (Golongan)</title>
</head>
<body>
<h1>Menghitung Upah Mingguan Karyawan (Dengan Golongan)</h1>

<form method="post" action="soal3_proses.php">
    Masukkan jumlah jam kerja per minggu :
    <input type="text" name="jamkerja"><br /><br />

    Pilih golongan karyawan :
    <select name="golongan">
        <option value="A">Golongan A</option>
        <option value="B">Golongan B</option>
        <option value="C">Golongan C</option>
        <option value="D">Golongan D</option>
    </select>
    <br /><br />

    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">
</form>

</body>
</html>
