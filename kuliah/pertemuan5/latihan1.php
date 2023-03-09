<?php
// * array

// * create array

$hari = array('senin', 'selasa', 'rabu');
$bulan = ['januari', 'februari', 'maret'];
$myArray = ['rezaa', 19, true];
$animals = ['😸', '🐶', '🐰', '🐻', '🦜'];

// * print array
echo $hari[2];
echo '<hr>';
var_dump($hari);
echo '<br>';
print_r($bulan);
echo '<br>';
var_dump($myArray);
echo '<br>';
print_r($animals);
echo '<hr>';

// * add element to array
$hari[3] = 'kamis';
print_r($hari);
echo '<br>';

$hari[] = 'jumat';
$hari[] = 'sabtu';

print_r($hari);
echo '<hr>';

// * array function
// * array_push

array_push($bulan, 'april', 'may', 'june');
print_r($bulan);
echo '<br>';

// * array_unshift
array_unshift($animals, '🐼', '🐨');
print_r($animals);
echo '<br>';

// * array_pop
array_pop($hari);
print_r($hari);
echo '<hr>';


// * array_shift
array_shift($bulan);
print_r($bulan);
