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
                    <h1>Aisha Awan</h1>
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
                    <p>Aisha Awan is an associate at Abbas & Kakar Law Offices, known for her commitment to justice and
                        excellence in legal representation. With hands-on experience in representing clients before
                        courts, Aisha has demonstrated her ability to handle a wide range of legal matters with
                        professionalism and confidence.
                    </p>
                    <p>Her work encompasses various areas of law, including civil, criminal, family, and constitutional
                        law. Her dedication to thorough research, meticulous case preparation, and strategic advocacy
                        ensures that her clients receive comprehensive and effective legal support.

                    </p>
                    <p>Aisha’s combination of courtroom experience and a client-centered approach makes her a valuable
                        member of the team. At Abbas & Kakar Law Offices, she continues to contribute to the firm’s
                        mission of delivering justice with integrity, compassion, and a steadfast commitment to the rule
                        of law.
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