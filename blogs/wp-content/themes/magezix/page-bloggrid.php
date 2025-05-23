<?php
/**
 * Template Name: Blog Grid with Sidebar
 */

get_header(); ?>

<style>
   /* .blog-grid-wrapper {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 30px;
  margin-bottom: 40px;    margin-right: 5%;
}

.blog-card {
  background: #fff;
  border: 1px solid #d1cdcdd1;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
  overflow: hidden;
  display: flex;
  flex-direction: column;
}

.card-thumb {
  position: relative;
  overflow: hidden;
}
.card-thumb::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  background: linear-gradient(to right, rgba(0,0,0,0.25) 0%, rgba(0,0,0,0) 20%, rgba(0,0,0,0) 80%, rgba(0,0,0,0.25) 100%);
  z-index: 1;
}
.author-name {
    text-decoration: underline;    text-transform: capitalize;
}

.author img {
vertical-align: middle;
border-radius: 20%;
margin-right: 5px;
}
.card-thumb img {
  width: 100%;
  height: auto;
  display: block;
}

.card-title-overlay {
 position: absolute;
    bottom: 15px;
    left: 15px;
    right: 15px;
    color: #fff;
    padding: 10px 15px;
    font-size: 20px;
    font-weight: bold;
}

.card-title-overlay a {
  color: #fff;
  text-decoration: none;
}

.card-content {
  padding: 20px;
  background: #fff;
  color: #333;
}

.card-meta {
  font-size: 12px;
  color: #888;
  margin-bottom: 10px;
}

.card-excerpt {
  margin-bottom: 10px;
  font-size: 14px;
  line-height: 1.5;
}

.read-more {
  font-weight: bold;
  color: #0073aa;
  text-decoration: none;
}

.read-more:hover {
  text-decoration: underline;
}

@media (max-width: 992px) {
  .blog-grid-wrapper {
    grid-template-columns: 1fr;
  }
} */

</style>
<section class="first-section blogsbanner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 text-center">
							<h1>Publications & <br>Legal Blogs</h1>
							<h6>We provide services in a wide variety of practice areas
               </h6><br>
             <h6>  that support clients across many sectors : </h6>
				</div>				
			</div>
		</div>
	</section>
 <section class="heading-sort">
  <div class="container">
    <div class="col-md-12">
      <h1 class="service-heading mt-3 mb-3">News & Insights</h1>
      <div class="sort-button">
        <select id="sort-select">
          <option value="">sort by</option>
          <option value="newest">Newest</option>
          <option value="oldest">Oldest</option>
          <option value="az">Title</option>
        </select>
      </div>
      
    </div>
  </div>
</section>
<div class="container blog-grid-layout">
    
    <!-- Blog Grid -->
    <div class="blog-main-content" id="blog-posts-container"style="flex: 2;">
       
        <?php echo do_shortcode('[blog_grid_layout]'); ?>
    </div>

    <!-- Sidebar -->
    <aside class="blog-sidebar" style="flex: 1;">
        <?php if (is_active_sidebar('sidebar-1')) : ?>
            <?php dynamic_sidebar('sidebar-1'); ?>
        <?php else : ?>
            <p>Add widgets to Sidebar from Appearance > Widgets</p>
        <?php endif; ?>
    </aside>

</div>


<?php 

get_footer(); ?>
