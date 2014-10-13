<?php 
	include_once 'assets/header.php';
	include_once 'assets/navbar.php';
?>
<!-- Page main wrapper -->
<div id="main-content" class="dark-template">
	<div class="page-wrapper">
		
		<!-- Sidebar -->
		<div class="page-side ajax-element">
			<div class="inner-wrapper vcenter-wrapper">
				<div class="side-content vcenter">
					<div class="title">
						<span class="second-part">Tiny World - Tidy World</span>
						<span>Macro Grid Triptych</span>
					</div>
					<p>Three subjects under that form part of reality and illusion topic under Unit 3 Photography coursework.</p>

					<div class="row">
						<div class="col-md-12 col-sm-6">
							<div class="supervisor">
								<div class="sv-avatar">
									<img src="http://photo.luke.sx/assets/img/photos/grill.png" alt="staff image">
								</div>
								<div class="sv-detail">
									<h3 class="sv-name">Macro</h3>
									<div>The concept of capturing the world like never seen before through macro photography.</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-sm-6">
							<div class="supervisor">
								<div class="sv-avatar">
									<img src="http://photo.luke.sx/assets/img/photos/macro/e203.png" alt="staff image">
								</div>
								<div class="sv-detail">
									<h3 class="sv-name">Triptych &amp; Grid</h3>
									<div>Presenting images through grid positioning and other methods such as Triptych using rule of thirds.</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->

		<!-- Main Content -->
		<div class="page-main ajax-element">
			<!-- Portflio wrapper -->	
			<div class="ajax-folio vertical-folio">

				<!-- Portflio Item -->		
				<div class="vf-item tj-hover-3 set-bg inview-animate inview-fadeleft">
					<a href="macro-motorbike.php" class="ajax-portfolio">
						<img src="http://root-image.luke.sx/7600.png" alt="alt" class="img-responsive">

						<!-- Item Overlay -->	
						<div class="tj-overlay vcenter-wrapper">
							<div class="overlay-texts vcenter">
								<h3 class="title">Motorbike</h3>
								<h4 class="subtitle">Macro close ups of a couple of motorbikes and their components.</h4>
							</div>
						</div>
						<!-- /Item Overlay -->	
					</a>
				</div>
				<!-- /Portflio Item -->		

				<!-- Portflio Item -->		
				<div class="vf-item tj-hover-3 set-bg inview-animate inview-fadeleft">
					<a href="#coming-soon" class="ajax-portfolio">
						<img src="http://root-image.luke.sx/fca6.png" alt="alt" class="img-responsive">

						<!-- Item Overlay -->	
						<div class="tj-overlay vcenter-wrapper">
							<div class="overlay-texts vcenter">
								<h3 class="title">Fruit</h3>
								<h4 class="subtitle">Triptych Experiments of grid positioning and layouts.</h4>
							</div>
						</div>
						<!-- /Item Overlay -->	
					</a>
				</div>
				<!-- /Portflio Item -->		

				<!-- Portflio Item -->		
				<div class="vf-item tj-hover-3 set-bg inview-animate inview-fadeleft">
					<a href="#coming-soon" class="ajax-portfolio">
						<img src="http://root-image.luke.sx/3ce6.png" alt="alt" class="img-responsive">

						<!-- Item Overlay -->	
						<div class="tj-overlay vcenter-wrapper">
							<div class="overlay-texts vcenter">
								<h3 class="title">Structures</h3>
								<h4 class="subtitle">Shots of building from around the UK split into sections.</h4>
							</div>
						</div>
						<!-- /Item Overlay -->	
					</a>
				</div>
				<!-- /Portflio Item -->		

				<!-- Portflio Item -->		
				<div class="vf-item tj-hover-3 set-bg inview-animate inview-fadeleft">
					<a href="#coming-soon" class="ajax-portfolio">
						<img src="http://root-image.luke.sx/479c.png" alt="alt" class="img-responsive">

						<!-- Item Overlay -->	
						<div class="tj-overlay vcenter-wrapper">
							<div class="overlay-texts vcenter">
								<h3 class="title">Scan Experiments</h3>
								<h4 class="subtitle">A mixture of none-edited scans containing everyday objects.</h4>
							</div>
						</div>
						<!-- /Item Overlay -->	
					</a>
				</div>
				<!-- /Portflio Item -->		

				<!-- Portflio Item -->		
				<div class="vf-item tj-hover-3 set-bg inview-animate inview-fadeleft">
					<a href="#coming-soon" class="ajax-portfolio">
						<img src="http://root-image.luke.sx/d4a0.png" alt="alt" class="img-responsive">

						<!-- Item Overlay -->	
						<div class="tj-overlay vcenter-wrapper">
							<div class="overlay-texts vcenter">
								<h3 class="title">Liquid</h3>
								<h4 class="subtitle">Close up shots of interesting patterns in milk.</h4>
							</div>
						</div>
						<!-- /Item Overlay -->	
					</a>
				</div>
				<!-- /Portflio Item -->		

				<!-- Portflio Item -->		
				<div class="vf-item tj-hover-3 set-bg inview-animate inview-fadeleft">
					<a href="#coming-soon" class="ajax-portfolio">
						<img src="http://root-image.luke.sx/4735.png" alt="alt" class="img-responsive">

						<!-- Item Overlay -->	
						<div class="tj-overlay vcenter-wrapper">
							<div class="overlay-texts vcenter">
								<h3 class="title">Nature</h3>
								<h4 class="subtitle">Macro photography of flowers and plants.</h4>
							</div>
						</div>
						<!-- /Item Overlay -->	
					</a>
				</div>
				<!-- /Portflio Item -->


			</div>
			<!-- /Portflio wrapper -->	
		</div>
		<!-- Main Content -->

		
		<!--Ajax folio-->
		<div id="ajax-folio-loader">
			<!-- loading css3 -->
			<div id="followingBallsG">
				<div id="followingBallsG_1" class="followingBallsG">
				</div>
				<div id="followingBallsG_2" class="followingBallsG">
				</div>
				<div id="followingBallsG_3" class="followingBallsG">
				</div>
				<div id="followingBallsG_4" class="followingBallsG">
				</div>
			</div>
		</div>
		<div id="ajax-folio-item"></div>
		<!--Ajax folio-->
	</div>
