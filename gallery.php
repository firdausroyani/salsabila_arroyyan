<?php
$koneksi = new mysqli("localhost", "root", "", "gp");
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
			<?php include 'header.php'; ?>
			
			<main class="main-content">
				<div class="fullwidth-block gallery">
					<div class="container">
						<div class="content fullwidth">
							<h2 class="entry-title">Gallery</h2>
							<!---<div class="filter-links filterable-nav">
								<select class="mobile-filter">
									<option value="*">Show all</option>
									<?php
									//$ambil = $koneksi->query("SELECT * FROM kegiatan");
									//while($pecah = $ambil->fetch_assoc()){
										?>
										<option value=".<?php //echo $pecah['nm_kegiatan']; ?>"><?php //echo $pecah['nm_kegiatan']; ?></option>
									<?php //}?>
								</select>
								<a href="#" class="current" data-filter="*">Show all</a><?php
								// $ambil = $koneksi->query("SELECT * FROM kegiatan");
								// while($pecah = $ambil->fetch_assoc()){
									?>
									<a href="#" data-filter=".<?php //echo $pecah['nm_kegiatan']; ?>"><?php // echo $pecah['nm_kegiatan']; ?></a>
								<?php // }?>
							</div>-->
							<div class="filterable-items">
								<?php
								$ambil = $koneksi->query("SELECT * FROM kegiatan");
								while($pecah = $ambil->fetch_assoc()){
									?>
									<div class="filterable-item <?php echo $pecah['nm_kegiatan']; ?>">
										<a href="images/<?php echo $pecah['gambar']; ?>"><figure><img src="images/<?php echo $pecah['gambar']; ?>" alt="Gambar"></figure></a>
										<h3 class="item-title"><?php echo $pecah['nm_kegiatan']; ?></h3>
									</div>
								<?php }?>
							</div>
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