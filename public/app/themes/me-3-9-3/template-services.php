<?php /* Template Name: Services page */

get_header(); ?>

          <?php require_once(ME_MISC . '/multi_page_navigation.php'); ?>
          
     </div>
     <!--* END HEADER *-->

    <!--* SERVICES *-->
     <div id="services">

          <!-- SERVICES INTRO -->
          <?php if ( get_option('services_intro') ) : ?>
          <div class="services_intro">
               <?php
               $string = get_option('services_intro');
               $allowed_tags = array(
                                     'a' => array(
                                                  'href' => array(),
                                                  'title' => array()
                                     ),
                                     'br' => array(),
                                     'em' => array(),
                                     'strong' => array(),
                                     'i' => array(),
                                     'cite' => array(),
                                     'sub' => array(),
                                     'sup' => array()
               );
               echo '<p>' . wp_kses($string, $allowed_tags) . '</p>';
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

<?php get_footer(); ?>