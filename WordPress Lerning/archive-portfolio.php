<?php
/*
* The template for displaying Archive Pages
*/ 
get_header(); ?>

  <section id="body_area">
    <div class="container">
      <?php  bloginfo('name')  ?>
      <br>
      <?php  bloginfo('description')  ?>
      <br>
      <?php  bloginfo('url')  ?>
      <br>
      <?php  $site_url=get_bloginfo('url') ?>
      <?php  echo $site_url; ?>
      
      <div class="row">
      <?php if (have_posts()) :
              while (have_posts()) : the_post(); ?>
        <div class="col-md-6">
        
        <?php get_template_part('template-parts/content','portfolio'); ?>

        

        </div>
        <?php endwhile; endif;?>
      </div>
      <?php echo paginate_links() ?>
    </div>
  </section>
  <h1>Template:Archive-Portfolio.php</h1>
  <?php get_footer(); ?>