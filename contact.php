<?php
$koneksi = new mysqli("localhost", "root", "", "gp");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Join Us</title>
	<!-- Loading third party fonts -->
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
	<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- Loading main css file -->
	<link rel="stylesheet" href="style.css">

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
	<![endif]-->

	</head>

	<body>
		
		<div id="site-content">
			<?php include 'header.php';?>
			
			<main class="main-content">
				<div class="fullwidth-block inner-content">
					<div class="container">
						<h2 class="page-title">Contact Us</h2>
						<div class="row">
							<div class="col-md-6">
								<form method="POST" enctype="multipart/form-data" class="contact-form">
									<input type="text" placeholder="Nama" name="nm">
									<input type="number" placeholder="NPM" name="npm">
									<input type="text" placeholder="Jurusan" name="jrsn">
									<input type="number" placeholder="No. Handphone" name="no_hp">
									<input type="submit" value="Join" name="join">
								</form>
								<?php
								if (isset($_POST['join'])) 
								{
									$koneksi->query("INSERT INTO agt_baru (nama,npm,jurusan,no_hp) VALUES('$_POST[nm]','$_POST[npm]','$_POST[jrsn]','$_POST[no_hp]')");
									
									echo "<br>";
									echo "<div class='alert alert-info'>Data Tersimpan</div>";
									echo "<meta http-equiv='refresh' content='1;url=contact.php'>";
								}
								?>
							</div>
							<div class="col-md-6">
								<div class="map-wrapper">
									<div class="map"></div>
									<address>
										<div class="row">
											<div class="col-sm-6">
												<strong>Company Name INC.</strong>
												<span>40 Sibley St, Detroit</span>
											</div>
											<div class="col-sm-6">
												<a href="mailto:office@companyname.com">office@companyname.com</a> <br>
												<a href="tel:532930098891">(532) 930 098 891</a>
											</div>
										</div>
									</address>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .testimonial-section -->

				
			</main> <!-- .main-content -->

			<?php include 'footer.php'; ?>

		</div> <!-- #site-content -->

		<script src="js/jquery-1.11.1.min.js"></script>	
		<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>	
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

	</html>