</div>
<!-- /Page main wrapper -->


<!-- jquery core -->
<script type="text/javascript" src="assets/js/vendors/jquery-1.11.0.min.js"></script>

<!-- imagesLoaded jquery plugin -->
<script type="text/javascript" src="assets/js/vendors/imagesloaded.pkgd.min.js"></script>

<!-- jquery isotop plugin -->
<script type="text/javascript" src="assets/js/vendors/isotope.pkgd.min.js"></script>

<!-- jquery history neede for ajax pages -->
<script type="text/javascript" src="assets/js/vendors/jquery.history.js"></script>

<!-- owwwlab jquery kenburn slider plugin -->
<script type="text/javascript" src="assets/js/jquery.owwwlab-kenburns.js"></script>

<!-- owwwlab jquery double carousel plugin -->
<script type="text/javascript" src="assets/js/jquery.owwwlab-DoubleCarousel.js"></script>

<!-- owwwwlab jquery video background plugin -->
<script type="text/javascript" src="assets/js/jquery.owwwlab-video.js"></script>

<!-- tweenmax animation framework -->
<script type="text/javascript" src="assets/js/vendors/TweenMax.min.js"></script>

<!-- jquery nice scroll plugin needed for vertical portfolio page -->
<script type="text/javascript" src="assets/js/vendors/jquery.nicescroll.min.js"></script>

<!-- jquery magnific popup needed for ligh-boxes -->
<script type="text/javascript" src="assets/js/vendors/jquery.magnific-popup.js"></script>

<!-- html5 media player -->
<script type="text/javascript" src="assets/js/vendors/mediaelement-and-player.min.js"></script>

<!-- jquery inview plugin -->
<script type="text/javascript" src="assets/js/vendors/jquery.inview.min.js"></script>

<!-- smooth scroll -->
<script type="text/javascript" src="assets/js/vendors/smoothscroll.js"></script>



<!-- Master Slider -->
<script src="assets/masterslider/jquery.easing.min.js"></script>
<script src="assets/masterslider/masterslider.min.js"></script>

<!-- theme custom scripts -->
<script type="text/javascript" src="assets/js/custom.js"></script>


</body>
</html>