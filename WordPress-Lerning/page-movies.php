<?php

get_header(); ?>


<section id="body_area">
    <div class="container">
      <div class="row">
      <div class="col-md-9 post_page">
        <?php
$query=new WP_Query(array("post_type"=>"movie"));
        if ($query->have_posts()) :
        while ($query->have_posts()) : 
        $query->the_post(); 
        ?>

            
  <?php the_title('<h2><a href="'.get_the_permalink().'" class="text-decoration-none text-danger">','</a></h2>') ; ?>
    
    <br>

<a href="<?php  the_permalink() ?>" title="<?php  the_title_attribute(); ?>">Read More</a>
</header>

<?php the_content('Read More');?>
 <p>Movie Category: <?php echo get_post_meta(get_the_ID(),'movie_select_category',true) ?></p>       
        <?php endwhile; endif;?>
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

  
<h1>Template:Movie Page</h1>



  <?php get_footer(); ?>