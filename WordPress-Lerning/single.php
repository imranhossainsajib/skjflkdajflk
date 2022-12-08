<?php
/*
* The template for displaying pages
*/ 
get_header(); ?>

  <section id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-9 post_page">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <?php if( !is_attachment()){
   the_title('<h2>','</h2>') ;
   the_shortlink('ShortLink');
   ?>
   <br>

<a href="<?php echo wp_get_shortlink(); ?>">Get ShortLink</a>

<?php get_template_part('template-parts/byline');}?>
 <?php the_content() ;?>
<!-- <p><?php esc_html_e( 'Meta information for this post:', 'alihossain' ); ?></p>
<?php the_meta(); ?> -->

 </article>
        </div>
        <div class="col-md-3">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </section>
  <h1>Template:single.php</h1>
  <?php get_footer(); ?>
  <?php


?>