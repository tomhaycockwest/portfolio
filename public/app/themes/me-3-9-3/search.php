<?php

get_header();
require_once(ME_MISC . '/multi_page_navigation.php'); 
?>

     </div>
     <!--* END HEADER *-->

     <!--* CONTENT *-->
     <div id="content">

                         <!-- Page title -->
                         <h1 id="search-title"><?php printf( __( 'Search Results for: "<i>%s</i>"', 'me-3-9-3' ), get_search_query() ); ?></h1>
                         
                         <!-- Loop -->
                         <?php
                         if ( have_posts() ) :
                               while ( have_posts() ) : the_post();
                         ?>
                               <div id="post-<?php the_ID(); ?>" class="search-item">
                                    <h3 class="search-element-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p>
                                    <?php
                                    $content = get_the_content();
                                    $content = strip_tags($content);
                                    echo substr($content, 0, 100);
                                    echo " ...";
                                    ?>
                                    </p>
                               </div>
                               <?php endwhile; ?>
                         <?php else : ?>
                         <div class="no-results">
                              <p>
                              <?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.','me-3-9-3'); ?>
                              </p>
                              <?php get_search_form(); ?>
                         </div>
                         <?php endif; ?>
                         
                          <!-- PAGINATION -->
                          <div id="pagination_container">
                               <div id="pagination">
                                    <?php global $wp_query;
                                    $big = 999999999; // need an unlikely integer
                                    if ( !get_option('older_posts') ) { $next = __('Next','me-3-9-3'); }
                                    if ( get_option('older_posts') ) { $next = get_option('older_posts'); }
                                    if ( !get_option('newer_posts') ) { $prev = __('Prev','me-3-9-3'); }
                                    if ( get_option('newer_posts') ) { $prev = get_option('newer_posts'); }
                                    $args = array(
                                          'base'         => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                          'format'       => '?page=%#%',
                                          'total'        => $wp_query->max_num_pages,
                                          'current'      => max( 1, get_query_var('paged') ),
                                          'show_all'     => False,
                                          'end_size'     => 1,
                                          'mid_size'     => 2,
                                          'prev_next'    => True,
                                          'prev_text'    => esc_attr( $prev ),
                                          'next_text'    => esc_attr( $next ),
                                          'type'         => 'list',
                                          'add_args'     => False);
                
                                    echo paginate_links($args);
                                    ?>
                               </div>
                          <div class="clear"></div>
                          </div>

<?php get_footer(); ?>