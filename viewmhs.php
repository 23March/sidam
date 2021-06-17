<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/images/favicon.png" type="image/ico" />

    <title>SIDAM | Sistem Informasi Akademik Data Akademik Mahasiswa</title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assets/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">
  </head>
<?php include('config.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Data Mahasiswa</font></center>

		<hr>
<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['Nim'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$Nim = $_GET['Nim'];

			//query ke database SELECT tabel mahasiswa berdasarkan Nim
			$select = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE Nim='$Nim'") or die(mysqli_error($koneksi));

			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">Data tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>
<center>
        <div class="card" style="width: 40rem;">
    <div class="card-body">
        <h3 class="card-title">
        <?php echo $data['Nama_Mhs'];?><br>
        </h3>
        <h6 class="card-subtitle mb-2 text-muted">
            <?php echo $data['Nim'];?>  
        </h6>
        <p class="card-text">
            Jenis Kelamin : <?php echo $data['Jenis_Kelamin'];?>
        </p>
        <p class="card-text">
            Jurusan : <?php echo $data['Jurusan'];?>
        </p>
        <p class="card-text">
            Program Studi  : <?php echo $data['Program_Studi'];?>
        </p>
        <p class="card-text">
            Tanggal Lahir : <?php echo $data['Tanggal_Lahir'];?>
        </p>
        <p class="card-text">
            Agama : <?php echo $data['Agama'];?> 
        </p>
        <p class="card-text">
            Alamat : <?php echo $data['Alamat'];?>
        </p>
        </center>
    </div>
  <br>
    <center>
    <div>
    <a href="halaman_user.php?page=tampil_mhs" class="btn btn-secondary">Kembali</a>
    <br>
    <br>
    <p> Copyright © SIDAM | Sistem Informasi Akademik Mahasiswa 2021 </p>
    </div>
    </center>
    </div>
    