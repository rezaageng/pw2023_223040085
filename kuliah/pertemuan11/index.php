<?php
require('functions.php');

$title = 'Home';

$students = query("SELECT * FROM mahasiswa");

require('views/index.view.php');
