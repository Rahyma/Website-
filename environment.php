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
                    <h1>Environmental</h1>
                    <h6>Practice Areas</h6>
                </div>
            </div>
        </div>
    </section>

    <section class="service-section practice">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <p>As environmental risks and regulations become increasingly global, our integrated practices serve as a strategic asset for our clients. Environmental human rights involves the recognition that existing human rights may be violated by adverse environmental conditions. The idea is that “damage to the environment can impair and undermine all the human rights spoken of in the Universal Declaration and other human rights instruments. Similarly, domestic courts have exposed the environmental dimensions of the right to life. Courts in Pakistan,for example, have repeatedly said the right to life in their constitutions includes the right to live in a safe and pollution-free environment</p>
                   
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