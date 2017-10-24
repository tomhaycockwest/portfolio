<?php
/* 
   Template Name: Homepage
*/
?>

<?php get_header(); ?>

          <?php require_once(ME_MISC . '/one_page_navigation.php'); ?>

          <!-- INTRO-->
          <?php 
          $default_value = esc_attr__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in sodales eros. Donec bibendum, lectus sit amet volutpat tristique, libero magna fringilla nibh, non tristique lorem dolor sit amet arcu.','me-3-9-3');
          $intro_text = get_option('intro_text',$default_value); 
          if ( $intro_text != '' ) :
          ?>
          <div id="intro">
               <?php
               $allowed_tags = array(
                                     'a' => array(
                                                  'href' => array(),
                                                  'title' => array(),
                                                  'target' => array()
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

     </div>
     <!--* END HEADER *-->
     
     <!--* CONTENT *-->
     <div id="content">

     <?php /* section 1 */
     if ( get_option('section1_content') && get_option('section1_content') != "nothing" ) :
        require_once(ME_SECTIONS . '/' . get_option('section1_content') .'_section.php');
     endif;
     if ( !get_option('section1_content') ) :
        require_once(ME_SECTIONS . '/slider_section.php');
     endif;
     ?>

     <?php /* section 2  */
     if ( get_option('section2_content') && get_option('section2_content') != "nothing" ) :
        require_once(ME_SECTIONS . '/' . get_option('section2_content') .'_section.php');
     endif;
     if ( !get_option('section2_content') ) :
        require_once(ME_SECTIONS . '/portfolio_section.php');
     endif;
     ?>

     <?php /* section 3  */
     if ( get_option('section3_content') && get_option('section3_content') != "nothing" ) :
        require_once(ME_SECTIONS . '/' . get_option('section3_content') .'_section.php');
     endif;
     if ( !get_option('section3_content') ) :
        require_once(ME_SECTIONS . '/services_section.php');
     endif;
     ?>

     <?php /* section 4  */
     if ( get_option('section4_content') && get_option('section4_content') != "nothing" ) :
        require_once(ME_SECTIONS . '/' . get_option('section4_content') .'_section.php');
     endif;
     if ( !get_option('section4_content') ) :
        require_once(ME_SECTIONS . '/about_section.php');
     endif;
     ?>

     <?php /* section 5  */
     if ( get_option('section5_content') && get_option('section5_content') != "nothing" ) :
        require_once(ME_SECTIONS . '/' . get_option('section5_content') .'_section.php');
     endif;
     if ( !get_option('section5_content') ) :
        require_once(ME_SECTIONS . '/contact_section.php');
     endif;
     ?>
     
     <?php /* section 6  */
     if ( get_option('section6_content') && get_option('section6_content') != "nothing" ) :
        require_once(ME_SECTIONS . '/' . get_option('section6_content') .'_section.php');
     endif;
     ?>
     
     <?php /* section 7  */
     if ( get_option('section7_content') && get_option('section7_content') != "nothing" ) :
        require_once(ME_SECTIONS . '/' . get_option('section7_content') .'_section.php');
     endif;
     ?>
     
     <?php /* section 8  */
     if ( get_option('section8_content') && get_option('section8_content') != "nothing" ) :
        require_once(ME_SECTIONS . '/' . get_option('section8_content') .'_section.php');
     endif;
     ?>
     
     <?php /* section 9  */
     if ( get_option('section9_content') && get_option('section9_content') != "nothing" ) :
        require_once(ME_SECTIONS . '/' . get_option('section9_content') .'_section.php');
     endif;
     ?>
     
     <?php /* section 10  */
     if ( get_option('section10_content') && get_option('section10_content') != "nothing" ) :
        require_once(ME_SECTIONS . '/' . get_option('section10_content') .'_section.php');
     endif;
     ?>

<?php  get_footer(); ?>