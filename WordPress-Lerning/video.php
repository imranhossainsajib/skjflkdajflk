<?php
/*
* The template for displaying Archive Pages
*/ 
get_header(); ?>

<div class="container">
<?php if (have_posts()) :
              while (have_posts()) : the_post(); ?>
<header>
<?php the_title('<h3>','</h3>') ; ?>
<p>Post-<?php the_ID()?></p>
</header>
<body>
  <?php  the_content() ;?>
  <video src="<?php echo esc_url($post->guid) ; ?>" controls></video>
  
 

</body>


<?php endwhile; endif;?>
<?php get_template_part('template-parts/content','none'); ?> 
</div>
<h1>Template:Video.php</h1>

<?php get_footer(); ?>