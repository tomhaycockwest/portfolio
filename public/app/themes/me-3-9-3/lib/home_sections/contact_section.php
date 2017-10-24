    <!-- SlideTo button-->
    <?php if ( get_option('section1_content') != "contact" ) : ?>
    <a href="#contact" class="scroll_down"></a>
    <?php endif; ?>

    <!--* CONTACT *-->
    <div id="contact">

          <!-- TITLE -->
          <?php if ( get_option('section1_content') != "contact" ) : ?>
          <div class="title">
               <h2>
                   <?php if ( !get_option('contact_title') ) : ?>
                   <span><?php _e('CONTACT','me-3-9-3'); ?></span>
                   <?php endif; ?>
                   <?php if ( get_option('contact_title') ) : ?>
                   <span><?php echo esc_attr( get_option('contact_title') ); ?></span>
                   <?php endif; ?>
               </h2>
          </div>
          <?php endif; ?>
          
          <!-- CONTACT FORM -->
          <div id="contact_form">
               
               <?php if ( get_option('contactform7_shortcode') ) : ?>

                     <?php 
                     $contact_form7 = get_option('contactform7_shortcode'); 
                     echo do_shortcode($contact_form7); 
                     ?>

               <?php else : ?>

                     <!-- Name -->
                     <?php
                     $default_name_label = esc_attr__('Your Name','me-3-9-3');
                     $default_name_error = esc_attr__('What is your name?','me-3-9-3');
                     $name_label = get_option('contact_form_name', $default_name_label);
                     $missing_name = get_option('missing_name', $default_name_error);
                     ?>
                     <input type="text" name="name" value="" id="form-name" placeholder="<?php echo esc_attr( $name_label ); ?>" data-error-message="<?php echo esc_attr( $missing_name ); ?>" />

                     <!-- Email -->
                     <?php
                     $default_email_label = esc_attr__('Your Email Address','me-3-9-3');
                     $default_email_error = esc_attr__('What is your email address?','me-3-9-3');
                     $default_invalid_email_error = esc_attr__('Oh no! Invalid email address!','me-3-9-3');
                     $email_label = get_option('contact_form_email_label', $default_email_label);
                     $missing_email = get_option('missing_mail', $default_email_error);
                     $invalid_email = get_option('invalid_mail', $default_invalid_email_error);
                     ?>
                     <input type="text" name="mail" value="" id="form-mail" placeholder="<?php echo esc_attr( $email_label ); ?>" data-error-message="<?php echo esc_attr( $missing_email ); ?>" data-invalid-mail="<?php echo esc_attr($invalid_email); ?>" />

                     <!-- Message (textarea) -->
                     <?php
                     $default_message_label = esc_attr__('Message','me-3-9-3');
                     $default_message_error = esc_attr__('Do you wanna say sumthin?','me-3-9-3');
                     $message_label = get_option('contact_form_message_label', $default_message_label);
                     $missing_message = get_option('missing_message', $default_message_error);
                     ?>
                     <textarea name='message' rows="5" cols="62" id="form-message" placeholder="<?php echo esc_attr( $message_label ); ?>" data-error-message="<?php echo esc_attr( $missing_message ); ?>"></textarea>
                     
                     <!-- Button -->
                     <button type="submit" id="button" >
                           <?php 
                           $default_button_label = esc_attr__('OK','me-3-9-3');
                           $button_label = get_option('send_button_label', $default_button_label);
                           echo esc_attr( $button_label );
                           ?>
                     </button>
      
                     <!--container for the results of mail.php-->
                     <div id="result"></div>

               <?php endif; ?>

          </div>
          <!-- END CONTACT FORM -->

          <!-- CONTACT INFO -->
          <div id="contact_info">
          
               <?php
                    $default_text = esc_attr__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel sapien non nunc semper tincidunt sed id lacus.','me-3-9-3');
                    $contact_text = get_option('contact_text', $default_text);
                    if ( $contact_text ) {
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
                        echo '<p>' . wp_kses($contact_text, $allowed_tags) . '</p>';
                    }
               ?>

               <?php
               $default_address = esc_attr__('2000 Fashion Show Dr., Las Vegas, 89109 NV','me-3-9-3');
               $default_phone = esc_attr__('+01 - 000 - 0000','me-3-9-3');
               $default_email = esc_attr__('info@magna-themes.com','me-3-9-3');
               $contact_address = get_option('contact_address', $default_address);
               $contact_phone = get_option('contact_phone', $default_phone);
               $contact_email = get_option('contact_email', $default_email);
               $skype_code = get_option('skype_button');
               if ( $contact_address || $contact_phone || $contact_email || $skype_code ) : ?>
               <ul>

                   <?php  if ( $contact_address ) : ?>
                   <li><strong><?php esc_attr_e('Address:','me-3-9-3') ?></strong> <?php echo esc_attr( $contact_address ); ?></li>
                   <?php endif; ?>

                   <?php  if ( $contact_phone ) : ?>
                   <li><strong><?php esc_attr_e('Phone:','me-3-9-3') ?></strong> <?php echo esc_attr( $contact_phone ); ?></li>
                   <?php endif; ?>

                   <?php if ( $contact_email ) : ?>
                   <li><strong><?php esc_attr_e('Email:','me-3-9-3') ?></strong> <?php echo esc_attr( $contact_email ); ?></li>
                   <?php endif; ?>
                   
                   <?php if ( $skype_code ) : ?>
                   <li id="me-skype"><?php echo do_shortcode( $skype_code ); ?></li>
                   <?php endif; ?>

               </ul>
               <?php endif; ?>
               

               <?php

               $facebook_url = get_option('facebook_url');
               $facebook_tooltip = get_option('facebook_tooltip');
               $twitter_url = get_option('twitter_url');
               $twitter_tooltip = get_option('twitter_tooltip');
               $rss_url = get_option('rss_url');
               $rss_tooltip = get_option('rss_tooltip');
               $dribble_url = get_option('dribble_url');
               $dribble_tooltip = get_option('dribble_tooltip');
               $skype_url = get_option('skype_address');
               $skype_tooltip = get_option('skype_tooltip');
               $youtube_url = get_option('youtube_url');
               $youtube_tooltip = get_option('youtube_tooltip');
               $vimeo_url = get_option('vimeo_url');
               $vimeo_tooltip = get_option('vimeo_tooltip');
               $linkedin_url = get_option('linkedin_url');
               $linkedin_tooltip = get_option('linkedin_tooltip');
               $deviant_url = get_option('deviant_url');
               $deviant_tooltip = get_option('deviant_tooltip');
               $tumblr_url = get_option('tumblr_url');
               $tumblr_tooltip = get_option('tumblr_tooltip');
               $pinterest_url = get_option('pinterest_url');
               $pinterest_tooltip = get_option('pinterest_tooltip');
               $google_url = get_option('google_url');
               $google_tooltip = get_option('google_tooltip');
               $instagram_url = get_option('instagram_url');
               $instagram_tooltip = get_option('instagram_tooltip');
               $soundcloud_url = get_option('soundcloud_url');
               $soundcloud_tooltip = get_option('soundcloud_tooltip');
               $github_url = get_option('github_url');
               $github_tooltip = get_option('github_tooltip');
               $flickr_url = get_option('flickr_url');
               $flickr_tooltip = get_option('flickr_tooltip');
               $behance_url = get_option('behance_url');
               $behance_tooltip = get_option('behance_tooltip');

               if ( $facebook_url || $twitter_url || $rss_url || $dribble_url || $skype_url || $youtube_url || $vimeo_url || $linkedin_url || $deviant_url || $tumblr_url || $pinterest_url || $google_url || $instagram_url || $soundcloud_url || $github_url || $flickr_url || $behance_url ) : ?>
               <ul class="social_icons">

                   <?php if ( $facebook_url ) : ?>
                   <li><a href="<?php echo esc_url( $facebook_url ); ?>" title="<?php echo esc_js( $facebook_tooltip ); ?>" class="social_icon" id="fb"></a></li>
                   <?php endif; ?>

                   <?php if ( $twitter_url ) : ?>
                   <li><a href="<?php echo esc_url( $twitter_url ); ?>" title="<?php echo esc_js( $twitter_tooltip ); ?>" class="social_icon" id="twitter"></a></li>
                   <?php endif; ?>
                   
                   <?php if ( $instagram_url ) : ?>
                   <li><a href="<?php echo esc_url( $instagram_url ); ?>" title="<?php echo esc_js( $instagram_tooltip ); ?>" class="social_icon" id="instagram"></a></li>
                   <?php endif; ?>
                   
                   <?php if ( $rss_url ) : ?>
                   <li><a href="<?php echo esc_url( $rss_url ); ?>" title="<?php echo esc_js( $rss_tooltip ); ?>" class="social_icon" id="rss"></a>
                   </li>
                   <?php endif; ?>
                   
                   <?php if ( $dribble_url ) : ?>
                   <li id="dribble"><a href="<?php echo esc_url( $dribble_url ); ?>" title="<?php echo esc_js( $dribble_tooltip ); ?>" class="social_icon" id="dribbble"></a></li>
                   <?php endif; ?>
                   
                   <?php if ( $skype_url ) : ?>
                   <li><a href="skype:<?php echo esc_url( $skype_url );?>?add" title="<?php echo esc_js( $skype_tooltip ); ?>" class="social_icon" id="skype"></a></li>
                   <?php endif; ?>
                   
                   <?php if ( $youtube_url ) : ?>
                   <li><a href="<?php echo esc_url( $youtube_url ); ?>" title="<?php echo esc_js( $youtube_tooltip ); ?>" class="social_icon" id="youtube"></a></li>
                   <?php endif; ?>
                   
                   <?php if ( $vimeo_url ) : ?>
                   <li><a href="<?php echo esc_url( $vimeo_url ); ?>" title="<?php echo esc_js( $vimeo_tooltip ); ?>" class="social_icon" id="vimeo"></a></li>
                   <?php endif; ?>
                   
                   <?php if ( $linkedin_url ) : ?>
                   <li><a href="<?php echo esc_url( $linkedin_url ); ?>" title="<?php echo esc_js( $linkedin_tooltip ); ?>" class="social_icon" id="linked"></a></li>
                   <?php endif; ?>
                   
                   <?php if ( $deviant_url ) : ?>
                   <li><a href="<?php echo esc_url( $deviant_url ); ?>" title="<?php echo esc_js( $deviant_tooltip ); ?>" class="social_icon" id="deviantart"></a></li>
                   <?php endif; ?>
                   
                   <?php if ( $tumblr_url ) : ?>
                   <li><a href="<?php echo esc_url( $tumblr_url ); ?>" title="<?php echo esc_js( $tumblr_tooltip ); ?>" class="social_icon" id="tumblr"></a></li>
                   <?php endif; ?>
                   
                   <?php if ( $pinterest_url ) : ?>
                   <li><a href="<?php echo esc_url( $pinterest_url ); ?>" title="<?php echo esc_js( $pinterest_tooltip ); ?>" class="social_icon" id="pinterest"></a></li>
                   <?php endif; ?>
                   
                   <?php if ( $google_url ) : ?>
                   <li><a href="<?php echo esc_url( $google_url ); ?>" title="<?php echo esc_js( $google_tooltip ); ?>" class="social_icon" id="google"></a></li>
                   <?php endif; ?>

                   <?php if ( $soundcloud_url ) : ?>
                   <li><a href="<?php echo esc_url( $soundcloud_url ); ?>" title="<?php echo esc_js( $soundcloud_tooltip ); ?>" class="social_icon" id="soundcloud"></a></li>
                   <?php endif; ?>
                   
                   <?php if ( $github_url ) : ?>
                   <li><a href="<?php echo esc_url( $github_url ); ?>" title="<?php echo esc_js( $github_tooltip ); ?>" class="social_icon" id="github"></a></li>
                   <?php endif; ?>
                   
                   <?php if ( $flickr_url ) : ?>
                   <li><a href="<?php echo esc_url( $flickr_url ); ?>" title="<?php echo esc_js( $flickr_tooltip ); ?>" class="social_icon" id="flickr"></a></li>
                   <?php endif; ?>
                   
                   <?php if ( $behance_url ) : ?>
                   <li><a href="<?php echo esc_url( $behance_url ); ?>" title="<?php echo esc_js( $behance_tooltip ); ?>" class="social_icon" id="behance"></a></li>
                   <?php endif; ?>

               </ul>
               <?php endif; ?>

          </div>
          <!-- END CONTACT INFO -->

     <div class="clear"></div>
     </div>
     <!--* END CONTACT *-->