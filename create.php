<?php
include "koneksi.php";

$nim     = $_POST['nim'];
$nama    = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat  = $_POST['alamat'];
$gambar  = $_FILES['gambar']['name'];

move_uploaded_file($_FILES['gambar']['tmp_name'], "images/" . $gambar);

$simpan = mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('', '$nim','$nama','$jurusan','$alamat','$gambar')");
header("location:index.php?page=read");
?>