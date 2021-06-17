<?php include('config.php'); ?>

		<center><font size="6">Tambah Data</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$Nim			= $_POST['Nim'];
			$Nama_Mhs		= $_POST['Nama_Mhs'];
			$Nik_Mhs		= $_POST['Nik_Mhs'];
			$Jenis_Kelamin	= $_POST['Jenis_Kelamin'];
			$Program_Studi	= $_POST['Program_Studi'];
			$Jurusan		= $_POST['Jurusan'];
			$Tanggal_Lahir	= $_POST['Tanggal_Lahir'];
			$Agama 			= $_POST['Agama'];
			$Alamat 		= $_POST['Alamat'];
			$Sekolah		= $_POST['Sekolah'];
			$Alamat_Sekolah	= $_POST['Alamat_Sekolah'];
			$Tahun_Lulus	= $_POST['Tahun_Lulus'];
			$Nama_Ayah		= $_POST['Nama_Ayah'];
			$Nik_Ayah		= $_POST['Nik_Ayah'];
			$Pekerjaan_Ayah	= $_POST['Pekerjaan_Ayah'];
			$Nama_Ibu		= $_POST['Nama_Ibu'];
			$Nik_Ibu		= $_POST['Nik_Ibu'];
			$Pekerjaan_Ibu	= $_POST['Pekerjaan_Ibu'];

			$cek = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE Nim='$Nim'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO mahasiswa(Nim, Nama_Mhs, Nik_Mhs, Jenis_Kelamin, Program_Studi, Jurusan, 
				Tanggal_Lahir, Agama, Alamat, Sekolah, Alamat_Sekolah, Tahun_Lulus, Nama_Ayah, Nik_Ayah, Pekerjaan_Ayah, Nama_Ibu, Nik_Ibu, Pekerjaan_Ibu) 
				VALUES('$Nim', '$Nama_Mhs', '$Nik_Mhs', '$Jenis_Kelamin', '$Program_Studi', '$Jurusan', '$Tanggal_Lahir', '$Agama', 
				'$Alamat', '$Sekolah',  '$Alamat_Sekolah', '$Tahun_Lulus', '$Nama_Ayah', '$Nik_Ayah', '$Pekerjaan_Ayah', '$Nama_Ibu', '$Nik_Ibu', '$Pekerjaan_Ibu')") 
				or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="halaman_admin.php?page=tampil_mhs";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, NIM sudah terdaftar.</div>';
			}
		}
		?>

		<form action="halaman_admin.php?page=tambah_mhs" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nim</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="Nim" class="form-control" size="4" placeholder="Masukkan NIM" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Mahasiswa</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nama_Mhs" class="form-control" placeholder="Masukkan Nama Lengkap" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
				<div class="col-md-6 col-sm-6 ">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="Jenis_Kelamin" value="Laki-Laki" required>Laki-Laki
						</label>
						<label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="Jenis_Kelamin" value="Perempuan" required>Perempuan
						</label>
					</div>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">NIK</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nik_Mhs" class="form-control" size="4" placeholder="Masukkan NIK" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="date" name="Tanggal_Lahir" class="form-control" size="4" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Program Studi</label>
				<div class="col-md-6 col-sm-6">
					<select name="Program_Studi" class="form-control" required>
						<option value="">Pilih Program Studi</option>
						<option value="Jaringan Telekomunikasi Digital">Jaringan Telekomunikasi Digital</option>
						<option value="Teknik SipilL">Teknik Sipil</option>
						<option value="Teknik Kimia">Teknik Kimia</option>
						<option value="Teknik Elektro">Teknik Elektro</option>
						<option value="Akuntansi">Akuntansi</option>
						<option value="Manajemen">Manajemen</option>
						<option value="Farmasi">Farmasi</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jurusan</label>
				<div class="col-md-6 col-sm-6">
					<select name="Jurusan" class="form-control" required>
						<option value="">Pilih Jurusan</option>
						<option value="Teknik SipilL">Teknik Sipil</option>
						<option value="Teknik Kimia">Teknik Kimia</option>
						<option value="Teknik Elektro">Teknik Elektro</option>
					</select>
				</div>
			</div>
			<form method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Agama</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="Agama" class="form-control" size="4" placeholder="Masukkan Agama" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="Alamat" class="form-control" size="4" placeholder="Masukkan Alamat" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Sekolah</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="Sekolah" class="form-control" size="4" placeholder="Masukkan Sekolah Asal" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat Sekolah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Alamat_Sekolah" class="form-control" size="4" placeholder="Masukkan Alamat Sekolah" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tahun Lulus</label>
				<div class="col-md-6 col-sm-6">
					<input type="year" name="Tahun_Lulus" class="form-control" size="4" placeholder="yyyy" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Ayah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nama_Ayah" class="form-control" size="4" placeholder="Masukkan Nama Ayah" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">NIK Ayah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nik_Ayah" class="form-control" size="4" placeholder="Masukkan NIK Ayah" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Pekerjaan Ayah</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Pekerjaan_Ayah" class="form-control" size="4" placeholder="Masukkan Pekerjaan Ayah" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Ibu</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nama_Ibu" class="form-control" size="4" placeholder="Masukkan Nama Ibu" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">NIK Ibu</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nik_Ibu" class="form-control" size="4" placeholder="Masukkan NIK Ibu"required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Pekerjaan Ibu</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Pekerjaan_Ibu" class="form-control" size="4" placeholder="Masukkan Pekerjaan Ibu" required>
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
				</div>
		</form>
	</div>
