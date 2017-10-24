<?php
      
      $wpbp = new WP_Query(array(  'post_type' => 'portfolio', 'posts_per_page' =>'-1' ) );
      if ($wpbp->have_posts()) : while ($wpbp->have_posts()) : $wpbp->the_post();
      $terms = get_the_terms(  get_the_ID(), 'filter' );
      global $custom_meta_fields, $post;
      $project_link = get_post_meta($post->ID, 'custom_project_link', true);
      $external_url = get_post_meta($post->ID, 'custom_project_page_url', true);
      $lightbox_image = get_post_meta($post->ID, 'custom_lightbox_image', true);

?>

<li class="mix <?php foreach ($terms as $term) { echo  strtolower(preg_replace('/\s+/', '-', $term->slug)). ' '; } ?>">

    <div class="item_content">
         <!-- Image -->
         <?php
              if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) :
              the_post_thumbnail('portfolio');
              endif;
         ?>

         <div class="hidden">
              <div class="hidden_content">

              <!-- Item title -->
              <p><?php echo get_the_title();  ?></p>

              <!-- Link to the site -->
              <?php if ( !$project_link && !$external_url && !$lightbox_image ) : ?><a href="<?php the_permalink(); ?>" class="information info_center"></a><?php endif; ?>
              <?php if (  $project_link && !$external_url && !$lightbox_image ) : ?><a href="<?php the_permalink(); ?>" class="information"></a><a href="<?php echo esc_url( $project_link ); ?>" class="link" target="_blank"></a><?php endif; ?>
              <?php if (  $project_link && $external_url && !$lightbox_image  ) : ?><a href="<?php the_permalink(); ?>" class="information"></a><a href="<?php echo esc_url( $external_url ); ?>" class="link"></a><?php endif; ?>
              <?php if ( !$project_link && $external_url && !$lightbox_image  ) : ?><a href="<?php the_permalink(); ?>" class="information"></a><a href="<?php echo esc_url( $external_url ); ?>" class="link"></a><?php endif; ?>
              <?php if (  $project_link && $external_url && $lightbox_image   ) : ?><a href="<?php the_permalink(); ?>" class="information"></a><a href="<?php echo esc_url( $lightbox_image ); ?>" class="mlightbox me_lightbox"></a><?php endif; ?>
              <?php if (  $project_link && !$external_url && $lightbox_image  ) : ?><a href="<?php the_permalink(); ?>" class="information"></a><a href="<?php echo esc_url( $lightbox_image ); ?>" class="mlightbox me_lightbox"></a><?php endif; ?>
              <?php if ( !$project_link && $external_url && $lightbox_image   ) : ?><a href="<?php the_permalink(); ?>" class="information"></a><a href="<?php echo esc_url( $lightbox_image ); ?>" class="mlightbox me_lightbox"></a><?php endif; ?>
              <?php if ( !$project_link && !$external_url && $lightbox_image  ) : ?><a href="<?php the_permalink(); ?>" class="information"></a><a href="<?php echo esc_url( $lightbox_image ); ?>" class="mlightbox me_lightbox"></a><?php endif; ?>
              </div>
         </div>
    </div>

</li>

<?php
      endwhile;
      endif;
      wp_reset_query();
?>