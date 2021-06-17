<?php include('config.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data Mahasiswa</font></center>

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

		<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$Sekolah			  = $_POST['Sekolah'];
			$Alamat_Sekolah	= $_POST['Alamat_Sekolah'];
			$Tahun_Lulus	= $_POST['Tahun_Lulus'];

			$sql = mysqli_query($koneksi, "UPDATE mahasiswa SET Sekolah='$Sekolah', Alamat_Sekolah='$Alamat_Sekolah', Tahun_Lulus='$Tahun_Lulus' WHERE Nim='$Nim'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="halaman_user.php?page=tampil_sekolah";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>
<form action="halaman_user.php?page=edit_sekolah&Nim=<?php echo $Nim; ?>" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">NIM</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nim" class="form-control" size="4" value="<?php echo $data['Nim']; ?>" readonly required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Sekolah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Sekolah" class="form-control" size="4" value="<?php echo $data['Sekolah']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat Sekolah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Alamat_Sekolah" class="form-control" value="<?php echo $data['Alamat_Sekolah']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tahun Lulus</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Tahun_Lulus" class="form-control" value="<?php echo $data['Tahun_Lulus']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-success" value="Simpan">
					<a href="halaman_user.php?page=tampil_sekolah" class="btn btn-secondary">Kembali</a>
				</div>
			</div>
		</form>
	</div>
