<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Magezix
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="magezix-site-content">
	<div class="magezix-main-wrap">
	
<?php 
// magezix_backto_top(); magezix_preloader(); magezix_header_opt();?>
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
          <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-a">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="logo" alt="Logo">
          </a>


          <!-- <a href="<?php echo $path;?>" class="logo-a">
            <img src="<?php echo $basesurl;?>images/logo.png" class="logo" alt="">
          </a> -->

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


