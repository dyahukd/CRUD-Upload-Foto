<?php include "paging.php"; ?>
<h4 class="mb-3">Data Mahasiswa</h4>

<table class="table table-bordered text-center">
<thead>
<tr>
    <th>No</th><th>NIM</th><th>Nama</th><th>Jurusan</th><th>Alamat</th><th>Foto</th><th>Aksi</th>
</tr>
</thead>

<?php
$no = $posisi + 1;
while ($data = mysqli_fetch_assoc($query)) { ?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $data['nim']; ?></td>
    <td><?= $data['nama']; ?></td>
    <td><?= $data['jurusan']; ?></td>
    <td><?= nl2br($data['alamat']); ?></td>
    <td><img src="images/<?= $data['gambar']; ?>" class="foto" onerror="this.src='images/profile2.jpeg'"></td>
    <td>
        <a href="index.php?page=edit&id=<?= $data['id']; ?>" class="btn btn-sm btn-pink">Edit</a>
        <a onclick="return confirm('Yakin hapus data?')" href="delete.php?id=<?= $data['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
    </td>
</tr>
<?php } ?>
</table>

<?= $pagination; ?>