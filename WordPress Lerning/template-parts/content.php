<?php
get_header(); ?>

<header>
<span class="dashicons dashicons-format-<?php echo get_post_format(); ?>"></span>
<p>
  <?php the_post_thumbnail() ?>
  <?php esc_html_e('Enjoy this Stander post!!!');  ?></p>
<?php the_title('<h2><a href="'.get_the_permalink().'" class="text-decoration-none text-danger">','</a></h2>') ; ?>
</header>

<?php the_content('Read More') ;?>



<?php get_footer(); ?>
