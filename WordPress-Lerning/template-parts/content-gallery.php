<?php
get_header(); ?>

<header>
<span class="dashicons dashicons-format-<?php echo get_post_format($post->ID); ?>"></span>
<p><?php esc_html_e('Enjoy this Gallery post!!!');  ?></p>


<?php the_post_thumbnail() ?>
<?php the_title('<h1>','</h1>') ; ?>
<div>
  <?php esc_html_e('Author'); the_author(); ?>
</div>
</header>
<?php the_content() ;?>



<?php get_footer(); ?>
