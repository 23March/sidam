<?php 
$koneksi = mysqli_connect("us-cdbr-east-04.cleardb.com","b80ed02f2de13b","48f3d0c7","heroku_1b9272f6840042f");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>