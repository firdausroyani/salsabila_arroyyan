<?php
$koneksi = new mysqli("localhost", "root", "", "gp");
//mendapatkan id produk dari url
$id_berita = $_GET["id"];

$ambil = $koneksi->query("SELECT * FROM berita where id_ber = '$id_berita'");
$isi = $ambil->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>News</title>
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
				<div class="fullwidth-block inner-content">
					<div class="container">
						<div class="row">
							<div class="col-lg-11">
								<div class="content">
									<h2 class="entry-title"><?php echo $isi['judul']; ?></h2>
									<figure class="featured-image">
										<img src="images/<?php echo $isi['foto']; ?>" alt="">
									</figure>
									<p class="leading"><?php echo $isi['isi']; ?></p>
								</div>
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