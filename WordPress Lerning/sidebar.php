<?php
/*
* Sidebar Area.
*/

?>

<?php
if(!is_user_logged_in()):?>
<?php wp_login_form() ?>

<?php else: ?>
  <p>
    <a class="btn btn-danger" href="<?php echo wp_logout_url(get_the_permalink()) ?>">
  <?php _e("Logout",'alihossain') ?>
  </a>
  </p>
  <?php endif;  ?>
<h5>
  <?php esc_html_e( 'List Author', 'alihossain') ?>
  <?php  wp_list_authors();  ?>
  <h3><?php  _e('Dropdown Authors','alihossain') ?></h3>
  <form action="<?php  bloginfo('url') ?>" method="get">
<?php  wp_dropdown_users(['name'=>'author']); ?>
<input type="submit" name="submit" value="View">
</form>
</h5>
<?php dynamic_sidebar( 'sideber-1'); ?>