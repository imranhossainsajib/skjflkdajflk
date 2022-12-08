
<?php
/*
* The template for displaying Archive Pages
*/ 
get_header(); ?>

  <section id="body_area">
    <div class="container">
      <div class="row">
      <div id="archive_title">
              <?php
                  the_archive_title('<h3 class="title h1">','</h3>');
                  the_author_description('<div class="description">', '</div>');
              ?>
            </div> 
      <?php if (have_posts()) :
              while (have_posts()) : the_post(); ?>
        <div class="col-md-6">
          
            

            <?php get_template_part('template-parts/content','portfolio'); ?>
        </div>
        <?php endwhile; endif;?>
      </div>
    </div>
  </section>
  <h1>Template:taxonomy-skills-php.php</h1>
  <?php get_footer(); ?>