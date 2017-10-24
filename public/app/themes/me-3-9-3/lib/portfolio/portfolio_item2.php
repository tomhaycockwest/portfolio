     <div class="item" id="me-item">
          
          <!-- Close button -->
          <a href="#" class="close"></a>

          <!-- PORFTOLIO DESCRIPTION -->
          <div class="details2">

               <div class="row">
                    <?php 
                    while ( have_posts() ) : the_post();
                          the_content();
                    endwhile;
                    ?>
               </div>

          <div class="clear"></div>
          </div>
          <!-- END PORFTOLIO DESCRIPTION -->

          <!-- SLIDER -->
          <div class="slideshow_wrapper">

                    <?php
                    global $custom_meta_fields, $post;

                    foreach ($custom_meta_fields as $field) {
                              
                              $youtube_content = get_post_meta($post->ID, 'custom_youtube', true);
                              $vimeo_content = get_post_meta($post->ID, 'custom_vimeo', true);
                              $slider_content = get_post_meta($post->ID, 'custom_repeatable', true);
                              $sound_content = get_post_meta($post->ID, 'custom_soundcloud', true);
                              
                              if ($field['type'] == 'soundcloud') {
                                 if ($sound_content) {
                                    echo '<div class="soundcloud">';
                                    echo do_shortcode( $sound_content );
                                    echo '</div>';
                                 }
                              }

                              if ($field['type'] == 'youtube' && !$sound_content) {
                                  if ($youtube_content) {
                                     echo '<div class="item_video">';
                                     echo do_shortcode( $youtube_content );
                                     echo '</div>';
                                  }
                              }

                              if ($field['type'] == 'vimeo' && !$youtube_content && !$sound_content) {
                                  if ($vimeo_content) {
                                     echo '<div class="item_video">';
                                     echo do_shortcode( $vimeo_content );
                                     echo '</div>';
                                  }
                              }

                              if ($field['type'] == 'repeatable' && !$youtube_content && !$vimeo_content && !$sound_content) {
                                 if ( !empty($slider_content[100]) ) {
                                         $i = 0;
                                         echo '<div class="slideshow">';
                                         echo '<ul class="slides">';
                                         foreach($slider_content as $row) {
                                                       echo '<li>';
                                                       echo '<img src="'.$row.'" alt="" />';
                                                       echo '</li>';
                                                       $i++;
                                                       }
                                         echo '</ul>';
                                         echo '</div>';
                                         }
                              }
                        } // end foreach
                        ?>
          </div>
          <!-- END SLIDER -->

     <div class="clear"></div>
     </div>