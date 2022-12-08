<?php
//Template Name:Others-Post
get_header();
?>
<h1> This is Others-Post</h1>

<?php
    $args = array(  
      'post_type' => 'Others',
      'post_status' => 'publish',
      'posts_per_page' => 4, 
      'orderby' => 'title', 
      'order' => 'ASC', 
      'meta_key'=>'start_date',
      'meta_query'=>array(
        array(
          'key'=>'start_date',
          'value'=>date('Y-m-d'),
          'compare'=>'>=',
          'type'=>'DATE'
        )
      )
  );

  $loop = new WP_Query( $args ); 
      
  while ( $loop->have_posts() ) : $loop->the_post();
  echo "<h1>".date('Y-m-d')."</h1>";
    $term_obj_list=get_the_terms(get_the_ID(),'Custom-Tax');
    // print_r($term_obj_list);
    echo join(',',wp_list_pluck($term_obj_list,'name'));
      //  print_r(wp_list_pluck($term_obj_list,'name'));
      // echo wp_list_pluck();
  
       the_title('<h1>','</h1>'); 
       the_content('<p>','</p>'); 
     $start_Date=  get_field('start_date');
     $end_Date= get_field('end_date');
     ?>
     <ul>
       <li><?php echo $start_Date ?></li>
       <li><?php echo $end_Date ?></li>
     </ul>
     
     <?php
  endwhile;

  wp_reset_postdata(); 
?>

<?php
get_footer();


?>