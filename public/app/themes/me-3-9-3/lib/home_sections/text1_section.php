    <!-- SlideTo button-->
    <?php if ( get_option('section1_content') != "text1" ) : ?>
    <a href="#text1" class="scroll_down"></a>
    <?php endif; ?>
    
    <div class="text_section" id="text1">
    
         <!-- Title -->
         <?php if ( get_option('section1_content') != "text1" ) : ?>
         <div class="title">
               <h2>
                   <?php if ( !get_option('text1_title') ) : ?>
                   <span><?php _e('Text section1 title','me-3-9-3'); ?></span>
                   <?php endif; ?>
                   <?php if ( get_option('text1_title') ) : ?>
                   <span><?php echo esc_attr( get_option('text1_title') ); ?></span>
                   <?php endif; ?>
               </h2>
          </div>
          <?php endif; ?>
          
          <div class="text-section-content">
               <?php 
               $text1_content = get_option('text1_content');
               echo do_shortcode($text1_content);
               ?>
          </div>

    </div>