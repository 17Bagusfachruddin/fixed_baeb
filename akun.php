<?php include 'koneksi.php';
include 'function/session.php';
if (!isset($_SESSION["id"])) 
{
  echo "<script>alert('Silahkan login');</script>";
  echo "<script>location='login.php';</script>";
}
        $idd = (int) $_SESSION['id'];
      
          $query = mysqli_query ($koneksi, "SELECT * FROM user WHERE id_user = '$idd' ") or die (mysqli_error());
          $fetch = mysqli_fetch_array ($query);
          ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BABEO- Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/b5.png">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
<style>
    #input{
 background: rgba(23, 20, 20, 0.52);
 font-size:12pt;
 font-family:Time News Roman;
 color:pink;
 width:100%;
 height:40px;
 padding:5px 5px 5px 10px;
 margin:3px;
 border-radius:3px;
 border:none;
}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: white;
}
#input[type="submit"]{
 background:rgba(31, 15, 2, 0.78);
 color:#fff;
 cursor:pointer;
 
}
#input:hover, #input:focus{

 background:black;
 outline-style:none;
}
#input[type="submit"]:hover, #input[type="submit"]:focus{
 background:rgba(31, 15, 2, 0.78);
}</style>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="user_2index.php">BABEO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <span><a class="navbar-brand">&nbsp;<input name="ukuran" id="input" type="text" placeholder="Cari Produk"></a></span>
             
      
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="user_2index.php" class="nav-link">Home</a></li>
            <li class="nav-item dropdown">
              
            </li>
            <li class="nav-item"><a href="about1.php" class="nav-link">Tentang</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hai, <?php echo $fetch['username']; ?></a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                
                <a class="dropdown-item" href="akun.php?id=<?=$fetch['id_user']?>">Informasi Akun</a>
                <a class="dropdown-item" href="add_produk.php?id=<?=$fetch['id_user']?>">Mulai Jual</a>
                <?php
          include 'koneksi.php';
                                        $query = mysqli_query($koneksi, "SELECT * FROM Product") or die(mysqli_error());
                                        $fetch2 = mysqli_fetch_array($query);
                                            {
                                            $id = $fetch2['id_product'];
                                    ?>
                <p><a class='dropdown-item' href='cart.php?id=<?=$fetch['id_user']?>'>Keranjang</a> <?php } ?>
                <!-- <a class="dropdown-item" href="favorit.php?id=<?=$fetch['id_user']?>">Favorit</a> -->
                <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
            </li>
            <li class="nav-item cta cta-colored"><a href="cart.php?id=<?=$fetch['id_user']?>" class="nav-link"><span class="icon-shopping_cart">Keranjang</span>
           
           <!-- <?php
            include 'koneksi.php';
            $id = (int) $_SESSION['id'];
                        $sqlCommand = "SELECT COUNT(orders.jumlah), user.nama_user FROM user left join orders on orders.id_user = user.id_user WHERE user.id_user = '$id'"; 
$query = mysqli_query($koneksi, $sqlCommand) or die (mysqli_error()); 
$row = mysqli_fetch_row($query);
echo "Keranjang " . $row[0] . "";
mysqli_free_result($query);?> --></a></li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center py-5">
            <!-- Foto Profil -->
              <div class="col-xl-3 col-lg-5">
                  <div class="card-body">
                      <form action="" method="post">
                        <div class="form-group row">
                          
                          <table  id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <td><center><img src="images/naufal.jpg" style="height: 200px; width: 200px;"></style></center></td>
                            </tr>
                          </table>
                        </div>
                      </form>
                  </div>
              </div>
              <!-- End Foto Profil -->

              <!-- Biodata -->
              <div class="col-xl-9 col-lg-7">
                  <div class="card-body">
                      <form action="" method="post">
                          <div class="form-group row">
                              <label class="col-sm-3 col-form-label">ID</label>
                              <div class="col-sm-9">
                                <input type="text" name="id" disabled class="form-control" size="4" >
                              </div>
                            </div>
                          <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Nama</label>
                              <div class="col-sm-9">
                                <input type="text" name="nama" disabled class="form-control" size="4" >
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                              <div class="col-sm-9">
                                <input type="text" name="jk" disabled class="form-control" size="4">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Tempat, Tanggal Lahir</label>
                              <div class="col-sm-4">
                                <input type="text" name="tempat_lahir" disabled class="form-control" size="4" >
                            </div>
                            <div class="col-sm-5">
                                <input type="date" name="tanggak_lahir" disabled class="form-control" size="4" >
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Alamat</label>
                              <div class="col-sm-9">
                                <input type="text" name="alamat" disabled class="form-control" size="4" >
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-3 col-form-label">No HP</label>
                              <div class="col-sm-9">
                                <input type="text" name="no_hp" disabled class="form-control" size="4" >
                              </div>
                          </div>
                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">&nbsp;</label>
                              <div class="col-sm-9">
                                <input type="submit" name="eprofil" class="btn btn-primary" value="EDIT  " >
                                <input type="submit" name="eprofil" class="btn btn-primary" value="SIMPAN  " >
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
              <!-- End Biodata -->
              
            </div>
            
          </div>
          
        </div>
        
      </div>
    </section>
		
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center py-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
            	<h1 class="big">Subscribe</h1>
              <h2>Subcribe to our Newsletter</h2>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer bg-light ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Modist</h2>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>