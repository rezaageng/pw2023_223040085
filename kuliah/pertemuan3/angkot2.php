<?php
$angkot = 1;
$jlh_angkot = 10;
$angkot_rusak = 4;

while ($angkot <= $jlh_angkot - $angkot_rusak) {
  echo "Angkot No. $angkot beroperasi dengan baik <br>";
  $angkot++;
}

for ($angkot; $angkot <= $jlh_angkot; $angkot++) {
  echo "Angkot No. $angkot sedang rusak <br>";
}
