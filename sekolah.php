<?php
//memasukkan file config.php
include('config.php');
?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Data Sekolah</font></center>
		<hr>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
			<center>	
				<tr>
					<th>No.</th>
					<th>NIM Mahasiswa</th>
					<th>Nama Sekolah</th>
					<th>Alamat Sekolah</th>
					<th>Tahun Lulus</th>
					<th>Aksi</th>
				</tr>
			</thead>
			</center>
			<tbody>
				<?php
				//query ke database SELECT tabel mahasiswa urut berdasarkan NIM
				$sql = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE Nim=$_SESSION[username]") or die(mysqli_error($koneksi));
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
							<td>'.$data['Nim'].'</td>
							<td>'.$data['Sekolah'].'</td>
							<td>'.$data['Alamat_Sekolah'].'</td>
							<td>'.$data['Tahun_Lulus'].'</td>
							<td>'.$data['terakhir_diubah'].'</td>
							<td>
								<a href="halaman_user.php?page=edit_sekolah&Nim='.$data['Nim'].'" class="btn btn-warning btn-sm">Edit</a>
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
