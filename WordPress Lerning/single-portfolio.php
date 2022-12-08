<?php
/*
* The template for displaying Archive Pages
*/ 
get_header(); ?>


    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-2">
        <header>
<?php the_title('<h2>','</h2>') ?>
</header>
<a href="<?php the_permalink() ; ?>">
  <?php the_post_thumbnail('full') ; ?>
</a>
<?php the_content();?>





<a href="#" class="btn btn-primary">
      <?php esc_html_e("Visit The Site",'alihossain') ?>
    </a>
    <h1>Template:single-Portfolio.php</h1>
        </div>
      </div>
      
      
      
    </div>

  
  <?php get_footer(); ?>