<?php
$koneksi = new mysqli("localhost", "root", "", "gp");

//mendapatkan div produk dari url
$divisi = $_GET["div"];

//query ambil data
$ambil = $koneksi->query("SELECT * FROM kepengurusan WHERE divisi='$divisi'");
$detail = $ambil->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Gallery</title>
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
				<div class="fullwidth-block download">
					<div class="container">
						<div class="ketua">
							<?php
							$ambil = $koneksi->query("SELECT * FROM kepengurusan WHERE jabatan = 'koordinator' AND divisi = '$divisi'");
							while($pecah = $ambil->fetch_assoc()){
							?>
							<h2 class="page-title"><?php echo $pecah['jabatan']; ?></h2>
							<div class="item">
								<figure class="cut-corner">
									<!----<img src="dummy/medium-image-1.jpg" alt="">--->
								</figure>
								<h3 class="item-title"><?php echo $pecah['nama']; ?></h3>
								<span class="year"><?php echo $pecah['npm']; ?> / <?php echo $pecah['na']; ?></span>
							</div>
							<?php }?>
							<?php
							$ambil = $koneksi->query("SELECT * FROM kepengurusan WHERE	jabatan = 'anggota' AND divisi = '$divisi'");
								while($pecah = $ambil->fetch_assoc()){
							?>
							<h2 class="page-title"><?php echo $pecah['jabatan']; ?></h2>
							<div class="item">
								<figure class="cut-corner">
									<!----<img src="dummy/medium-image-1.jpg" alt="">--->
								</figure>
								<h3 class="item-title"><?php echo $pecah['nama']; ?></h3>
								<span class="year"><?php echo $pecah['npm']; ?> / <?php echo $pecah['na']; ?></span>
							</div>
							<?php }?>
						</div>
					</div>
				</div> <!-- .testimonial-section -->

				
			</main> <!-- .main-content -->

			<?php include 'footer.php'; ?>

		</div> <!-- #site-content -->

		<script src="js/jquery-1.11.1.min.js"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

	</html>