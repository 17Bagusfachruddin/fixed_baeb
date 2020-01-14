<?php
   session_start();
   include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>BABEO- Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Favicon -->
    	<link rel="shortcut icon" type="image/x-icon" href="images/b5.png">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="login1/fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="login1/css/style.css">
	</head>

	<body>

<!-- <?php include 'autenfikasi.php';?> -->
		<div class="wrapper">
			<div class="inner">
				<form  method="post" action="autenfikasi.php">
					<h3>Login Babeo</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" name="username" id="username" class="form-control" placeholder="Username"/>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
					</div>
					<div class="form-holder">
						<input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
						<label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
						<label for="forgot-pass" class="label-agree-term" style="text-align: right;"><a href="forgot-pass.php">Lupa Password?</a></label>
					</div>
					<button>
						<span>Login</span>
					</button>
					<br>
                    <div class="signup-image-link">
                        <label>Belum punya Akun?</label><a href="register.php" text-align="center" >Klik disini</a>
                    </div>
				</form>
			</div>
			
		</div>
		
		<script src="login1/js/jquery-3.3.1.min.js"></script>
		<script src="login1/js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>