<?php
get_header();
require_once(ME_MISC . '/multi_page_navigation.php');
?>

<div id="service_content">

     <?php
     
     global $service_meta_fields, $post;
     $service_slides = get_post_meta($post->ID, 'service_slides', true);

     if ( !empty($service_slides[100]) ) {
           $i = 0;
           echo '<div class="service-slideshow"><div class="slideshow">';
                echo '<ul class="slides">';
                     foreach($service_slides as $row) {
                             echo '<li>';
                             echo '<img src="'.$row.'" alt="" />';
                             echo '</li>';
                             $i++;
                     }
                echo '</ul>';
           echo '</div></div>';
     }
     ?>

     <h3><?php echo get_the_title();  ?></h3>

     <?php
     while ( have_posts() ) : the_post();
         the_content();
     endwhile;
     ?>
     
     <a href="" id="close_service">X</a>

</div>

<?php get_footer(); ?>
     



