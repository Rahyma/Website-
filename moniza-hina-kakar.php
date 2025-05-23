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
                    <h1>Moniza Hina Kakar</h1>
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
                    <h1 class="d-inline">Managing Partner</h1>
                    <p>Moniza Hina Kakar is an Advocate of the High Courts of Pakistan and a founding partner at Abbas &
                        Kakar Law Offices. She is known for her deep commitment to justice, equality, and human rights.
                        With years of experience in constitutional, criminal, family, and civil law. She is passionate
                        about using her legal expertise to make a meaningful impact in people’s lives.</p>
                    <p>Beyond her professional achievements, she is a strong advocate for marginalized communities,
                        including refugees and women facing systemic barriers. Her work in public interest litigation
                        has been at the forefront of promoting equality and fighting for those who are often unheard or
                        overlooked.
                    </p>
                    <p>Moniza’s approach to her work is grounded in compassion and a genuine desire to help her clients
                        navigate complex legal challenges. She believes in building strong, trusting relationships and
                        providing thoughtful, effective solutions tailored to each client’s needs.
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