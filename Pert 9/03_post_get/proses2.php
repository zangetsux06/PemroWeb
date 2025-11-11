<?php
$bilangan1 = $_POST['bil1'];
$bilangan2 = $_POST['bil2'];
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="utf-8"><title>Contoh Request POST</title></head>
<body>
  <h1>Input dua bilangan</h1>
  <?php
    echo "<p>Anda telah memasukkan bilangan pertama = $bilangan1.</p>";
    echo "<p>Anda telah memasukkan bilangan kedua = $bilangan2.</p>";
  ?>
</body>
</html>
