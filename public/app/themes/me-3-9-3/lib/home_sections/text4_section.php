    <!-- SlideTo button-->
    <?php if ( get_option('section1_content') != "text4" ) : ?>
    <a href="#text4" class="scroll_down"></a>
    <?php endif; ?>
    
    <div class="text_section" id="text4">
    
         <!-- Title -->
         <?php if ( get_option('section1_content') != "text4" ) : ?>
         <div class="title">
               <h2>
                   <?php if ( !get_option('text4_title') ) : ?>
                   <span><?php _e('Text section4 title','me-3-9-3'); ?></span>
                   <?php endif; ?>
                   <?php if ( get_option('text4_title') ) : ?>
                   <span><?php echo esc_attr( get_option('text4_title') ); ?></span>
                   <?php endif; ?>
               </h2>
          </div>
          <?php endif; ?>
          
          <div class="text-section-content">
               <?php
               $text4_content = get_option('text4_content');
               echo do_shortcode($text4_content);
               ?>
          </div>

    </div>