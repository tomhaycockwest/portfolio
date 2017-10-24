          <div id="service_blocks">

               <?php
               global $more;
               $more = 0;
               $services = new WP_Query(array(  'post_type' => 'service', 'posts_per_page' =>'-1' ) );
               if ($services->have_posts()) :
               while ($services->have_posts()) : $services->the_post(); $more = 0;
               //variables
               $post_content = get_the_content();
               $custom_link = get_post_meta($post->ID, 'service_custom_link', true);
               ?>
               <div class="service">

                    <!-- Icon ( big circle )-->
                    <?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) : ?>
                    
                          <?php if ( $post_content && !$custom_link  ) : ?><a href="<?php the_permalink(); ?>" class="open-service"><div class="service_thumb"><?php  the_post_thumbnail('service'); ?></div></a><?php endif; ?>
                          <?php if ( $custom_link  ) : ?><a href="<?php echo esc_url( $custom_link ); ?>"><div class="service_thumb"><?php  the_post_thumbnail('service'); ?></div></a><?php endif; ?>
                          <?php if ( !$post_content && !$custom_link  ) : ?><div class="service_thumb"><?php the_post_thumbnail('service'); ?></div><?php endif; ?>

                    <?php else : ?>
                    
                          <?php if ( $post_content && !$custom_link ) : ?><a href="<?php the_permalink(); ?>" class="open-service"><?php endif; ?>
                          <?php if ( $custom_link ) : ?><a href="<?php echo esc_url( $custom_link ); ?>"><?php endif; ?>
                          <div class="icon_container">
                               <div class="icon">
                                    <?php
                                    $images_directory = get_template_directory_uri();
                                    $predefined_icon = get_post_meta($post->ID, 'service_icon', true);
                                    $custom_icon = get_post_meta($post->ID, 'service_custom_icon', true);
                                    $icon_width = get_post_meta($post->ID, 'service_icon_width', true);
                                    $icon_height = get_post_meta($post->ID, 'service_icon_height', true);
                                    
                                    //Custom icon and its variations
                                    if ($custom_icon && !$icon_width && !$icon_height) { echo '<img src="'.$custom_icon.'" />'; }
                                    if ($custom_icon && $icon_width && !$icon_height) { echo '<img src="'.$custom_icon.'" width="'.$icon_width.'" />'; }
                                    if ($custom_icon && !$icon_width && $icon_height) { echo '<img src="'.$custom_icon.'" height="'.$icon_height.'" />'; }
                                    if ($custom_icon && $icon_width && $icon_height) { echo '<img src="'.$custom_icon.'" width="'.$icon_width.'" height="'.$icon_height.'" />'; }
                                    
                                    //Predefined icon
                                    if ($predefined_icon && $predefined_icon == "android" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/android.png" width="46" height="54" />'; }
                                    if ($predefined_icon && $predefined_icon == "android_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/android_white.png" width="46" height="54" />'; }
                                    if ($predefined_icon && $predefined_icon == "repair" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/repair.png" width="66" height="63" />'; }
                                    if ($predefined_icon && $predefined_icon == "repair_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/repair_white.png" width="66" height="63" />'; }
                                    if ($predefined_icon && $predefined_icon == "revision" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/revision.png" width="45" height="62" />'; }
                                    if ($predefined_icon && $predefined_icon == "revision_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/revision_white.png" width="45" height="62" />'; }
                                    if ($predefined_icon && $predefined_icon == "seo" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/seo.png" width="51" height="53" />'; }
                                    if ($predefined_icon && $predefined_icon == "seo_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/seo_white.png" width="51" height="53" />'; }
                                    if ($predefined_icon && $predefined_icon == "settings" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/settings.png" width="60" height="50" />'; }
                                    if ($predefined_icon && $predefined_icon == "settings_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/settings_white.png" width="60" height="50" />'; }
                                    if ($predefined_icon && $predefined_icon == "statistics" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/statistics.png" width="59" height="51" />'; }
                                    if ($predefined_icon && $predefined_icon == "statistics_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/statistics_white.png" width="59" height="51" />'; }
                                    if ($predefined_icon && $predefined_icon == "statistics2" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/statistics2.png" width="58" height="58" />'; }
                                    if ($predefined_icon && $predefined_icon == "statistics2_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/statistics2_white.png" width="58" height="58" />'; }
                                    if ($predefined_icon && $predefined_icon == "telemarketing" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/telemarketing.png" width="62" height="42" />'; }
                                    if ($predefined_icon && $predefined_icon == "telemarketing_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/telemarketing_white.png" width="62" height="42" />'; }
                                    if ($predefined_icon && $predefined_icon == "time" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/time.png" width="55" height="64" />'; }
                                    if ($predefined_icon && $predefined_icon == "time_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/time_white.png" width="55" height="64" />'; }
                                    if ($predefined_icon && $predefined_icon == "time2" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/time2.png" width="53" height="56" />'; }
                                    if ($predefined_icon && $predefined_icon == "time2_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/time2_white.png" width="53" height="56" />'; }
                                    if ($predefined_icon && $predefined_icon == "webdesign" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/webdesign.png" width="62" height="60" />'; }
                                    if ($predefined_icon && $predefined_icon == "webdesign_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/webdesign_white.png" width="62" height="60" />'; }
                                    if ($predefined_icon && $predefined_icon == "wp" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/wp.png" width="58" height="56" />'; }
                                    if ($predefined_icon && $predefined_icon == "wp_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/wp_white.png" width="58" height="56" />'; }
                                    if ($predefined_icon && $predefined_icon == "writing" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/writing.png" width="60" height="57" />'; }
                                    if ($predefined_icon && $predefined_icon == "writing_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/writing_white.png" width="60" height="57" />'; }
                                    if ($predefined_icon && $predefined_icon == "design" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/design.png" width="61" height="54" />'; }
                                    if ($predefined_icon && $predefined_icon == "design_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/design_white.png" width="61" height="54" />'; }
                                    if ($predefined_icon && $predefined_icon == "drupal" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/drupal.png" width="57" height="63" />'; }
                                    if ($predefined_icon && $predefined_icon == "drupal_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/drupal_white.png" width="57" height="63" />'; }
                                    if ($predefined_icon && $predefined_icon == "ecommerce" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/ecommerce.png" width="60" height="46" />'; }
                                    if ($predefined_icon && $predefined_icon == "ecommerce_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/ecommerce_white.png" width="60" height="46" />'; }
                                    if ($predefined_icon && $predefined_icon == "email" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/email.png" width="56" height="36" />'; }
                                    if ($predefined_icon && $predefined_icon == "email_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/email_white.png" width="56" height="36" />'; }
                                    if ($predefined_icon && $predefined_icon == "event" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/event.png" width="56" height="56" />'; }
                                    if ($predefined_icon && $predefined_icon == "event_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/event_white.png" width="56" height="56" />'; }
                                    if ($predefined_icon && $predefined_icon == "film" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/film.png" width="64" height="46" />'; }
                                    if ($predefined_icon && $predefined_icon == "film_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/film_white.png" width="64" height="46" />'; }
                                    if ($predefined_icon && $predefined_icon == "ipad" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/ipad.png" width="52" height="58" />'; }
                                    if ($predefined_icon && $predefined_icon == "ipad_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/ipad_white.png" width="52" height="58" />'; }
                                    if ($predefined_icon && $predefined_icon == "parts" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/parts.png" width="44" height="52" />'; }
                                    if ($predefined_icon && $predefined_icon == "parts_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/parts_white.png" width="44" height="52" />'; }
                                    if ($predefined_icon && $predefined_icon == "photography" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/photography.png" width="60" height="52" />'; }
                                    if ($predefined_icon && $predefined_icon == "photography_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/photography_white.png" width="60" height="52" />'; }
                                    if ($predefined_icon && $predefined_icon == "print" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/print.png" width="54" height="52" />'; }
                                    if ($predefined_icon && $predefined_icon == "print_white" && !$custom_icon) { echo '<img src="'.$images_directory.'/images/service_icons/print_white.png" width="54" height="52" />'; }
                                    ?>
                               </div>
                          </div>
                          <?php if ( $post_content || $custom_link  ) : ?></a><?php endif; ?>

                    <?php endif; ?>

                    



                    <!-- Service title -->
                    <h3><?php echo get_the_title();  ?></h3>
                    
                    <!-- Short description -->
                    <?php the_content( 'More info' ); ?>
                          
               </div>
               <?php
               endwhile; 
               endif;
               wp_reset_query(); 
               ?>
          
          <div class="clear"></div>
          </div>
          <!-- END:SERVICE BLOCKS -->