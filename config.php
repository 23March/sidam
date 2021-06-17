<?php
//koneksi ke database mysql,
$koneksi = mysqli_connect("us-cdbr-east-04.cleardb.com","b80ed02f2de13b","48f3d0c7","heroku_1b9272f6840042f");

//cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
?>
