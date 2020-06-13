<?php 
 
//perintah koneksi pada php v7 ini menggunakan syntax mysqli_connect dengan 4 parameter didalmnya yaitu db_server, username, password dan nama_database
$koneksi = mysqli_connect("localhost","root","","db_pemweb");
 
 //logika jika koneksi tidak dapat dijalankan atau masih ada yang error
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>