<?php
//memasukkan file config.php
include('config.php');
?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Data Mahasiswa</font></center>
		<hr>
		<a href="halaman_admin.php?page=tambah_mhs"><button class="btn btn-success">Tambah Data</button></a>
</table>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action" style= "width:100%;overflow-x:auto">
			<thead>
			<center>	
				<tr>
					<th>No.</th>
					<th>Nama Mahasiswa</th>
					<th>NIM</th>
					<th>NIK</th>
					<th>Jenis Kelamin</th>
					<th>Tanggal Lahir</th>
					<th>Jurusan</th>
					<th>Program Studi</th>
					<th>Agama</th>
					<th>Alamat</th>
					<th>Sekolah</th>
					<th>Alamat Sekolah</th>
					<th>Tahun Lulus</th>
					<th>Nama Ayah</th>
					<th>NIK Ayah</th>
					<th>Pekerjaan Ayah</th>
					<th>Nama Ibu</th>
					<th>NIK Ibu</th>
					<th>Pekerjaan Ibu</th>
					<th>Terakhir Diubah</th>
					<th>Aksi</th>
				</tr>
			</thead>
			</center>
			<tbody>
				<?php
				//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY Nama_Mhs ASC") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['Nama_Mhs'].'</td>
							<td>'.$data['Nim'].'</td>
							<td>'.$data['Nik_Mhs'].'</td>
							<td>'.$data['Jenis_Kelamin'].'</td>
							<td>'.$data['Tanggal_Lahir'].'</td>
							<td>'.$data['Jurusan'].'</td>
							<td>'.$data['Program_Studi'].'</td>							
							<td>'.$data['Agama'].'</td>
							<td>'.$data['Alamat'].'</td>
							<td>'.$data['Sekolah'].'</td>
							<td>'.$data['Alamat_Sekolah'].'</td>
							<td>'.$data['Tahun_Lulus'].'</td>
							<td>'.$data['Nama_Ayah'].'</td>
							<td>'.$data['Nik_Ayah'].'</td>
							<td>'.$data['Pekerjaan_Ayah'].'</td>
							<td>'.$data['Nama_Ibu'].'</td>
							<td>'.$data['Nik_Ibu'].'</td>
							<td>'.$data['Pekerjaan_Ibu'].'</td>
							<td>'.$data['terakhir_diubah'].'</td>
							<td>
								<a href="view.php?page=view_mhs&Nim='.$data['Nim'].'" class="btn btn-primary btn-sm">View</a>
								<a href="halaman_admin.php?page=edit_mhs&Nim='.$data['Nim'].'" class="btn btn-warning btn-sm">Edit</a>
								<a href="delete.php?Nim='.$data['Nim'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Anda yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
	</div>
	</div>
