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
                    <h1>Arsalan Khan Kakar</h1>
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
                    <p>Arsalan Khan Kakar is a dedicated law student and an associate at Abbas & Kakar Law Offices. With
                        a passion for justice and a keen interest in human rights and public interest litigation,
                        Arsalan is committed to making a meaningful contribution to the legal field.</p>

                    <p>As an aspiring lawyer, Arsalan brings fresh perspectives and a strong work ethic to the firm,
                        assisting in a variety of legal matters ranging from civil and criminal law to constitutional
                        and refugee rights cases. He is deeply involved in legal research and case preparation, ensuring
                        that every client receives thorough and well-informed representation.</p>

                    <p>Arsalan’s drive to learn and grow within the legal profession is matched by his compassion and
                        commitment to serving those in need. At Abbas & Kakar Law Offices, he plays a vital role in
                        supporting the team’s mission to uphold the rule of law and advocate for marginalized
                        communities.</p>

                    <p>Arsalan’s dedication, curiosity, and enthusiasm make him a valuable part of our team, and he
                        continues to grow as a promising future advocate.</p>
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