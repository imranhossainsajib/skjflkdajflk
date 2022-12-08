<?php
/*
* The template for displaying Search Resealt
*/ 
get_header(); ?>
<h1>Template:Search.php</h1>
  <section id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
            <div id="search_title">
              <h3 class="h1"><?php  esc_html_e('Search For','alihossain') ?>
              : "<?php  echo get_search_query(); ?>"</h3>
            </div>
            <?php if (have_posts()) :
              while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content','search'); ?>

              

            <?php endwhile; endif;?>
          <?php get_template_part('template-parts/content','none'); ?>
        </div>
        <div class="col-md-3">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </section>
  
  <?php get_footer(); ?>