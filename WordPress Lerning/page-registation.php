<?php
get_header();


global $wpdb;

if ($_POST) {

    $username = $wpdb->escape($_POST['username']);
    $email = $wpdb->escape($_POST['useremail']);
    $password = $wpdb->escape($_POST['password']);
    $ConfPassword = $wpdb->escape($_POST['password2']);

    $error = array();
    if (strpos($username, ' ') !== FALSE) {
        $error['username_space'] = "Username has Space";
    }

    if (empty($username)) {
        $error['username_empty'] = "Needed Username must";
    }

    if (username_exists($username)) {
        $error['username_exists'] = "Username already exists";
    }

    if (!is_email($email)) {
        $error['email_valid'] = "Email has no valid value";
    }

    if (email_exists($email)) {
        $error['email_existence'] = "Email already exists";
    }

    if (strcmp($password, $ConfPassword) !== 0) {
        $error['password'] = "Password didn't match";
    }

    if (count($error) == 0) {

        wp_create_user($username, $password, $email);
        echo "User Created Successfully";
        exit();
    } else {

        print_r($error);
    }
}
?>



<form method="post">
    <label for="username">Enter Your Username</label>
    <input type="text" id="username" name="username">
    <label for="useremail">Enter Your Useremail</label>
    <input type="email" id="useremail" name="useremail">
    <label for="password">Enter Your Password</label>
    <input type="password" id="password" name="password">
    <label for="password2">Enter Your Confirm Password</label>
    <input type="password" id="password2" name="password2">
    <br>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>
<br>
<br>
<?php
$all_term=get_terms("course");
// echo "<pre>";
// print_r($all_term);
foreach($all_term as $term){
$args=array(
    'post_type'=>'post',
    'tax_query'=>array(
        array(
            'taxonomy'=>'course',
            'field'=>'slug',
            'terms'=>$term->slug
        ),
      ),
    );
    // echo "<pre>";
    // print_r($args);
    $loop=new WP_Query($args);
    if ($loop->have_posts())  :
        echo "<h2>".$term->name."</h2>";
        while ($loop->have_posts()) : 
        $loop->the_post(); ?>

<article <?php post_class(); ?>> 
      <?php the_title('<h2><a href="'.get_the_permalink().'" class="text-decoration-none text-danger">','</a></h2>') ; ?>
      <br>
<a href="<?php  the_permalink() ?>" title="<?php  the_title_attribute(); ?>">Read More</a>
</header>

<?php the_content('Read More') ;?>
      
      </article>
  
  <?php endwhile; endif;
}



?>



<h1>This is page-reigstation.php</h1>
<?php
get_footer();
?>