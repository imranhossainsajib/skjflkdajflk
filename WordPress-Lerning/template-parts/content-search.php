<?php
get_header(); ?>

<header>

<h2>
  <?php esc_html_e('Enjoy this Search post!!!');  ?>
  <a href="<?php the_permalink();  ?>">
<?php echo get_post_type($post);    ?>
<?php echo get_the_title();    ?>
</a>
</h2>

</header>
<?php the_content() ;?>



<?php get_footer(); ?>
