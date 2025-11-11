<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Form Pendaftaran Mahasiswa Baru (GET)</title>
</head>
<body>
  <h1>Form Pendaftaran Mahasiswa Baru (GET)</h1>

  <form method="get" action="soal_4proses.php">
    <p>Nama Lengkap: <input type="text" name="nama" required></p>
    <p>Tempat Lahir: <input type="text" name="tempat" required></p>

    <p>
      Tanggal Lahir:
      <select name="tgl" required>
        <option value="">Tgl</option>
        <?php for($i=1;$i<=31;$i++) echo "<option>$i</option>"; ?>
      </select>
      <select name="bln" required>
        <option value="">Bln</option>
        <?php for($i=1;$i<=12;$i++) echo "<option>$i</option>"; ?>
      </select>
      <select name="thn" required>
        <option value="">Thn</option>
        <?php for($i=1980;$i<=2005;$i++) echo "<option>$i</option>"; ?>
      </select>
    </p>

    <p>Alamat Rumah:<br>
      <textarea name="alamat" cols="35" rows="4" required></textarea>
    </p>

    <p>
      Jenis Kelamin:
      <label><input type="radio" name="jk" value="Pria" required> Pria</label>
      <label><input type="radio" name="jk" value="Wanita"> Wanita</label>
    </p>

    <p>Asal Sekolah: <input type="text" name="asal" required></p>
    <p>Nilai UAN: <input type="text" name="uan" required></p>

    <p>
      <input type="submit" value="Submit">
      <input type="reset" value="Reset">
    </p>
  </form>
</body>
</html>
