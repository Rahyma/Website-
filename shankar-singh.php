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
                    <h1>Shankar Singh</h1>
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
                    <h1 class="d-inline">Partner</h1>
                    <p>Shankar Singh is a dedicated advocate and partner at Abbas & Kakar Law Offices. With experience
                        in civil, criminal and family laws, he has built a reputation for delivering practical and
                        effective legal solutions.
                    </p>
                    <p>Shankar is passionate about helping his clients navigate the complexities of the legal system.
                        Whether representing individuals, families, he approaches each case with care, professionalism,
                        and a commitment to achieving the best possible outcomes. Beyond his practice, Shankar has been
                        a strong advocate for social justice, contributing to public interest litigation and standing up
                        for marginalized communities.

                    </p>
                    <p>Shankar ensures his clients feel supported and well-represented every step of the way. At Abbas &
                        Kakar Law Offices, he’s not just a lawyer but also a trusted partner, dedicated to making a
                        difference for his clients and the broader community.
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