<header>
<?php the_title('<h2><a href="'.get_the_permalink().'">','</a></h2>') ?>
<a href="<?php the_permalink() ; ?>">
  <?php the_post_thumbnail('medium') ; ?>
</a>
</header>
<?php the_excerpt();  ?>
