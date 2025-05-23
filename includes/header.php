<?php 


  if ($_SERVER['HTTP_HOST'] == "localhost") {
      $folder_name = ""; $path = 'https://localhost/law-website/'.$folder_name;
  } else {
    $folder_name = ""; $path = 'https://'.$_SERVER['HTTP_HOST'].''.$folder_name.'/';
  }

  ?>

<header class="header-section">
  <nav class="navbar-expand-lg sticky">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 m-auto">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="top">
                <li class="navbar-nav"><a class="navbar-link" href="<?php echo $path;?>about">ABOUT US </a> </li>
                <li class="navbar-nav"><a class="navbar-link" href="<?php echo $path;?>practice-areas">PRACTICE AREAS</a></li>
                <li class="navbar-nav"><a class="navbar-link" href="<?php echo $path;?>team">OUR TEAM</a></li>
                <li class="navbar-nav"><a class="navbar-link" href="<?php echo $path;?>blogs/">LEGAL BLOGS</a></li>
                <div class="" >
                    <ul>
                      <li class="navbar-nav"><a class="navbar-link" href="<?php echo $path;?>contact">CONTACT</a></li>

                    </ul>
                    <a href="tel:+923311074249" class="main-button"><i class="fa fa-phone mr-2"></i>Call Now</a>
                </div>
              </ul>
           </div>
        </div>
        <div class="col-md-2 text-center">
          <a href="<?php echo $path;?>" class="logo-a">
            <img src="<?php echo $basesurl;?>images/logo.png" class="logo" alt="">
          </a>

          <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" id="bar"></i> 
          </button>
        </div>
        <div class="col-md-5 m-auto">
            <div class="collapse navbar-collapse float-right" >
              <ul>
                <li><a href="<?php echo $path;?>contact">CONTACT</a></li>

              </ul>
              <a href="tel:+923311074249" class="main-button"><i class="fa fa-phone mr-2"></i>Call Now</a>
           </div>
        </div>
       
      
      </div>

    </div>

  </nav>
</header>
<button class="scroll-top" ><i class="fa fa-arrow-up"></i></button>

<!-- <a class="whatsapp" href="https://wa.link/x71k07"><i class="fa fa-whatsapp"></i></a> -->