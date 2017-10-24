          <!-- BLOG POSTS -->
          <div class="blog_posts">

               <?php
               global $page, $paged;
               $user_id = get_current_user_id();
               $limit = get_option('posts_per_page');
               $wp_query = new WP_Query();
               $wp_query->query( array( 'posts_per_page' => $limit, 'paged' => $paged ) );
               $more = 0;
               if( have_posts() ) :
               while ( have_posts() ) : the_post(); $more = 0;
               ?>
               <!-- Blog post -->
               <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <!-- Post title -->
                    <div class="post_title">
                         <h3>
                             <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                         </h3>
                    </div>

                    <div class="post_container">

                         <!-- Metas -->
                         <div class="post_meta">
                              <ul>
                              
                              <?php if ( !checked(1, get_option('disable_date'), false) ) : ?>
                              <li class="post_date">
                                  <?php echo get_the_date(); ?>
                              </li>
                              <?php endif; ?>

                              <?php if ( !checked(1, get_option('disable_author'), false) ) : ?>
                              <li class="post_author">
                                  <div class="author_avatar">
                                       <?php echo get_avatar( get_the_author_meta( 'ID' ), $size = '70'); ?>
                                  </div>

                                  <div class="author_name">
                                       <?php the_author(); ?>
                                  </div>
                              </li>
                              <?php endif; ?>

                              <?php if ( !checked(1, get_option('disable_category'), false) ) : ?>
                              <li class="post_category">
                                  <?php the_category(', '); ?>
                              </li>
                              <?php endif; ?>

                              <?php if ( !checked(1, get_option('disable_comments'), false) ) : ?>
                              <li class="post_comments">
                                  <?php comments_popup_link( __( 'Leave a comment', 'me-3-9-3'), __( '1 Comment', 'me-3-9-3'), __( '% Comments','me-3-9-3' ) ); ?>
                              </li>
                              <?php endif; ?>

                              </ul>
                         </div>
                         <!-- End Metas -->

                         <!-- Post teaser -->
                         <div class="post_teaser">
                              <!-- Image -->
                              <?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) :  ?>
                                    <a href="<?php the_permalink(); ?>">
                                       <?php the_post_thumbnail('post'); ?>
                                    </a>
                              <?php endif; ?>

                              <?php 
                              $default_read_more = esc_attr__('Read more','me-3-9-3');
                              $read_more = get_option('read_more', $default_read_more);
                              the_content( '<div class="read_more_container">' . $read_more . '</div>' );
                              ?>

                         </div>
                         <!-- End Post teaser -->

                    <div class="clear"></div>
                    </div>

               </div>
               <!-- End Post -->
               <?php endwhile; ?>
               
               <!-- Pagination -->
               <?php if ( $wp_query->max_num_pages > 1 ) : ?>
                     <div class="pagination_container">
                          <ul class="pagination">
                              <li id="newer-posts"><?php previous_posts_link(''); ?></li>
                              <li id="older-posts"><?php next_posts_link(''); ?></li>
                          </ul>
                     </div>
                     <div class="clear"></div>
               <?php endif; ?>
               <!-- End pagination -->

               <?php else : ?>

                     <h1><?php _e('Not Found','me-3-9-3'); ?></h1>

                     <p>
                     <?php _e('Sorry, but there are no results for the requested archive.','me-3-9-3'); ?>
                     </p>

               <?php endif; ?>

          </div>
          <!-- END BLOG POSTS -->