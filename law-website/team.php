<!doctype html>
<html lang="en">

<head>
	<title>Team | Abbas & Kakar Law Offices 
	</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<?php
			$srcurl = "includes/";
			$basesurl = "assets/";
			?>
	<?php
			$style = $_SERVER['HTTP_HOST']; 
			$style = $srcurl."style.php"; 
			include($style); 
			
			$urhere = "homepage";
			?>
</head>

<body class="hompg">

	<?php
			$header = $_SERVER['HTTP_HOST']; 
			$header = $srcurl."header.php"; 
			include($header); 
			?>
	<section class="first-section team">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 text-center">
							<h1>Our Team</h1>
							<h6>Experienced lawyers.Tailored approach.</h6>
				</div>				
			</div>
		</div>
	</section>

	<section class="service-section team">
		<div class="container">
			<div class="row">
				<div class="col-md-12 ">
					<h1 class="m-0 d-inline">Our Team</h1>
					<div class="sort-button">
<select id="sortSelect"  class="form-select w-auto">
						<option value="">sort by</option>
						<option value="name">Name</option>
						<option value="position">Position</option>
					</select>
					</div>
					
      
				</div>
				<div class="col-md-12 pt-4 mt-4">
					<ul class="service teamli" >
						<li>
                            <div class="left">
                            <img src="<?php echo $basesurl;?>images/team1.jpg" alt="">
                            </div>
                            <div class="right">
								<div>
									<h3>Moniza Hina Kakar</h3>
									<h6>Managing Partner</h6>
								</div>
                                
                                <a href="mailto:team@lawoffices.com"  class="teammail"><i class="fa fa-envelope mr-2"></i>team@lawoffices.com</a>
                               <div class="bottom-links">
									<a href="<?php echo $path;?>moniza-hina-kakar"  class="profile">Full Profile</a>
									<a href="linkedin.com"  class="linkedin">LinkedIn</a>
							   </div>
								

								
                            </div>
                        </li>
						<li>
                            <div class="left">
                            <img src="<?php echo $basesurl;?>images/team1.jpg" alt="">
                            </div>
                            <div class="right">
								<div>
									<h3>Samar Abbas 									</h3>
									<h6>Managing Partner</h6>
								</div>
                                
                                <a href="mailto:team@lawoffices.com"  class="teammail"><i class="fa fa-envelope mr-2"></i>team@lawoffices.com</a>
                               <div class="bottom-links">
									<a href="<?php echo $path;?>samar-abbas"  class="profile">Full Profile</a>
									<a href="linkedin.com"  class="linkedin">LinkedIn</a>
							   </div>
								

								
                            </div>
                        </li>
						<li>
                            <div class="left">
                            <img src="<?php echo $basesurl;?>images/team1.jpg" alt="">
                            </div>
                            <div class="right">
								<div>
									<h3>Shankar Singh 								</h3>
									<h6>Partner</h6>
								</div>
                                
                                <a href="mailto:team@lawoffices.com"  class="teammail"><i class="fa fa-envelope mr-2"></i>team@lawoffices.com</a>
                               <div class="bottom-links">
									<a href="<?php echo $path;?>shankar-singh"  class="profile">Full Profile</a>
									<a href="linkedin.com"  class="linkedin">LinkedIn</a>
							   </div>
								

								
                            </div>
                        </li>
						<li>
                            <div class="left">
                            <img src="<?php echo $basesurl;?>images/team1.jpg" alt="">
                            </div>
                            <div class="right">
								<div>
									<h3>Aisha Awan 								</h3>
									<h6>Associate</h6>
								</div>
                                
                                <a href="mailto:team@lawoffices.com"  class="teammail"><i class="fa fa-envelope mr-2"></i>team@lawoffices.com</a>
                               <div class="bottom-links">
									<a href="<?php echo $path;?>aisha-awan"  class="profile">Full Profile</a>
									<a href="linkedin.com"  class="linkedin">LinkedIn</a>
							   </div>
								

								
                            </div>
                        </li>
						<li>
                            <div class="left">
                            <img src="<?php echo $basesurl;?>images/team1.jpg" alt="">
                            </div>
                            <div class="right">
								<div>
									<h3>Hassan Lanewala									</h3>
									<h6>Associate</h6>
								</div>
                                
                                <a href="mailto:team@lawoffices.com"  class="teammail"><i class="fa fa-envelope mr-2"></i>team@lawoffices.com</a>
                               <div class="bottom-links">
									<a href="<?php echo $path;?>hassan-lanewala"  class="profile">Full Profile</a>
									<a href="linkedin.com"  class="linkedin">LinkedIn</a>
							   </div>
								

								
                            </div>
                        </li>
						<li>
                            <div class="left">
                            <img src="<?php echo $basesurl;?>images/team1.jpg" alt="">
                            </div>
                            <div class="right">
								<div>
									<h3>Arsalan Khan Kakar</h3>
									<h6>Associate</h6>
								</div>
                                
                                <a href="mailto:team@lawoffices.com"  class="teammail"><i class="fa fa-envelope mr-2"></i>team@lawoffices.com</a>
                               <div class="bottom-links">
									<a href="<?php echo $path;?>arsalan-khan-kakar"  class="profile">Full Profile</a>
									<a href="linkedin.com"  class="linkedin">LinkedIn</a>
							   </div>								
                            </div>
                        </li>
					</ul>
				</div>				
			</div>
		</div>
	</section>
			
	
	<?php
			$footer = $_SERVER['HTTP_HOST']; 
			$footer = $srcurl."footer.php"; 
			include($footer); 
			?>

</body>

</html>