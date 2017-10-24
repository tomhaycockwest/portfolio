    <!-- SlideTo button-->
    <?php if ( get_option('section1_content') != "text3" ) : ?>
    <a href="#text3" class="scroll_down"></a>
    <?php endif; ?>
    
    <div class="text_section" id="text3">
    
         <!-- Title -->
         <?php if ( get_option('section1_content') != "text3" ) : ?>
         <div class="title">
               <h2>
                   <?php if ( !get_option('text3_title') ) : ?>
                   <span><?php _e('Text section 3 title','me-3-9-3'); ?></span>
                   <?php endif; ?>
                   <?php if ( get_option('text3_title') ) : ?>
                   <span><?php echo esc_attr( get_option('text3_title') ); ?></span>
                   <?php endif; ?>
               </h2>
          </div>
          <?php endif; ?>
          
          <div class="text-section-content">
               <?php
               $text3_content = get_option('text3_content');
               echo do_shortcode($text3_content);
               ?>
          </div>

    </div>