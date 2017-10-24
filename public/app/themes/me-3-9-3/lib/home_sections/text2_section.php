    <!-- SlideTo button-->
    <?php if ( get_option('section1_content') != "text2" ) : ?>
    <a href="#text2" class="scroll_down"></a>
    <?php endif; ?>
    
    <div class="text_section" id="text2">
    
         <!-- Title -->
         <?php if ( get_option('section1_content') != "text2" ) : ?>
         <div class="title">
               <h2>
                   <?php if ( !get_option('text2_title') ) : ?>
                   <span><?php _e('Text section2 title','me-3-9-3'); ?></span>
                   <?php endif; ?>
                   <?php if ( get_option('text2_title') ) : ?>
                   <span><?php echo esc_attr( get_option('text2_title') ); ?></span>
                   <?php endif; ?>
               </h2>
          </div>
          <?php endif; ?>
          
          <div class="text-section-content">
               <?php
               $text2_content = get_option('text2_content');
               echo do_shortcode($text2_content);
               ?>
          </div>

    </div>