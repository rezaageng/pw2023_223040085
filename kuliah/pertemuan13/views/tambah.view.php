<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Tambah Data Mahasiswa</h1>

  <div class="row">
    <div class="col-md-8">
      <form action="" method="post">
        <div class="mb-3 w-25">
          <label for="nim" class="form-label">NIM</label>
          <input type="text" class="form-control" name="nim" id="nim" maxlength="9" autofocus required>
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="mb-3">
          <label for="jurusan" class="form-label">Jurusan</label>
          <input type="text" class="form-control" name="jurusan" id="jurusan">
        </div>
        <div class="mb-3">
          <label for="gambar" class="form-label">Gambar</label>
          <input type="text" class="form-control" name="gambar" id="gambar">
        </div>
        <button class="btn btn-primary" type="submit" name="tambah">Tambah Data</button>
      </form>
    </div>
  </div>

</div>

<?php require('partials/footer.php'); ?>