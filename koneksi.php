<?php
	//file koneksi.php

	//deklarasi
	$databaseHost='localhost'; //default host pada database
	$databaseName='db_ecommerce'; //file nama di database
	$databaseUsername='root'; //default user di XAMPP
	$databasePassword=''; //tidak perlu menggunakan password

	//fungsi koneksi
	$koneksi=mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); //membuka koneksi baru ke server mysql

	//

	//cek koneksi
	if (!$koneksi) {
		die("Gagal terhubung dengan database".mysqli_connect());
	}else{
		// echo "Sukses";
	}

?>	
