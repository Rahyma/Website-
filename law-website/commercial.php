<!doctype html>
<html lang="en">

<head>
    <title>Services | Abbas & Kakar Law Offices
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
    <section class="first-section practice">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Corporate & Commercial</h1>
                    <h6>Practice Areas</h6>
                </div>
            </div>
        </div>
    </section>

    <section class="service-section practice">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>At Abbas & Kakar Law Offices, we offer a wide range of corporate and commercial law services
                        tailored to meet the needs of multinational and local clients. Our experienced team provides
                        expert legal guidance in the following areas:</p>

                    <h5>Corporate Advisory Services</h5>
                    <p>We assist in the setup of private, public, and listed companies, branches, and liaison offices,
                        as well as in liquidating and converting business entities. We also advise on capital increases
                        and share issuance.</p>

                    <h5>Corporate Housekeeping</h5>
                    <p>Our services include drafting board resolutions, powers of attorney, and filing statutory
                        returns, ensuring compliance with public disclosure requirements for listed companies.</p>

                    <h5>Contract Drafting and Negotiation</h5>
                    <p>We specialize in drafting various agreements, including license, franchise, services,
                        confidentiality, and construction agreements, tailored to meet our clients' needs.</p>

                    <h5>Compliance and Due Diligence</h5>
                    <p>We provide advice on relevant legislation, conduct compliance reviews, and handle due diligence
                        projects to identify legal risks in areas such as antitrust and data protection.</p>

                    <p>With a commitment to excellence and a deep understanding of the corporate landscape in Pakistan,
                        Abbas & Kakar Law Offices is your trusted partner for corporate and commercial legal services.
                        Contact us today to see how we can help you navigate the complexities of corporate law.</p>
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