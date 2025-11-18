<html>
<head>
    <title>Cek Tahun Kabisat</title>
</head>
<body>
<h1>Menentukan Tahun Kabisat</h1>

<?php

$tahun = $_POST['tahun'];

echo "<p>Tahun yang dicek : ".$tahun."</p>";

if (($tahun % 400 == 0) || (($tahun % 4 == 0) && ($tahun % 100 != 0)))
    echo "<p>".$tahun." adalah tahun kabisat</p>";
else
    echo "<p>".$tahun." bukan tahun kabisat</p>";

?>

</body>
</html>
