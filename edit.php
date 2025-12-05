<?php
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE id='$id'"));
?>

<h4 class="mb-3">Edit Data Mahasiswa</h4>

<form action="update.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?= $data['id']; ?>">

<input type="text" name="nim" class="form-control mb-2" value="<?= $data['nim']; ?>">
<input type="text" name="nama" class="form-control mb-2" value="<?= $data['nama']; ?>">
<input type="text" name="jurusan" class="form-control mb-2" value="<?= $data['jurusan']; ?>">
<textarea name="alamat" class="form-control mb-2"><?= $data['alamat']; ?></textarea>

<img src="images/<?= $data['gambar']; ?>" class="foto mb-2">
<input type="file" name="gambar" class="form-control mb-3">

<button class="btn btn-pink">Update</button>
</form>