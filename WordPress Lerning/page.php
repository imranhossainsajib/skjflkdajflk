<?php
/*
* The template for displaying pages
*/ 
get_header(); 
?>
<?php
global $post;
if(has_action('my_custom_hook')){
  do_action('my_custom_hook',array('page_id'=>$post->ID
  ));
}
?>

  <section id="body_area">
    <div class="container">
      <div class="row">
      
<h1><?php the_content(); ?></h1>
  <?php
// if(has_filter('my_custom_filter')){
// apply_filters('my_custom_filter',array('content'=> get_the_content()));
  // apply_filters( $hook_name:string, $value:mixed )
  // }
  
  ?>
      </div>
    </div>
  </section>
  <h1>This is Theme Footer</h1>
  <?php dynamic_sidebar( 'footer-1' ); ?>
<h1>Template:Theme-page.php</h1>
  <?php get_footer(); ?>