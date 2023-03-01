<?php
$rLuas = 7;
$rKeliling = 30;

function hitungLuasLingkaran($r)
{
  return 3.14 * $r * $r;
}

function hitungKelilingLingkaran($r)
{
  return 2 * 3.14 * $r;
}

echo "<h4>Menghitung Luas Lingkaran</h4><br>";
echo "Jari-jari = $rLuas<br>";
echo "Luas Lingkaran = " . hitungLuasLingkaran($rLuas) . "<br>";
echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4><br>";
echo "Jari-jari = $rKeliling<br>";
echo "Keliling Lingkaran = " . hitungKelilingLingkaran($rKeliling) . "<br>";
echo "<hr>";
