<?php
$batas = 5;
$halaman = isset($_GET['halaman']) ? $_GET['halaman'] : 1;
$posisi = ($halaman - 1) * $batas;

$tampil = mysqli_query($koneksi, "SELECT * FROM mahasiswa LIMIT $posisi,$batas");
$query  = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
$jml    = mysqli_num_rows($query);
$jmlhal = ceil($jml / $batas);

$pagination = '<nav><ul class="pagination">';
for ($i = 1; $i <= $jmlhal; $i++) {
    $pagination .= "<li class='page-item'><a class='page-link' href='?page=read&halaman=$i'>$i</a></li>";
}
$pagination .= "</ul></nav>";
?>