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
			<?php include 'header.php';?>
			<main class="main-content">
				<div class="fullwidth-block download">
					<div class="container">
						<div class="ketua">
							<?php
							$ambil = $koneksi->query("SELECT * FROM kepengurusan WHERE	jabatan = 'ketua'");
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
							$ambil = $koneksi->query("SELECT * FROM kepengurusan WHERE	jabatan = 'wakil ketua'");
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
						<div class="row">
							<div class="col-md-5 ketua">
								<?php
								$ambil = $koneksi->query("SELECT * FROM kepengurusan WHERE	jabatan = 'sekertaris'");
								while($pecah = $ambil->fetch_assoc()){
								?>
								<h2 class="page-title ketua"><?php echo $pecah['jabatan']; ?></h2>

								<div class="item">
									<h3 class="item-title"><?php echo $pecah['nama']; ?></h3>
									<span class="year"><?php echo $pecah['npm']; ?> / <?php echo $pecah['na']; ?></span>
									<!--- opsi
									<a href="#" class="button small primary">Download</a>
									<a href="#" class="button small secondary">Listen to</a>
									<div class="social-share">
										<span>Share:</span>
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-pinterest"></i></a>
									</div>--->
								</div>
								<?php }?>

								<?php
								$ambil = $koneksi->query("SELECT * FROM kepengurusan WHERE	divisi = 'pelatihan' AND jabatan = 'koordinator'");
								while($pecah = $ambil->fetch_assoc()){
								?>
								<h2 class="page-title ketua">Div. <?php echo $pecah['divisi']; ?></h2>
								<h3 class="item-title"><?php echo $pecah['jabatan']; ?></h3>

								<div class="item">
									<h3 class="item-title"><?php echo $pecah['nama']; ?></h3>
									<span class="year"><?php echo $pecah['npm']; ?> / <?php echo $pecah['na']; ?></span>
									
									<a href="agt_dvs.php?div=<?php echo $pecah['divisi'] ?>" class="button small primary">Anggota Divisi</a>
									<!---<a href="#" class="button small secondary">Listen to</a>
									<div class="social-share">
										<span>Share:</span>
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-pinterest"></i></a>
									</div>--->
								</div>
								<?php }?>

								<?php
								$ambil = $koneksi->query("SELECT * FROM kepengurusan WHERE	divisi = 'sosmed' AND jabatan = 'koordinator'");
								while($pecah = $ambil->fetch_assoc()){
								?>
								<h2 class="page-title ketua">Div. <?php echo $pecah['divisi']; ?></h2>
								<h3 class="item-title"><?php echo $pecah['jabatan']; ?></h3>

								<div class="item">
									<h3 class="item-title"><?php echo $pecah['nama']; ?></h3>
									<span class="year"><?php echo $pecah['npm']; ?> / <?php echo $pecah['na']; ?></span>

									<a href="agt_dvs.php?div=<?php echo $pecah['divisi'] ?>" class="button small primary">Anggota Divisi</a>
									<!---<a href="#" class="button small secondary">Listen to</a>
									<div class="social-share">
										<span>Share:</span>
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-pinterest"></i></a>
									</div>--->
								</div>
								<?php }?>

								<?php
								$ambil = $koneksi->query("SELECT * FROM kepengurusan WHERE	divisi = 'pembasisan' AND jabatan = 'koordinator'");
								while($pecah = $ambil->fetch_assoc()){
								?>
								<h2 class="page-title ketua">Div. <?php echo $pecah['divisi']; ?></h2>
								<h3 class="item-title"><?php echo $pecah['jabatan']; ?></h3>

								<div class="item">
									<h3 class="item-title"><?php echo $pecah['nama']; ?></h3>
									<span class="year"><?php echo $pecah['npm']; ?> / <?php echo $pecah['na']; ?></span>
									
									<a href="agt_dvs.php?div=<?php echo $pecah['divisi'] ?>" class="button small primary">Anggota Divisi</a>
									<!---<a href="#" class="button small secondary">Listen to</a>
									<div class="social-share">
										<span>Share:</span>
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-pinterest"></i></a>
									</div>--->
								</div>
								<?php }?>
							</div>


							<div class="col-md-5 col-md-push-2 ketua">
								<?php
								$ambil = $koneksi->query("SELECT * FROM kepengurusan WHERE	jabatan = 'bendahara'");
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
								$ambil = $koneksi->query("SELECT * FROM kepengurusan WHERE	divisi = 'humas' AND jabatan = 'koordinator'");
								while($pecah = $ambil->fetch_assoc()){
								?>
								<h2 class="page-title ketua">Div. <?php echo $pecah['divisi']; ?></h2>
								<h3 class="item-title"><?php echo $pecah['jabatan']; ?></h3>

								<div class="item">
									<h3 class="item-title"><?php echo $pecah['nama']; ?></h3>
									<span class="year"><?php echo $pecah['npm']; ?> / <?php echo $pecah['na']; ?></span>

									<a href="agt_dvs.php?div=<?php echo $pecah['divisi'] ?>" class="button small primary">Anggota Divisi</a>
									<!---<a href="#" class="button small secondary">Listen to</a>
									<div class="social-share">
										<span>Share:</span>
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-pinterest"></i></a>
									</div>--->
								</div>
								<?php }?>

								<?php
								$ambil = $koneksi->query("SELECT * FROM kepengurusan WHERE	divisi = 'kesekretariatan' AND jabatan = 'koordinator'");
								while($pecah = $ambil->fetch_assoc()){
								?>
								<h2 class="page-title ketua">Div. <?php echo $pecah['divisi']; ?></h2>
								<h3 class="item-title"><?php echo $pecah['jabatan']; ?></h3>

								<div class="item">
									<h3 class="item-title"><?php echo $pecah['nama']; ?></h3>
									<span class="year"><?php echo $pecah['npm']; ?> / <?php echo $pecah['na']; ?></span>
									
									<a href="agt_dvs.php?div=<?php echo $pecah['divisi'] ?>" class="button small primary">Anggota Divisi</a>
									<!---<a href="#" class="button small secondary">Listen to</a>
									<div class="social-share">
										<span>Share:</span>
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-pinterest"></i></a>
									</div>--->
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