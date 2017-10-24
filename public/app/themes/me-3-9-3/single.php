<?php get_header(); ?>

          <?php require_once(ME_MISC . '/multi_page_navigation.php'); ?>

     </div>
     <!--* END HEADER *-->

     <!--* CONTENT *-->
     <div id="content">

          <!-- MAIN CONTENT -->
          <?php while ( have_posts() ) : the_post(); ?>
          
          <?php
          global $single_meta_fields, $post;
          $text = get_post_meta($post->ID, 'single_layout', true);
          if ($text) :
             if ( $text == "single_sidebar" ) :
          ?>
          <div id="main">
          <?php endif; endif; ?>

          <div class="blog_posts">
               <!-- Post -->
               <div class="post">

                    <!-- Post title -->
                    <div class="post_title">
                         <h3>
                             <?php the_title(); ?>
                         </h3>
                    </div>

                    <div class="post_container">
                         
                         <div class="single_meta_container">
                              <div class="single_meta">
                                   <ul>
                                       
                                       <?php
                                       
                                       $disable_date = checked(1, get_option('disable_date'), false);
                                       $disable_author = checked(1, get_option('disable_author'), false);
                                       $disable_category = checked(1, get_option('disable_category'), false);
                                       $disable_comments = checked(1, get_option('disable_comments'), false);

                                       ?>

                                       <?php if (!$disable_date) : ?><li><?php the_date(); ?></li><?php endif; ?>
                                       <?php if (!$disable_date && ( !$disable_author || !$disable_category || !$disable_comments ) ) : ?><li class="separator">|</li><?php endif; ?>
                                       
                                       <?php if (!$disable_author) : ?><li><?php the_author(); ?></li><?php endif; ?>
                                       <?php if (!$disable_author && ( !$disable_category || !$disable_comments ) ) : ?><li class="separator">|</li><?php endif; ?>
                                       
                                       <?php if (!$disable_category) : ?><li><?php the_category(', '); ?></li><?php endif; ?>
                                       <?php if (!$disable_category && !$disable_comments ) : ?><li class="separator">|</li><?php endif; ?>
                                       
                                       <?php if (!$disable_comments) : ?><li><a href=""><?php comments_popup_link( __( 'Leave a comment','me-3-9-3'), __( '1 Comment','me-3-9-3'), __( '% Comments','me-3-9-3') ); ?></a></li><?php endif; ?>

                                   </ul>
                              </div>
                              <div class="clear"></div>
                         </div>

                         <!-- Post content -->
                         <div class="post_content">

                              <?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) :  ?>
                                    <div class="single_thumb">
                                         <?php the_post_thumbnail('post'); ?>
                                    </div>
                                    <div class="clear"></div>
                              <?php endif; ?>

                              <?php if ( is_archive() || is_search() ) : ?>
                                    <?php the_excerpt(); ?>
                              <?php else : ?>
                                    <div class="post_content">
                                    <?php the_content(''); ?>
                                    </div>
                              <?php endif; ?>
                              
                              <?php $args = array(
                        	        'before'           => '<div class="wp-link-pages"><span class="current-page">' . __('Pages:','me-3-9-3') . '</span>',
                        	        'after'            => '<div class="clear"></div></div>',
                        	        'link_before'      => '<span>',
                        	        'link_after'       => '</span>',
                        	        'next_or_number'   => 'number',
                        	        'nextpagelink'     => __('Next page','me-3-9-3'),
                        	        'previouspagelink' => __('Previous page','me-3-9-3'),
                        	        'pagelink'         => '%',
                        	        'echo'             => 1
                              ); ?>
                              <?php wp_link_pages( $args ); ?>

                         </div>
                         <div class="clear"></div>
                         <!-- End Post content -->

                    <div class="clear"></div>
                    </div>

               </div>
               <!-- End First post -->

               <!-- Comments -->
               <?php comments_template( '', true ); ?>
               <!-- Comments -->

          </div>

          <?php
          if ($text) :
             if ( $text == "single_sidebar" ) :
          ?>
          <!-- END MAIN CONTENT -->
          </div>
          <?php endif; endif; ?>

          <?php
          if ($text) :
             if ( $text == "single_sidebar" ) :
          ?>
          <!-- SIDEBAR -->
          <div id="sidebar">

               <!-- Recent posts -->
               <?php dynamic_sidebar('Sidebar'); ?>

          </div>
          <!-- END SIDEBAR -->
          <?php endif; endif; ?>

          <div class="clear"></div>
          <?php endwhile; ?>

<?php get_footer(); ?>