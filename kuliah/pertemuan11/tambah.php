<?php
require('functions.php');

$title = 'Form Tambah Data Mahasiswa';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "<script>
            alert('Data gagal ditambahkan!');
            document.location.href = 'index.php';
          </script>";
  }
}


require('views/tambah.view.php');
