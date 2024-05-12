<?php 
$koneksi = new mysqli("localhost", "root", "" , "gp");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Gita Pasuatika</title>
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

	<body class="header-collapse">
		
		<div id="site-content">
			<?php include 'header.php'; ?>
			
			<!---swiper---->
			<?php
			$ambil=$koneksi->query("SELECT * FROM swiper"); 
			$konten = $ambil->fetch_assoc();
			?>
			<div class="hero">
				<div class="slider">
					<ul class="slides">
						<?php $ambil = $koneksi->query("SELECT * FROM swiper");
						while($pecah = $ambil->fetch_assoc()) {
							?>
							<li class="lazy-bg" data-background="images/<?php echo $pecah['gambar'];?>">
								<div class="container">
									<h2 class="slide-title"><?php echo $pecah['jdl'];?></h2>
									<h3 class="slide-subtitle"><?php echo $pecah['kata'];?></h3>
								</div>
							</li>
							<?php }?>
						</ul>
					</div>
				</div>
			<!--- quote musisi
			<main class="main-content">
				<div class="fullwidth-block testimonial-section">
					<div class="container">
						<div class="quote-slider">
							<ul class="slides">
								<li>
									<blockquote>
										<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo"</p>
										<cite>John Smith</cite>
										<span>Corporation CEO, books author</span>
									</blockquote>
								</li>
								<li>
									<blockquote>
										<p>"Iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo"</p>
										<cite>John Smith</cite>
										<span>Corporation CEO, books author</span>
									</blockquote>
								</li>
							</ul>
						</div>
					</div>
				</div> .testimonial-section -->

				<div class="fullwidth-block upcoming-event-section" data-bg-color="#191919">
					<div class="container">
						<header class="section-header">
							<h2 class="section-title">News Update</h2>

							<div class="event-nav">
								<a class="prev" id="event-prev" href="#"><i class="fa fa-caret-left"></i></a>
								<a class="next" id="event-next" href="#"><i class="fa fa-caret-right"></i></a>
							</div> <!-- .event-nav -->

						</header> <!-- .section-header -->
						<div class="event-carousel">
							
							<?php
							$ambil = $koneksi->query("SELECT * FROM berita ORDER BY id_ber DESC limit 7");
							while($berita = $ambil->fetch_assoc()){
							?>
							<div class="event">
								<div class="entry-date">
									<div class="date">23</div>
									<span class="month">Jun</span>
								</div>
								<h2 class="entry-title"><a href="detail-berita.php?id=<?php echo $berita['id_ber'];?>"><?php echo $berita['judul']; ?></a></h2>
								<p><?php echo substr($berita['isi'], 0,18)?>...</p>
							</div> <!-- .event -->
							<?php }?>
						</div> <!-- .event-carousel -->
					</div> <!-- .container -->
				</div> <!-- .upcoming-event-section -->

				<!-- opsi why-chooseus
				<div class="fullwidth-block why-chooseus-section">
					<div class="container">
						<h2 class="section-title">Why choose us?</h2>

						<div class="row">
							<div class="col-md-4">
								<div class="feature">
									<figure class="cut-corner">
										<img src="dummy/medium-image-1.jpg" alt="">
									</figure>
									<h3 class="feature-title">Similique sunt in culpa qui officia deserunt mollitia animi laborum dolorum</h3>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="feature">
									<figure class="cut-corner">
										<img src="dummy/medium-image-2.jpg" alt="">
									</figure>
									<h3 class="feature-title">Similique sunt in culpa qui officia deserunt mollitia animi laborum dolorum</h3>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="feature">
									<figure class="cut-corner">
										<img src="dummy/medium-image-3.jpg" alt="">
									</figure>
									<h3 class="feature-title">Similique sunt in culpa qui officia deserunt mollitia animi laborum dolorum</h3>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
								</div>
							</div>
						</div>
					</div>
				</div> why-chooseus-section -->
			</main> <!-- .main-content -->

			<?php include 'footer.php'; ?>

		</div> <!-- #site-content -->

		<script src="js/jquery-1.11.1.min.js"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

	</html>