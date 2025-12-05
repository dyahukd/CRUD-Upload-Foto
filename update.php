<?php
include "koneksi.php";

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

if (!empty($_FILES['gambar']['name'])) {
    $gambar = $_FILES['gambar']['name'];
    move_uploaded_file($_FILES['gambar']['tmp_name'], "images/".$gambar);
    $sql = "UPDATE mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan', alamat='$alamat', gambar='$gambar' WHERE id='$id'";
} else {
    $sql = "UPDATE mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan', alamat='$alamat' WHERE id='$id'";
}

mysqli_query($koneksi,$sql);
header("location:index.php?page=read");
?>