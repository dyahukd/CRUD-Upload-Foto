<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Learning CRUD</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-pink">
  <a class="navbar-brand text-white font-weight-bold" href="index.php">University of Seoul</a>
  <div class="navbar-nav">
    <a class="nav-link text-white" href="index.php?page=read">Data Mahasiswa</a>
    <a class="nav-link text-white" href="index.php?page=add">Tambah Data</a>
  </div>
</nav>

<div class="container container-box">
  <?php include "pages.php"; ?>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>