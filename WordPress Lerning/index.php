<?php
/*
* The main template file
*/ 
get_header(); 
$filetype = wp_check_filetype('image.jpg');
echo $filetype['ext']; // will output jpg
print_r($filetype);
$html = '<strong>I am not strong</strong>';
var_dump($html);
//output '<strong>I am not strong</strong>'

var_dump(wp_strip_all_tags($html));
//output 'I am not strong'
?>




  <section id="body_area">
    <div class="container">
      <div class="row">
      <div class="col-md-9 post_page">
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
          <?php get_search_form(); ?>
          
          <?php get_sidebar(); ?>
        </div>
      </div>
      <?php  echo paginate_links();    ?>
      </div>
    </div>
  </section>
<h1>Template:index.php</h1>
  <?php get_footer(); ?>