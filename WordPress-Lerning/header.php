<?php
/*
* This template for displaying the header
*/
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="<?php echo get_template_directory_uri(); ?>/test.css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header id="header_area" class="<?php echo get_theme_mod('ali_menu_position'); ?>">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('ali_logo'); ?>" alt=""></a>
        </div>
        <div class="col-md-9">

<?php 
 $arge = array(
  'theme_location'       => 'main_menu',
  'menu'                 => 'Main Menu',
  'container'            => 'div',
  'container_class'      => 'container-class',
  'container_id'         => 'container-id',
  // 'container_aria_label' => 'Menu Label',
  'menu_class'           => 'items-wrap-class',
  'menu_id'              => 'items-wrap-id',
  'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>','fallback_cb'          => 'wp_page_menu',
  // 'item_spacing'         => 'discard',
  'depth'                => 0,
  // 'walker'               => '',
  'fallback_cb'          => 'wp_page_menu',
);
wp_nav_menu($arge);


?>






        

        </div>
      </div>
    </div>
  </header>