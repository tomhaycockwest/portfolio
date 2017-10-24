<?php
/* 
   Template Name: About page 
*/

get_header(); ?>

          <?php require_once(ME_MISC . '/multi_page_navigation.php'); ?>
          
     </div>
     <!--* END HEADER *-->

     <!--* ABOUT *-->
     <div id="about" style="margin-top: 40px;">

          <?php $members = new WP_Query(array(  'post_type' => 'about', 'posts_per_page' =>'-1' ) ); ?>
          <?php if ($members->have_posts()) :  while ($members->have_posts()) : $members->the_post(); ?>
          <!-- PERSON -->
          <div class="person">

                <!-- ABOUT IMAGE -->
                <div class="about_image">
                     <?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) :  ?>
                           <?php  the_post_thumbnail('about'); ?>
                     <?php endif; ?>
                </div>
                
                <h3><?php echo get_the_title();  ?></h3>
      
                <?php the_content(); ?>
                
                <?php
                global $about_meta_fields, $post;
                $about_position = get_post_meta($post->ID, 'about_position', true);
                $about_facebook = get_post_meta($post->ID, 'about_facebook', true);
                $about_twitter = get_post_meta($post->ID, 'about_twitter', true);
                $about_dribbble = get_post_meta($post->ID, 'about_dribbble', true);
                $about_skype = get_post_meta($post->ID, 'about_skype', true);
                $about_youtube = get_post_meta($post->ID, 'about_youtube', true);
                $about_vimeo = get_post_meta($post->ID, 'about_vimeo', true);
                $about_linkedin = get_post_meta($post->ID, 'about_linkedin', true);
                $about_tumblr = get_post_meta($post->ID, 'about_tumblr', true);
                $about_pinterest = get_post_meta($post->ID, 'about_pinterest', true);
                $about_instagram = get_post_meta($post->ID, 'about_instagram', true);
                $about_google = get_post_meta($post->ID, 'about_google', true);
                $about_deviant = get_post_meta($post->ID, 'about_deviant', true);
                $about_soundcloud = get_post_meta($post->ID, 'about_soundcloud', true);
                $about_flickr = get_post_meta($post->ID, 'about_flickr', true);
                $about_behance = get_post_meta($post->ID, 'about_behance', true);
                if ( $about_facebook || $about_twitter || $about_dribbble|| $about_skype || $about_youtube || $about_vimeo || $about_linkedin || $about_tumblr || $about_pinterest || $about_instagram || $about_google || $about_deviant || $about_soundcloud || $about_flickr || $about_behance ) :
                ?>
                <div class="about_social">
                     <div class="helper">
                     <ul>
                     
                        <?php if ($about_facebook) : ?>
                        <li><a href="<?php echo esc_url( $about_facebook ); ?>" class="fb" title=""></a></li>
                        <?php endif; ?>

                        <?php if ($about_twitter) : ?>
                        <li><a href="<?php echo esc_url( $about_twitter ); ?>" class="twitter" title=""></a></li>
                        <?php endif; ?>
                                
                        <?php if ($about_dribbble) : ?>
                        <li><a href="<?php echo esc_url( $about_dribbble ); ?>" class="dribbble" title=""></a></li>
                        <?php endif; ?>
                                                    
                        <?php if ($about_skype) : ?>
                        <li><a href="<?php echo esc_url( $about_skype ); ?>" class="skype" title=""></a></li>
                        <?php endif; ?>
                                                    
                        <?php if ($about_deviant) : ?>
                        <li><a href="<?php echo esc_url( $about_deviant ); ?>" class="deviantart" title=""></a></li>
                        <?php endif; ?>
                                                    
                        <?php if ($about_google) : ?>
                        <li><a href="<?php echo esc_url( $about_google ); ?>" class="google" title=""></a></li>
                        <?php endif; ?>
                                                    
                        <?php if ($about_instagram) : ?>
                        <li><a href="<?php echo esc_url( $about_instagram ); ?>" class="instagram" title=""></a></li>
                        <?php endif; ?>
                                                    
                        <?php if ($about_linkedin) : ?>
                        <li><a href="<?php echo esc_url( $about_linkedin ); ?>" class="linked" title=""></a></li>
                        <?php endif; ?>
                                                    
                        <?php if ($about_tumblr) : ?>
                        <li><a href="<?php echo esc_url( $about_tumblr ); ?>" class="tumblr" title=""></a></li>
                        <?php endif; ?>
                                                    
                        <?php if ($about_vimeo) : ?>
                        <li><a href="<?php echo esc_url( $about_vimeo ); ?>" class="vimeo" title=""></a></li>
                        <?php endif; ?>
                                                    
                        <?php if ($about_youtube) : ?>
                        <li><a href="<?php echo esc_url( $about_youtube ); ?>" class="youtube" title=""></a></li>
                        <?php endif; ?>
                                
                        <?php if ($about_pinterest) : ?>
                        <li><a href="<?php echo esc_url( $about_pinterest ); ?>" class="pinterest" title=""></a></li>
                        <?php endif; ?>
                                                    
                        <?php if ($about_soundcloud) : ?>
                        <li><a href="<?php echo esc_url( $about_soundcloud ); ?>" class="soundcloud" title=""></a></li>
                        <?php endif; ?>
                        
                        <?php if ($about_flickr) : ?>
                        <li><a href="<?php echo esc_url( $about_flickr ); ?>" class="flickr" title=""></a></li>
                        <?php endif; ?>
                                                    
                        <?php if ($about_behance) : ?>
                        <li><a href="<?php echo esc_url( $about_behance ); ?>" class="behance" title=""></a></li>
                        <?php endif; ?>

                     </ul>
                     </div>
                </div>
                <?php endif; ?>
          
          <div class="clear"></div>
          </div>
          <!-- END: PERSON -->

          <?php endwhile; endif; ?>
          <?php wp_reset_query(); ?>

     </div>
     <!--* END ABOUT *-->

<?php get_footer(); ?>