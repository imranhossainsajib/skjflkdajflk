<?php
/*
* The main template file
*/ 
get_header(); ?>

  <section id="body_area">
    <div class="container">
      <div class="row">
      <div class="col-md-9 post_page">
        <h1><?php  the_archive_title() ?></h1>
        <?php if (have_posts()) :
              while (have_posts()) : the_post(); ?>

            <article <?php post_class(); ?>>
            <!-- author,date etc -->
            <?php get_template_part('template-parts/byline'); ?> 
            
            <br>
            <!-- the title ,content, thumbnail etc -->
  <?php get_template_part('template-parts/content',get_post_format()); ?>
            <br>
<a href="<?php  the_permalink() ?>" title="<?php  the_title_attribute(); ?>">Read More</a>
</header>
     
            </article>
        
        <?php endwhile; endif;?>
        <!-- commenc er jonno -->
          <?php get_template_part('template-parts/content','none'); ?>
            
        </div>
        <div class="col-md-3">
          <?php get_sidebar(); ?>
        </div>
      </div>
      <?php  echo paginate_links();    ?>
      </div>
    </div>
  </section>
<h1>Archive.php</h1>
  <?php get_footer(); ?>