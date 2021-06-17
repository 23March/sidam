<?php include('config.php'); ?>

	<div class="container" style="margin-top:20px">
		<center><font size="6">Data Mahasiswa</font></center>
    <?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['Nim'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$Nim = $_GET['Nim'];

			//query ke database SELECT tabel mahasiswa berdasarkan Nim
			$select = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE Nim='$_SESSION[username]'") or die(mysqli_error($koneksi));

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
			$Nim = $_POST['username'];
			$Nama_Mhs		= $_POST['Nama_Mhs'];
			$Jenis_Kelamin	= $_POST['Jenis_Kelamin'];
			$Program_Studi	= $_POST['Program_Studi'];
			$Jurusan	    = $_POST['Jurusan'];
			$Agama          = $_POST['Agama'];
			$Alamat         = $_POST['Alamat'];
			$Sekolah        = $_POST['Sekolah'];

			$sql = mysqli_query($koneksi, "UPDATE mahasiswa SET Nama_Mhs='$Nama_Mhs',
                                                          Jenis_Kelamin='$Jenis_Kelamin',
                                                          Program_Studi='$Program_Studi',
                                                          Jurusan='$Jurusan',
                                                          Agama='$Agama',
                                                          Alamat='$Alamat',
                                                          Sekolah='$Sekolah' 
                                      WHERE Nim='$_SESSION[username]'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="mahasiswa.php?page=tampil_mhs";</script>';
			}
      else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
?>
		<form action="mahasiswa_2.php?page=tampil_mhs=<?php echo $Nim; ?>" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nim</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nim" class="form-control" size="4" value="<?php echo $data['Nim']; ?>" readonly required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Mahasiswa</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nama_Mhs" class="form-control" value="<?php echo $data['Nama_Mhs']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
				<div class="col-md-6 col-sm-6 ">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-outline-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="Jenis_Kelamin" value="Laki-Laki" <?php if($data['Jenis_Kelamin'] == 'Laki-Laki'){ echo 'checked'; } ?> required>Laki-Laki
						</label>
						<label class="btn btn-outline-danger" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="Jenis_Kelamin" value="Perempuan" <?php if($data['Jenis_Kelamin'] == 'Perempuan'){ echo 'checked'; } ?> required>Perempuan
						</label>
					</div>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Program Studi</label>
				<div class="col-md-6 col-sm-6">
					<select name="Program_Studi" class="form-control" required>
						<option value="">Pilih Program Studi</option>
						<option value="Jaringan Telekomunikasi Digital" <?php if($data['Program_Studi'] == 'Jaringan Telekomunikasi Digital'){ echo 'selected'; } ?>>Jaringan Telekomunikasi Digital</option>
						<option value="Teknik Informatika" <?php if($data['Program_Studi'] == 'Teknik Informatika'){ echo 'selected'; } ?>>Teknik Informatika</option>
						<option value="Teknik Kimia" <?php if($data['Program_Studi'] == 'Teknik Kimia'){ echo 'selected'; } ?>>Teknik Kimia</option>
						<option value="Teknik Elektro" <?php if($data['Program_Studi'] == 'Teknik Elektro'){ echo 'selected'; } ?>>Teknik Elektronika</option>
						<option value="Akuntansi" <?php if($data['Program_Studi'] == 'Akuntansi'){ echo 'selected'; } ?>>Akuntansi</option>
						<option value="Manajemen" <?php if($data['Program_Studi'] == 'Manajemen'){ echo 'selected'; } ?>>Manajemen</option>
						<option value="Sistem Kelistrikan" <?php if($data['Program_Studi'] == 'Sistem Kelistrikan'){ echo 'selected'; } ?>>Sistem Kelistrikan</option>
						<option value="Keuangan" <?php if($data['Program_Studi'] == 'Keuangan'){ echo 'selected'; } ?>>Keuangan</option>
						<option value="Administrasi Bisnis" <?php if($data['Program_Studi'] == 'Administrasi Bisnis'){ echo 'selected'; } ?>>Administrasi Bisnis</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jurusan</label>
				<div class="col-md-6 col-sm-6">
					<select name="Jurusan" class="form-control" required>
						<option value="">Pilih Jurusan</option>
						<option value="Teknik Informatika" <?php if($data['Jurusan'] == 'Teknik Informatika'){ echo 'selected'; } ?>>Teknik Informatika</option>
						<option value="Teknik Kimia" <?php if($data['Jurusan'] == 'Teknik Kimia'){ echo 'selected'; } ?>>Teknik Kimia</option>
						<option value="Teknik Elektro" <?php if($data['Jurusan'] == 'Teknik Elektro'){ echo 'selected'; } ?>>Teknik Elektro</option>
						</select>
				</div>
			</div>
			<form method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Agama</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Agama" class="form-control" size="4" value="<?php echo $data['Agama']; ?>" required>
				</div>
			</div>
			<form method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Alamat" class="form-control" size="4" value="<?php echo $data['Alamat']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Sekolah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Sekolah" class="form-control" size="4" value="<?php echo $data['Sekolah']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-success" value="Simpan">
					<a href="halaman_user.php?page=tampil_mhs=" class="btn btn-secondary">Kembali</a>
				</div>
			</div>
		</form>
	</div>