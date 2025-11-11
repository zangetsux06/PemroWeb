<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Data Pendaftaran</title>
</head>
<body>
<?php
// ambil data POST + sanitasi sederhana
$nama   = htmlspecialchars($_POST['nama'] ?? '');
$tempat = htmlspecialchars($_POST['tempat'] ?? '');
$tgl    = htmlspecialchars($_POST['tgl'] ?? '');
$bln    = htmlspecialchars($_POST['bln'] ?? '');
$thn    = htmlspecialchars($_POST['thn'] ?? '');
$alamat = nl2br(htmlspecialchars($_POST['alamat'] ?? ''));
$jk     = htmlspecialchars($_POST['jk'] ?? '');
$asal   = htmlspecialchars($_POST['asal'] ?? '');
$uan    = htmlspecialchars($_POST['uan'] ?? '');

echo "<p>Terimakasih <b>$nama</b> sudah mengisi form pendaftaran.</p>";

echo "<pre style='font-family:inherit'>
Nama Lengkap   : $nama
Tempat Lahir   : $tempat
Tanggal Lahir  : $tgl-$bln-$thn
Alamat Rumah   : $alamat
Jenis Kelamin  : $jk
Asal Sekolah   : $asal
Nilai UAN      : $uan
</pre>";
?>
</body>
</html>
