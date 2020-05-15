//KONEKSI MYSQL
//Latihan 1 - koneksi php 

<?php 
 	
 	$koneksi = mysqli_connect("localhost","root","","db_ygDigunakan");

	//Cek koneksi
	if (mysqli_connect_errno()) //memeriksa koneksi berhasil atau tidak
	{
		echo "Koneksi database gagal : ".mysqli_connect_error(); //menampilkan eror pada koneksi
	}
?>