<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>BABEO- Register</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		 
		<!-- Favicon -->
    	<link rel="shortcut icon" type="image/x-icon" href="images/b5.png">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="login1/fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="login1/css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<form action="cek_register.php" method="post">
					<h3>Daftar</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						 <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" name="username" id="username" class="form-control" placeholder="Username"/>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="number" name="telepon" id="telepon" class="form-control" placeholder="Telepon"/>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email"/>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" name="pass1" id="password" class="form-control" placeholder="Password"/>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						 <input type="password" name="pass2" id="conpass" class="form-control" placeholder="Ulangi password"/>
					</div>
					<div class="form-holder">
						<input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
						<label for="agree-term" class="label-agree-term"><span><span></span></span>Persyaratan&Persetujuan <a href="#" class="term-service">Terms of service</a></label>
					</div>
					<button>
						<span>Daftar</span>
					</button>
					<br>
					<div class="signup-image-link">
						<label>Sudah punya akun?</label><a href="login.php" text-align="center" >masuk disini</a>
					</div>
				</form>
			</div>
			
		</div>
		
		<script src="login1/js/jquery-3.3.1.min.js"></script>
		<script src="login1/js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>