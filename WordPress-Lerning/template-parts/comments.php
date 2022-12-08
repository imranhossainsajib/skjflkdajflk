<?php
if ( post_password_required() ) {
	return;
}
?>
<div id="comments">

	<?php
	if ( have_comments() ) :

    $comments_total = get_comments_number($post->ID);
if(1==$comments_total);
		?>
<h2>
 <?php esc_html_e('1 comment','alihossain') ?> 
</h2>
<?php  else:  ?>
  <h2>
 <?php esc_html_e($comments_total.'Comments','alihossain') ?> 
</h2> 
<?php  endif;  ?>
<?php  
 $args=[
  'callback'=>'wptags_comment'
]; 
  wp_list_comments($args);
  paginate_comments_links();
  ?>
  

    <?php if ( ! comments_open() ) : ?>
      <?php comment_form() ?>
      <?php else: ?>
        <p><?php esc_html_e('comments closed','alihossain') ?></p>
        <?php  endif;  ?>
</div>