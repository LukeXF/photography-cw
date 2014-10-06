

<a href="#" id="menu-toggle-wrapper">
	<div id="menu-toggle"></div>	
</a>


<!-- inner bar wrapper -->
<a href="#" id="inner-bar">
	<!-- Small logo -->
	<div class="logo-alt">
		<img src="assets/img/logo-mini.png" alt="logo-mini">
	</div>
	<!-- /Small logo -->
</a>
<!-- /inner bar wrapper -->




<!-- Sidebar -->	
<div id="side-bar">
	<div class="inner-wrapper">	
		<div id="side-inner">

			<!-- Logo -->	
			<div id="logo-wrapper">
				<a href="index.html"><img src="assets/img/logo.png" alt="logo"></a>
			</div>
			<!-- /Logo -->	

			<div id="side-contents">

				<!-- Navigation -->	
				<ul id="navigation">
					<li class="current-menu-item"><a href="#">Home</a></li>
					<li class="menu-item-has-children"><a href="#">Macro &amp; Grid</a>
						<ul class="sub-menu">
							<li class="nav-prev"><a href="#"><i class="fa fa-angle-left"></i>Macro &amp; Grid</a></li>
							<li><a href="macro-into.php">Introduction</a></li>
							<li><a href="#">Initial Contact Sheet</a></li>
							<li><a href="#">Macro Artist Critique</a></li>
							<li><a href="#">Grid Experiments</a></li>
							<li><a href="#">Triptych Experiments</a></li>
							<li><a href="#">Reshoot &amp; Refinement</a></li>
							<li><a href="#">Initial Outcomes</a></li>
							<li><a href="#">Final Outcome</a></li>
						</ul>
					</li>

					<li class="menu-item-has-children"><a href="#">Light &amp; Focus</a>
						<ul class="sub-menu">
							<li class="nav-prev"><a href="#"><i class="fa fa-angle-left"></i>Light &amp; Focus</a></li>
							<li><a href="#">Introduction</a></li>
							<li><a href="#">Aperture &amp; Shutter Speed Notes</a></li>
							<li><a href="#">Aperture &amp; Depth of Focus Experiments</a></li>
							<li><a href="#">Photographers Using Focus Effects</a></li>
							<li><a href="#">College Focus Experiments</a></li>
							<li><a href="#">Selected Focus Shots Development</a></li>
							<li><a href="#">Triptych &amp; Grid Focus Effect Experiment</a></li>
							<li><a href="#">Camera Movement Experiments</a></li>
							<li><a href="#">Photographers Using Movement</a></li>
							<li><a href="#">Camera Movement Shoot Edited &amp; Reviewed</a></li>
							<li><a href="#">Initial Outcomes</a></li>
							<li><a href="#">Final Outcome</a></li>
						</ul>
					</li>

					<li class="menu-item-has-children"><a href="#">Alternative Realities</a>
						<ul class="sub-menu">
							<li class="nav-prev"><a href="#"><i class="fa fa-angle-left"></i>Alternative Realities</a></li>
							<li><a href="#">Coming Soon</a></li>
						</ul>
					</li>

					<li class="menu-item-has-children"><a href="#">Documents</a>
						<ul class="sub-menu">
							<li class="nav-prev"><a href="#"><i class="fa fa-angle-left"></i>Documents</a></li>
							<li><a href="#">Coming Soon</a></li>
						</ul>
					</li>

					<li class="menu-item-has-children"><a href="#">Essay</a>
						<ul class="sub-menu">
							<li class="nav-prev"><a href="#"><i class="fa fa-angle-left"></i>Essay</a></li>
							<li><a href="#">Coming Soon</a></li>
						</ul>
					</li>

					<li class="menu-item-has-children"><a href="#">Extended Project</a>
						<ul class="sub-menu">
							<li class="nav-prev"><a href="#"><i class="fa fa-angle-left"></i>Extended Project</a></li>
							<li><a href="#">Coming Soon</a></li>
						</ul>
					</li>

					<?php

						// Sets the active tab
						//	if ($x == $activeTab ) {
						//		$navbar[$activeTab]["active"] = "current";
						//	}
						//	$navbar[$activeTab]["active"] = "current";

							// Generates the navbar
							foreach($navbar as $x => $x_value) {

								/* 
									if the class array in the main associative array is defined
									then echo it (to display "active" on the page you are on).
								*/
								if (!empty($x_value["active"])) {
									// set $class to echo content
									$class = $x_value["active"];
								} else {
									// else set to echo literally nothing.
									$class = "";
								}



								/* 
									if the url array in the main associative array is defined
									then echo it. This is if you need to use an external link
									that does not match the array key.
								*/
								if (!empty($x_value["url"])) {
									// set $url to echo content
									$url = $x_value["url"];
								} else {
									// else set to echo literally nothing.
									$url = $x;
								}


								// Sets the active tab
								if ($x == $activeTab) {
									$class = "current-menu-item";
								}

								/*
									if there is some submenu content then echo it,
									else treat it as as a normal tab menu
								*/
								if (!empty($x_value["submenu"])) {
									echo "<li class='" . $class . "'>";
										echo "<a>" . $x . " <i class='fa fa-caret-down'></i></a>";
										echo "<ul>";
										// echos the submenu
										foreach($x_value["submenu"] as $y => $y_value) {
												/* 
													if the url array in the main associative array is defined
													then echo it. This is if you need to use an external link
													that does not match the array key.
												*/
												if (!empty($y_value)) {
													// set $suburl to echo content
													$suburl = $y_value;
												} else {
													// else set it to the associative name
													$suburl = $y;
												}
											echo "<li><a href='" . $suburl . "'>" . $y . "</a></li>";
										}
										echo "</ul>";
									echo "</li>";
									
								} else {
									// else treat it as a normal tab
									echo "<li class='" . $class . "'><a href='$url'>";
									echo $x;
									echo "</a></li>";
								}
							}
						?>
				</ul>
				<!-- /Navigation -->	

			</div>	

			<!-- Sidebar footer -->	
			<div id="side-footer">
				<!-- Social icons -->	
				<ul class="social-icons">
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="https://twitter.com/diamondxf"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-flickr"></i></a></li>
				</ul>
				<!-- /Social icons -->	
				<div id="copyright">
					@DiamondXF
				</div>
			</div>
			<!-- /Sidebar footer -->	

		</div>
	</div>
	
					
</div>
<!-- /Sidebar -->	