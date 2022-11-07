<?php 
  session_start();
  if (!isset($_SESSION['username'])) {
    header('Location: login.php');
  }else{
    $username = $_SESSION['username'];
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sistem Informasi Spliter | Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="css/nouislider.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
  <div class="main-section">
    <?php $dat=$_SESSION['level'];?>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">TELKOM INFORMASI</a>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="dropdown nav-item">
            </li>
	          <li class="nav-item"><a href="logout.php" class="nav-link icon d-flex align-items-center">
              <i class=""></i> LOGOUT</a>
            </li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

  	<section class="hero-wrap js-fullheight" data-stellar-background-ratio="0.5">
  		<div class="overlay"></div>
  		<div class="container">
  			<div class="row description js-fullheight align-items-center justify-content-center">
  				<div class="col-md-8 text-center">
  					<img style="width: 320px; margin-bottom: 30px;" src="images/bg_1.png">
  					<div class="text">
              <div style="border: solid; border-width: 10px 10px 3px 5px; border-color: skyblue">
                <?php if($dat == 'admin'): ?>
                <span>
                  <a href="laporan_pengecekan.php" style="color: white;font-size: 12pt;">Laporan Pengecekan</a>
                </span>
              </div>
              <div style="border: solid;">
                <span>
                  <a href="laporan_perbaikan.php" style="color: white;font-size: 12pt;">Laporan Perbaikan</a>
                </span>
              <?php endif?>
              <?php if($dat == 'user'): ?>
                 <span>
                  <a href="pengecekan.php" style="color: white;font-size: 12pt;">Pengecekan Splitter</a>
                </span>
              </div>
              <div style="border: solid;">
                <span>
                  <a href="perbaikan.php" style="color: white;font-size: 12pt;">Perbaikan Splitter</a>
                </span>
              <?php endif ?>
              </div>
              <div style="border: solid;">
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
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

  <script src="js/nouislider.min.js"></script>
  <script src="js/moment-with-locales.min.js"></script>
  <script src="js/bootstrap-datetimepicker.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>