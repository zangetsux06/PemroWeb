<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Data Pendaftaran (GET)</title>
</head>
<body>
<?php
// ambil data dari GET
$nama   = htmlspecialchars($_GET['nama'] ?? '');
$tempat = htmlspecialchars($_GET['tempat'] ?? '');
$tgl    = htmlspecialchars($_GET['tgl'] ?? '');
$bln    = htmlspecialchars($_GET['bln'] ?? '');
$thn    = htmlspecialchars($_GET['thn'] ?? '');
$alamat = nl2br(htmlspecialchars($_GET['alamat'] ?? ''));
$jk     = htmlspecialchars($_GET['jk'] ?? '');
$asal   = htmlspecialchars($_GET['asal'] ?? '');
$uan    = htmlspecialchars($_GET['uan'] ?? '');

echo "<p>Terimakasih <b>$nama</b> sudah mengisi form pendaftaran (GET).</p>";

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
