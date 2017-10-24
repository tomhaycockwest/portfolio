    <!-- SlideTo button-->
    <?php if ( get_option('section1_content') != "text5" ) : ?>
    <a href="#text5" class="scroll_down"></a>
    <?php endif; ?>
    
    <div class="text_section" id="text5">
    
         <!-- Title -->
         <?php if ( get_option('section1_content') != "text5" ) : ?>
         <div class="title">
               <h2>
                   <?php if ( !get_option('text5_title') ) : ?>
                   <span><?php _e('Text section 5 title','me-3-9-3'); ?></span>
                   <?php endif; ?>
                   <?php if ( get_option('text5_title') ) : ?>
                   <span><?php echo esc_attr( get_option('text5_title') ); ?></span>
                   <?php endif; ?>
               </h2>
          </div>
          <?php endif; ?>
          
          <div class="text-section-content">
               <?php
               $text5_content = get_option('text5_content');
               echo do_shortcode($text5_content);
               ?>
          </div>

    </div>