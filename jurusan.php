<!DOCTYPE html>
<html>
<head>
	<title>SIDAM | Data Jurusan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");

	}
    require_once 'header.php';
    require_once 'koneksi.php';
	?>
  <button type="button" class="btn btn-outline-primary" href="users.php" >Kembali</button>
  <button type="button" class="btn btn-outline-primary" href="prodi.php" >Selanjutnya</button>
  <button type="submit" class="btn btn-primary">Simpan</button>
</html>
<br>
<?php require_once 'footer.php';?>
