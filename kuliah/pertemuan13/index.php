<?php
require('functions.php');

$title = 'Home';

if (isset($_GET['keyword'])) {
  $keyword = $_GET['keyword'];
  $students = query("SELECT * FROM mahasiswa WHERE 
                      nama LIKE '%$keyword%' OR
                      nim LIKE '%$keyword%' OR
                      email LIKE '%$keyword%' OR
                      jurusan LIKE '%$keyword%'");
} else {
  $students = query("SELECT * FROM mahasiswa");
}



require('views/index.view.php');
