<?php
$first = "reza";
$last = "trihandoko";

for ($i = 1; $i <= 100; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) {
    echo "$first $last <br>";
  } else if ($i % 3 == 0) {
    echo $first . "<br>";
  } else if ($i % 5 == 0) {
    echo $last . "<br>";
  } else {
    echo $i . "<br>";
  }
}
