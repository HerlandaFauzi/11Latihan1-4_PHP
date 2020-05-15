//MYSQL_QUERY()
//Latihan 2 - membuat database

<?php

	$link = mysqli_connect("localhost", "root", ""); 
	$dbname = "lat_dbase";
	if(mysqli_connect_errno())
	{
    	echo mysqli_connect_error();

    	$query = "CREATE DATABASE $dbname";
    	if(mysqli_query($link, $query))
    	{
     	  	echo "Database $dbname berhasil dibuat..";
   		}
   		else
    	{
    		echo "Database $dbname Gagal dibuat..";
    	}
	}
?>