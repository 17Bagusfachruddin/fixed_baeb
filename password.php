<?php  
include("koneksi.php");

if (!isset($_GET["code"])) {
	exit("maaf");
}

$code = $_GET["code"];
$getemailquery = mysqli_query($koneksi, "SELECT email FROM resetpassword WHERE code='$code'");
if (mysqli_num_rows($getemailquery) == 0) {
	exit("maaf ");
}

if (isset($_POST["password"])) {
	$pw = $_POST["password"];
	

	$row = mysqli_fetch_array($getemailquery);
	$email = $row["email"];

	$query = mysqli_query($koneksi, "UPDATE user SET password='$pw' WHERE email='$email'");

	if ($query) {
		$query = mysqli_query($koneksi, "DELETE FROM resetpassword WHERE code='$code'");
		 echo '<script>alert("Password Berhasil Direset")</script>';
            echo "<script>location='login.php';</script>";

	}else{
		 echo '<script>alert("Maaf password tidak berhasil direset")</script>';
            echo "<script>location='Password.php';</script>";
	}
}
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Password</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/b5.png">
		 <link rel="shortcut icon" type="image/x-icon" href="images/bg/b5.png">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="login1/fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="login1/css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<form method="POST">
					<h3 style="font-size: 21px;">Reset Password Anda</h3>
					<p style="text-align: center;">silakan masukkan password baru anda</p>
					<br>
					<div class="form-holder">
						<input type="password" name="password" class="form-control" placeholder="Password Baru Anda"/>
					</div>
					
					<button>
						<span style="color: white;">Konfirm</span>
				</form>
			</div>
			
		</div>
		
		<script src="login1/js/jquery-3.3.1.min.js"></script>
		<script src="login1/js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>