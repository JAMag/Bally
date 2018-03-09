<?php
/* Template Name: Full-width Template */
  get_header();
?>


  <!-- FEATURE IMAGE
  ================================================== -->
  <section class="feature-image feature-image-default" data-type="background" data-speed="2">
    <h1>Contact</h1>
  </section>
       
    <!-- MAIN CONTENT
  ================================================== -->
    <div class="container">
      <div class="row" id="primary">
      
        <div id="content" class="col-sm-12">
          
          <section class="main-content">
            <?php while ( have_posts() ) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; ?>
      
            
          </section>
          
        </div><!-- content -->
              
      </div><!-- primary -->
    </div><!-- container -->  


<?php
      get_footer();
?>