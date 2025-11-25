<?php
// Mencari semua pasangan (x, y, z) bilangan asli
// yang memenuhi x + y + z = 25

$jumlah = 0;

for ($x = 1; $x <= 23; $x++)      // minimal 1, maksimal 23 (karena y dan z minimal 1)
{
    for ($y = 1; $y <= 23; $y++)
    {
        for ($z = 1; $z <= 23; $z++)
        {
            if ($x + $y + $z == 25)
            {
                echo "x = ".$x.", y = ".$y.", z = ".$z."<br />";
                $jumlah = $jumlah + 1;
            }
        }
    }
}

echo "<br />Jumlah penyelesaian : ".$jumlah;
?>
