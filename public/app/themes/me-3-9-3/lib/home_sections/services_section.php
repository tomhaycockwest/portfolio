    <!-- SlideTo button-->
    <?php if ( get_option('section1_content') != "services" ) : ?>
    <a href="#services" class="scroll_down"></a>
    <?php endif; ?>

    <!--* SERVICES *-->
     <div id="services">

          <!-- TITLE -->
          <?php if ( get_option('section1_content') != "services" ) : ?>
          <div class="title">
               <h2>
                   <?php if ( !get_option('services_title') ) : ?>
                   <span><?php _e('services','me-3-9-3'); ?></span>
                   <?php endif; ?>
                   <?php if ( get_option('services_title') ) : ?>
                   <span><?php echo esc_attr( get_option('services_title') ); ?></span>
                   <?php endif; ?>
               </h2>
          </div>
          <?php endif; ?>
          
          <!-- SERVICES INTRO -->
          <?php 
          $default_intro = esc_attr__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis tincidunt sagittis.','me-3-9-3');
          $intro_text = get_option('services_intro', $default_intro);
          if ( $intro_text ) :
          ?>
          <div class="services_intro">
               <?php
               $allowed_tags = array(
                                     'a' => array(
                                                  'href' => array(),
                                                  'title' => array(),
                                                  'target' => array()
                                     ),
                                     'img' => array(
                                                     'src' => array(),
                                                     'width' => array(),
                                                     'height' => array(),
                                                     'alt' => array()
                                              ),
                                     'br' => array(),
                                     'em' => array(),
                                     'strong' => array(),
                                     'i' => array(),
                                     'cite' => array(),
                                     'sub' => array(),
                                     'sup' => array()
               );
               echo '<p>' . wp_kses($intro_text, $allowed_tags) . '</p>';
               ?>
          </div>
          <?php endif; ?>
          
          <!-- Here comes the contents of a single service item ( will be loaded by ajax ), please leave this div empty -->
          <div id="service_item"></div>
          
          <!-- SERVICE BLOCKS -->
          <?php if ( !get_option('services_display') || get_option('services_display') == "three_services"  ) { require_once(ME_LIB . '/services/service_layout1.php'); } ?>
          <?php if ( get_option('services_display') == "one_service"  ) { require_once(ME_LIB . '/services/service_layout2.php'); } ?>


     </div>
     <!--* END SERVICES *-->