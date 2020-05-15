//Latihan 4 - menyisipkan data

<?php
	
	$koneksi = mysqli_connect("localhost","root","","lat_dbase");
	//Cek koneksi
	if (mysqli_connect_errno()) //memeriksa koneksi berhasil atau tidak
	{
		echo "Koneksi database gagal : ".mysqli_connect_error(); //menampilkan eror pada koneksi
	}

	$sql = "INSERT INTO tbl_mhs VALUES('Karina','Suwandi','29'),('Glenn','Gandari','32')";
    //cek apakah proses simpan berhasil
    if (mysqli_query($koneksi, $sql))
    {
    	echo "Data Berhasil Disimpan";
    }
    else
    {
		echo "Gagal menyimpan data";
    }
    mysqli_close($koneksi);
?>