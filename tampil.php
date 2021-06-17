<?php
//memasukkan file config.php
include('config.php');
?>
<style>
#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}
</style>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Data Mahasiswa</font></center>
		<hr>
		<a href="halaman_admin.php?page=tambah_mhs"><button class="btn btn-success">Tambah Data</button></a>
		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search data">
<script>
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action" style= "weight:100%;overflow-x:auto">
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
