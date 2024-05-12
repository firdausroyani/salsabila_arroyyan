<?php
$koneksi = new mysqli("localhost","root","","gp");
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
							<div class="col-md-11">
								<div class="content">
									<h2 class="entry-title"><u>Blog</u></h2>
									<?php
									$ambil = $koneksi->query("SELECT * FROM berita");
									while($berita = $ambil->fetch_assoc()){
									?>
									<div class="post">
										<div class="featured-image">
											<img src="images/<?php echo $berita['foto']; ?>" alt="">
										</div>
										<h2 class="entry-title"><a href="detail-berita.php?id=<?php echo $berita['id_ber'];?>"><?php echo $berita['judul']; ?></a></h2>
										<p><?php echo substr($berita['isi'], 0,50)?>...</p>
										<a href="detail-berita.php?id=<?php echo $berita['id_ber'];?>">Read more</a>
									</div>
									<?php }?>
								</div>
							</div>
							<!--- opsi
							<div class="col-md-4 col-md-push-1">
								<aside class="sidebar">
									<div class="widget">
										<h3 class="widget-title">Discography</h3>
										<ul class="discography-list">
											<li>
												<figure class="cover"><img src="dummy/thumbnail-1.jpg" alt="thumbnail 1"></figure>
												<div class="detail">
													<h3><a href="#">Deserunt mollitia animi</a></h3>
													<span class="year">2004</span>
													<span class="track">17 tracks</span>
												</div>
											</li>
											<li>
												<figure class="cover"><img src="dummy/thumbnail-2.jpg" alt="thumbnail 2"></figure>
												<div class="detail">
													<h3><a href="#">Deserunt mollitia animi</a></h3>
													<span class="year">2004</span>
													<span class="track">17 tracks</span>
												</div>
											</li>
											<li>
												<figure class="cover"><img src="dummy/thumbnail-3.jpg" alt="thumbnail 3"></figure>
												<div class="detail">
													<h3><a href="#">Deserunt mollitia animi</a></h3>
													<span class="year">2004</span>
													<span class="track">17 tracks</span>
												</div>
											</li>
											<li>
												<figure class="cover"><img src="dummy/thumbnail-4.jpg" alt="thumbnail 4"></figure>
												<div class="detail">
													<h3><a href="#">Deserunt mollitia animi</a></h3>
													<span class="year">2004</span>
													<span class="track">17 tracks</span>
												</div>
											</li>
											<li>
												<figure class="cover"><img src="dummy/thumbnail-5.jpg" alt="thumbnail 5"></figure>
												<div class="detail">
													<h3><a href="#">Deserunt mollitia animi</a></h3>
													<span class="year">2004</span>
													<span class="track">17 tracks</span>
												</div>
											</li>
										</ul>
									</div>
								</aside>
							</div> ---->
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