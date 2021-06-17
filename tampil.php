<?php
//memasukkan file config.php
include('config.php');
?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Data Mahasiswa</font></center>
		<hr>
		<a href="halaman_admin.php?page=tambah_mhs"><button class="btn btn-success">Tambah Data</button></a>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
			<center>	
				<tr>
					<th>No.</th>
					<th>Nama Mahasiswa</th>
					<th>NIM</th>
					<th>Jenis Kelamin</th>
					<th>Tanggal Lahir</th>
					<th>Jurusan</th>
					<th>Program Studi</th>
					<th>Agama</th>
					<th>Alamat</th>
					<th>Sekolah</th>
					<th>Aksi</th>
				</tr>
			</thead>
			</center>
			<tbody>
				<?php
				//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY Nim DESC") or die(mysqli_error($koneksi));
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
							<td>'.$data['Jenis_Kelamin'].'</td>
							<td>'.$data['Tanggal_Lahir'].'</td>
							<td>'.$data['Jurusan'].'</td>
							<td>'.$data['Program_Studi'].'</td>							
							<td>'.$data['Agama'].'</td>
							<td>'.$data['Alamat'].'</td>
							<td>'.$data['Sekolah'].'</td>
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
