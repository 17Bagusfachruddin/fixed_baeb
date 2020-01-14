<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$nama=$_POST["nama"];
$username=$_POST["username"];
$email=$_POST["email"];
$telepon=$_POST["telepon"];
$password1=$_POST["pass1"]; 
$password2=$_POST["pass2"];

// cek kesamaan password
if ($password1 == $password2)
{
	// perlu dibuat sebarang pengacak
    $pengacak  = "NDJS3289JSKS190JISJI";
  
    // mengenkripsi password dengan md5() dan pengacak
    $password1 = md5($pengacak . md5($password1) . $pengacak);


//Query input menginput data kedalam tabel anggota
  $sql="insert into user (id_akses, nama_user,email_user,no_telp,username,password) values
		('2','$nama','$email','$telepon','$username','$password1')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

  //Kondisi apakah berhasil atau tidak
  if ($hasil) {
	header('location:login.php');
	exit;
  }
else {
	header('location:register.php');	
	exit;
 }
}
?>