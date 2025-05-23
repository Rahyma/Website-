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
    <section class="first-section team teamP">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Hassan Lanewala</h1>
                    <h6>Our Team.</h6>
                </div>
            </div>
        </div>
    </section>

    <section class="service-section team">
        <div class="container">
            <div class="row">
                <div class="col-md-5 ">

                    <img class=" mt-3" src="<?php echo $basesurl;?>images/team1.jpg" alt="">
                </div>
                <div class="col-md-7">
                    <h1 class="d-inline">Associate</h1>
                    <p>Hasan Lanewala is a dedicated advocate with a Bachelor of Laws from the University of London and a background in Mechanical Engineering from the University of Waterloo. Enrolled with the Sindh Bar Council, he brings experience in property law, trust matters, constitutional petitions, defamation, and transactional agreements. Hasan is committed to utilizing his legal expertise for positive societal impact, advocating for a just, equitable, and inclusive system.
                    </p>
                  
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