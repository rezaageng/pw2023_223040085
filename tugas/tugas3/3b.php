<?php
function urutanAngka($number)
{
  $currNumber = 1;
  for ($i = 1; $i <= $number; $i++) {
    for ($j = 1; $j <= $i; $j++) {
      echo  $currNumber++ . " ";
    }
    echo "<br>";
  }
}

urutanAngka(7);
