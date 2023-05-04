<?php
require('./functions.php');

$title = 'Home';
$students = [
  [
    'name' => 'Reza',
    'npm' => '223040085',
    'email' => 'reza.223040084@mail.unpas.ac.id',
  ],
  [
    'name' => 'Azhar',
    'npm' => '223040077',
    'email' => 'azhar.223040077@mail.unpas.ac.id',
  ],

];

// dd($_SERVER['REQUEST_URI']);

require('./views/index.view.php');
