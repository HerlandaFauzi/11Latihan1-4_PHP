//MYSQL_SELECT_DB()
//Latihan 3 - membuat table

<?php
	
	$koneksi = mysqli_connect("localhost","root","","lat_dbase");
	//Cek koneksi
	if (mysqli_connect_errno()) //memeriksa koneksi berhasil atau tidak
	{
		echo "Koneksi database gagal : ".mysqli_connect_error(); //menampilkan eror pada koneksi
	}

	$sql = "CREATE TABLE tbl_mhs
		(
            mhsID INT NOT NULL AUTO_INCREMENT,
            FirstName VARCHAR(15),
           	LastName VARCHAR(15),
           	Age INT,
           	PRIMARY KEY (mhsID)
        )";      
    if(mysqli_query($koneksi, $sql))
    {  
        echo "Tabel berhasil dibuat";  
    }
    else
    {  
        echo "Tabel gagal dibuat";  
    }
	mysqli_close($koneksi);
?>
