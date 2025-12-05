<h4 class="mb-3">Tambah Data Mahasiswa</h4>
<form action="create.php" method="post" enctype="multipart/form-data">

<input type="text" name="nim" class="form-control mb-2" placeholder="NIM" required>
<input type="text" name="nama" class="form-control mb-2" placeholder="Nama" required>
<input type="text" name="jurusan" class="form-control mb-2" placeholder="Jurusan" required>
<textarea name="alamat" class="form-control mb-2" placeholder="Alamat"></textarea>

<label>Foto</label>
<input type="file" name="gambar" class="form-control mb-3">

<button type="submit" class="btn btn-pink">Simpan</button>
</form>