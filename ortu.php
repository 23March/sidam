<?php include('config.php'); ?>

	<div class="container" style="margin-top:20px">
		<center><font size="6">Data Orang Tua</font></center>
	<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['Nim'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$Nim = $_GET['Nim'];

			//query ke database SELECT tabel mahasiswa berdasarkan Nim
			$select = mysqli_query($koneksi, "SELECT * FROM ortu WHERE Nim='$_SESSION[username]'") or die(mysqli_error($koneksi));

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

	<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$Nama_Ayah		= $_POST['Nama_Ayah'];
			$Nik_Ayah		= $_POST['Nik_Ayah'];
			$Pekerjaan_Ayah	= $_POST['Pekerjaan_Ayah'];
			$Nama_Ibu		= $_POST['Nama_Ibu'];
			$Nik_Ibu		= $_POST['Nik_Ibu'];
			$Pekerjaan_Ibu	= $_POST['Pekerjaan_Ibu'];
			$Nim			= $_POST['Nim'];

			$sql = mysqli_query($koneksi, "UPDATE ortu SET Nama_Ayah='$Nama_Ayah',
                                                          Nik_Ayah='$Nik_Ayah',
                                                          Pekerjaan_Ayah='$Pekerjaan_Ayah',
                                                          Nama_Ibu='$Nama_Ibu',
                                                          Nik_Ibu='$Nik_Ibu',
                                                          Pekerjaan_Ibu='$Pekerjaan_Ibu',
														  Nim='$Nim'
														  
											WHERE Nim='$Nim'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="halaman_user.php?page=tampil_orangtua";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<form action="ortu.php?page=tampil_orangtua=<?php echo $Nim; ?>" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Ayah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nama_Ayah" class="form-control" size="4" value="<?php echo $data['Nama_Ayah']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">NIK Ayah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nik_Ayah" class="form-control" size="4" value="<?php echo $data['Nik_Ayah']; ?>" required>
				</div>
			</div><div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Pekerjaan Ayah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Pekerjaan_Ayah" class="form-control" size="4" value="<?php echo $data['Pekerjaan_Ayah']; ?>" required>
				</div>
			</div><div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Ibu</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nama_Ibu" class="form-control" size="4" value="<?php echo $data['Nama_Ibu']; ?>" required>
				</div>
			</div><div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nik Ibu</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nik_Ibu" class="form-control" size="4" value="<?php echo $data['Nik_Ibu']; ?>" required>
				</div>
			</div><div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Pekerjaan Ibu</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Pekerjaan_Ibu" class="form-control" size="4" value="<?php echo $data['Pekerjaan_Ibu']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-success" value="Simpan">
					<a href="halaman_user.php" class="btn btn-secondary">Kembali</a>
				</div>
			</div>
		</form>
	</div>
