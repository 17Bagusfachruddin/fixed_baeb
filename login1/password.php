<!DOCTYPE html>
<html>
<?php
session_start();
include 'koneksi.php';
$username = $_POST['email'];

$data = mysqli_query($koneksi,"select * from user where email_user='$username'");
$cek = mysqli_num_rows($data);
if($cek > 0){
               $data1=mysqli_fetch_array($data);

}
?>
	<head>
		<meta charset="utf-8">
		<title>Password</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <link rel="shortcut icon" type="image/x-icon" href="images/bg/b5.png">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="login1/fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="login1/css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				
					<h3 style="font-size: 21px;">Password Anda</h3>
					<p style="text-align: center;">"<?php echo $data1['password']; ?>"</p>
					
					<button>
						<a href="login.php"><span style="color: white;">Kembali ke Login</span></a>
					</button>
				
			</div>
			
		</div>
		
		<script src="login1/js/jquery-3.3.1.min.js"></script>
		<script src="login1/js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>