     <!--* SLIDER *-->
     <?php if ( !get_option('home_video') ) : ?>
     <div id="slider_wrapper">

          <div id="slider">

               <ul class="slides">

               <?php $wpbp = new WP_Query(array(  'post_type' => 'me_slider', 'posts_per_page' =>'-1' ) ); ?>
               <?php if ($wpbp->have_posts()) :  while ($wpbp->have_posts()) : $wpbp->the_post(); ?>
                     
                     <li>
                               <?php
                               global $slider_meta_fields, $post;

                               $slider_caption = get_post_meta($post->ID, 'slider_caption', true);
                               $slider_link = get_post_meta($post->ID, 'slider_link', true);
                               $slider_video = get_post_meta($post->ID, 'slider_video', true);
                               ?>
                               <?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) :  ?>
                                     <?php if ( $slider_link && !$slider_video ) : ?>
                                           <a href="<?php echo esc_url( $slider_link ); ?>">
                                           <?php the_post_thumbnail('me_slider'); ?>
                                           </a>
                                     <?php endif; ?>
                                     <?php if ( !$slider_link && !$slider_video ) : ?>
                                           <?php the_post_thumbnail('me_slider'); ?>
                                     <?php endif; ?>

                                     <?php if ( $slider_caption && !$slider_video ) : ?>
                                           <p class="flex-caption">
                                           <?php echo esc_attr( $slider_caption ); ?>
                                           </p>
                                     <?php endif; ?>

                               <?php elseif ( $slider_video ) : ?>
                                     <?php echo $slider_video; ?>
                               <?php endif; ?>

                     </li>
               
               <?php endwhile; endif; ?>
               <?php wp_reset_query(); ?>
               </ul>

          </div>

     </div>
     <?php else : ?>
     <div id="video_wrapper">
          <?php echo get_option('home_video'); ?>
     </div>
     <?php endif; ?>
     <!--* END SLIDER *-->