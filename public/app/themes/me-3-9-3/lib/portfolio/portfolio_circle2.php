<?php
      
      $wpbp = new WP_Query(array(  'post_type' => 'portfolio', 'posts_per_page' =>'-1' ) );
      if ($wpbp->have_posts()) : while ($wpbp->have_posts()) : $wpbp->the_post();
      $terms = get_the_terms(  get_the_ID(), 'filter' );

?>

<li class="mix <?php foreach ($terms as $term) { echo  strtolower(preg_replace('/\s+/', '-', $term->slug)). ' '; } ?>">

    <?php
    global $custom_meta_fields, $post;
    $external_url = get_post_meta($post->ID, 'custom_project_page_url', true);
    $lightbox_image = get_post_meta($post->ID, 'custom_lightbox_image', true);
    ?>

    <?php if ( !$external_url && !$lightbox_image ) : ?><a href="<?php the_permalink(); ?>" class="information"><?php endif; ?>
    <?php if ( $external_url && !$lightbox_image ) : ?><a href="<?php echo esc_url( $external_url ); ?>"><?php endif; ?>
    <?php if ( $lightbox_image ) : ?><a href="<?php echo esc_url( $lightbox_image ); ?>" class="me_lightbox"><?php endif; ?>
    <div class="item_content">
         <!-- Image -->
         <?php
              if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) :
              the_post_thumbnail('portfolio');
              endif;
         ?>
    </div>
    </a>

</li>

<?php
      endwhile;
      endif;
      wp_reset_query();
?>