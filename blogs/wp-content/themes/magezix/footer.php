<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Magezix
 */

?>

    <?php // magezix_dark_switch();?>
    </div>
<?php 
// magezix_footer_option();?>
</div><!-- #page -->
<?php 
// wp_footer(); ?>
<?php 


  if ($_SERVER['HTTP_HOST'] == "localhost") {
      $folder_name = ""; $path = 'https://localhost/law-website/'.$folder_name;
  } else {
    $folder_name = ""; $path = 'https://'.$_SERVER['HTTP_HOST'].''.$folder_name.'/';
  }

  ?>
<footer class="footer-main">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="mb-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-logo.png"  alt="Logo">
          </a>
          <!-- <a href="<?php echo $path;?>" class="mb-5"> <img src="<?php echo $basesurl;?>images/footer-logo.png" alt="">
          </a> -->
          <ul  class="align-top">
                <li ><a href="<?php echo $path;?>">Careers</a> </li>
                <li><a href="<?php echo $path;?>">Customer Care</a></li>
                <li><a href="<?php echo $path;?>">News</a></li>

          </ul>
          <ul >
                <li ><a href="<?php echo $path;?>about">About Us </a> </li>
                <li><a href="<?php echo $path;?>practice-areas">Practice Area</a></li>
                <li><a href="<?php echo $path;?>team">Our Team</a></li>
                <li><a href="<?php echo $path;?>blogs">Legal Blogs</a></li>
              </ul>

       
      </div>
      <div class="col-md-8 p-3">
        <div class="right-footer">
            <h3>Ready to discuss your legal needs? Contact us to schedule a consultation.</h3>
          <div class="email-input mt-5 mb-3">
            <input type="email" placeholder="Enter your email here..." name="" id=""><button type="submit">Subscribe</button>
          </div>
            <input type="checkbox" name="age_confirm" required />
            <span>By checking the box, you agree that you are at least 16 years of age.</span>
            <h6 class="mt-10">©2024 Abbas & Kakar. All Rights Reserved.</h6>
        </div>
        
       <!-- lora -->
      </div>
    </div>
  </div>
</footer>

</body>
</html>
