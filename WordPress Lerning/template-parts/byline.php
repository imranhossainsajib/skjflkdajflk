Form:<?php  the_author(); ?>(<?php the_author_posts() ?>)|
<?php  the_author_link() ?>|
<?php  the_author_posts_link() ?>|
<br>
<br>
Date:  <?php  the_date( 'F,j,Y' )  ?> 
<br>
Time:  <?php  the_time( 'F,j,Y' )  ?> 
<br>
<?php  esc_html_e('Categories: ','alihossain') ?>
<?php  the_category(', ','multiple')?>
<?php  the_tags('Tags: ',' | ')?>



