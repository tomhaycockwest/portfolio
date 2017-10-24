<?php

/* JS VARIABLES
===========================*/
function mm_js_variables() {
?>
         <script>
         var mail_script_url = "<?php echo get_template_directory_uri(); ?>/mail.php";<?php if ( !get_option("error_message_color") ) : ?>var error_color   = '#990000';<?php endif; ?><?php if ( get_option("error_message_color") ) : ?>var error_color   = '<?php echo get_option("error_message_color"); ?>';<?php endif; ?><?php if ( !get_option("heading_color") ) : ?>var default_color = '#272727';<?php endif; ?><?php if ( get_option("heading_color") ) : ?>var default_color = '<?php echo get_option("heading_color"); ?>';<?php endif; ?>var goto_text = "<?php echo __('NAVIGATION', 'me-3-9-3'); ?>";<?php if ( get_option('portfolio_more_info') ) : ?>var information = "<?php echo esc_js( get_option('portfolio_more_info') );?>";<?php endif; ?><?php if ( !get_option('portfolio_more_info') ) : ?>var information = "none";<?php endif; ?><?php if ( get_option('portfolio_link') ) : ?>var visit = "<?php echo get_option('portfolio_link');?>";<?php endif; ?><?php if ( !get_option('portfolio_link') ) : ?>var visit = "none";<?php endif; ?>
         </script>
<?php
}
add_action('wp_head','mm_js_variables', 8);

/* JS SETTINGS
===========================*/
function mm_js_settings() {
?>
         <script>
         (function($) {
               "use strict";
               
               $(window).load(function() { 
                       $('#slider').fitVids().flexslider({ 
                                    <?php if ( !get_option('slider_animation') ) : ?>animation: "slide",<?php endif; ?>
                                    <?php if ( get_option('slider_animation') ) : ?>animation: "<?php echo get_option('slider_animation'); ?>",<?php endif; ?>
                                    <?php if ( get_option('slider_direction') ) : ?>direction: "<?php echo get_option('slider_direction'); ?>",<?php endif; ?>
                                    <?php if ( !get_option('slider_direction') ) : ?>direction: "horizontal",<?php endif; ?>
                                    <?php if ( !get_option('slider_slideshow') ) : ?>slideshow: true,<?php endif; ?>
                                    <?php if ( get_option('slider_slideshow') ) : ?>slideshow: <?php echo get_option('slider_slideshow'); ?>,<?php endif; ?>
                                    smoothHeight: true,
                                    prevText: "&lt;", 
                                    nextText: "&gt;",
                                    useCSS: false,
                                    <?php if ( !get_option('slider_speed') ) : ?>slideshowSpeed: 7000,<?php endif; ?>
                                    <?php if ( get_option('slider_speed') ) : ?>slideshowSpeed: <?php echo get_option('slider_speed'); ?>,<?php endif; ?>
                                    <?php if ( !get_option('slider_animation_speed') ) : ?>animationDuration: 600,<?php endif; ?>
                                    <?php if ( get_option('slider_animation_speed') ) : ?>animationDuration: <?php echo get_option('slider_animation_speed'); ?>,<?php endif; ?>
                                    <?php if ( !get_option('slider_direction_nav') ) : ?>directionNav: true,<?php endif; ?>
                                    <?php if ( get_option('slider_direction_nav') ) : ?>directionNav: <?php echo get_option('slider_direction_nav'); ?>,<?php endif; ?>
                                    <?php if ( !get_option('slider_control_nav') ) : ?>controlNav: false,<?php endif; ?>
                                    <?php if ( get_option('slider_control_nav') ) : ?>controlNav: <?php echo get_option('slider_control_nav'); ?>,<?php endif; ?>
                                    <?php if ( !get_option('slider_keyboard_nav') ) : ?>keyboardNav: true,<?php endif; ?>
                                    <?php if ( get_option('slider_keyboard_nav') ) : ?>keyboardNav: <?php echo get_option('slider_keyboard_nav'); ?>,<?php endif; ?>
                                    <?php if ( !get_option('slider_mousewheel') ) : ?>mousewheel: false,<?php endif; ?>
                                    <?php if ( get_option('slider_mousewheel') ) : ?>mousewheel: <?php echo get_option('slider_mousewheel'); ?>,<?php endif; ?>
                                    <?php if ( !get_option('slider_randomize') ) : ?>randomize: false,<?php endif; ?>
                                    <?php if ( get_option('slider_randomize') ) : ?>randomize: <?php echo get_option('slider_randomize'); ?>,<?php endif; ?>
                                    <?php if ( !get_option('slider_start') ) : ?>slideToStart: 0,<?php endif; ?>
                                    <?php if ( get_option('slider_start') ) : ?>slideToStart: <?php echo get_option('slider_start'); ?>,<?php endif; ?>
                                    /*
                                    before: function() {
                                            var video_container = $('ul.slides li .fluid-width-video-wrapper');
                                            var video_height = video_container.height();
                                            video_container.css('height', video_height);
                                    } */
                       });
                                    
                                    
                                    <?php if ( !get_option('older_posts') && !get_option('newer_posts') ) : ?>$("li#older-posts a").tipTip({ delay: 100, content: "<?php echo __('Older posts', 'me-3-9-3'); ?>" });$("li#newer-posts a").tipTip({ delay: 100, content: "<?php echo __('Newer posts', 'me-3-9-3'); ?>" });<?php endif; ?><?php if ( !get_option('older_posts') && get_option('newer_posts') ) : ?>$("li#older-posts a").tipTip({ delay: 100, content: "<?php echo __('Older posts', 'me-3-9-3'); ?>" });$("li#newer-posts a").tipTip({ delay: 100, content: "<?php echo esc_js( get_option('newer_posts') ); ?>" });<?php endif; ?><?php if ( get_option('older_posts') && !get_option('newer_posts') ) : ?>$("li#older-posts a").tipTip({ delay: 100, content: "<?php echo esc_js( get_option('older_posts') ); ?>" });$("li#newer-posts a").tipTip({ delay: 100, content: "<?php echo __('Newer posts', 'me-3-9-3'); ?>" });<?php endif; ?><?php if ( get_option('older_posts') && get_option('newer_posts') ) : ?>$("li#older-posts a").tipTip({ delay: 100, content: "<?php echo esc_js( get_option('older_posts') ); ?>" });$("li#newer-posts a").tipTip({ delay: 100, content: "<?php echo esc_js( get_option('newer_posts') ); ?>" });<?php endif; ?>
               });

         })(jQuery);
         </script>
<?php
}
add_action('wp_footer','mm_js_settings', 11);

/* JS PORTFOLIO
===========================*/
function mm_js_portfolio() {
?>
         <script>
         (function($) {
               "use strict";

                $(window).load(function(){
                
                     <?php if ( !get_option('item_layout') || get_option('item_layout') == "above" ) : ?>
                     $("ul#Portfolio-Grid li a.information").click( function(){
                               var source = $(this).attr("href");
                               $("div#filter_wrapper").slideUp(300, function(){
                                          $('div#portfolio_loading2').css("display","block");
                                          $('html,body').animate({scrollTop: $("div#portfolio").offset().top},'slow'); //animate ends
                                                    $('div#item_container2').load(source + " #me-item", function(){
                                                              $('div#portfolio_loading2, #tiptip_holder').css("display","none");
                                                              $('div.item').slideDown(500,function(){
                                                                        $('.slideshow').flexslider({controlNav: false, smoothHeight: true});
                                                                        $('.gallery a').magnificPopup({
                                                                                    type : 'image',
                                                                                    gallery : {
                                                                                               enabled:true
                                                                                    }
                                                                        });
                                                                        if ( $('div.item_video').length != 0 ) { $(this).fitVids(); }
                                                                        $('div.item a.close, div.item a.close_full').click( function(){
                                                                                  $(this).parent('div.item').slideUp(300, function(){
                                                                                            $('div#item_container2').empty();
                                                                                            $("div#filter_wrapper").slideDown(300);
                                                                                  });
                                                                       return false;
                                                                       }); //click() ends
                                                              }); //slideDown ends
                                                    }); //load() ends
                               }); //slideUp ends
                     return false;
                     });
                     <?php endif; ?>
                     
                     <?php if ( get_option('item_layout') == "full" ) : ?>
                     $("ul#Portfolio-Grid li a.information").click( function(){
                               var source = $(this).attr("href");
                               $('body').css("overflow","hidden");
                               $('div#item_container').fadeIn(200, function(){
                                         $('#tiptip_holder').css("display","none");
                                         $('div#portfolio_loading').css("display","block");
                                         $('div#item_container').load(source + " #me-item", function(){
                                                   var slideshow_length = $('.slideshow').length;
                                                   //Code if the slideshow exists
                                                   if ( slideshow_length == 1 ) {
                                                             $('.slideshow').flexslider({controlNav: false, smoothHeight: true});
                                                             $('.gallery a').magnificPopup({
                                                                                    type : 'image',
                                                                                    gallery : {
                                                                                               enabled:true
                                                                                    }
                                                             });
                                                             if ( $('div.item_video').length != 0 ) { $(this).fitVids(); }
                                                             $('div.item').fadeIn(100, function(){
                                                                       setTimeout(function(){
                                                                                 var item_height = $('div.item').height();
                                                                                 var window_height = $(window).height();
                                                                                 if ( window_height > item_height ) {
                                                                                           var difference = window_height - item_height;
                                                                                           var topmargin = difference/2;
                                                                                           $('div.item').css("margin-top",topmargin);
                                                                                 }
                                                                                 if ( window_height < item_height ) {
                                                                                           $('div.item').css("margin-top","30px");
                                                                                 }
                                                                                 $('div#portfolio_loading').fadeOut(400);
                                                                       },1000);
                                                                       $('div.item a.close, div.item a.close_full').click( function(){
                                                                                 $('div#item_container').empty();
                                                                                 $('div#item_container').css("display","none");
                                                                                 $('body').removeAttr('style');
                                                                       return false;
                                                                       });
                                                             });
                
                
                                                   }
                                                   //Code if the slideshow doesn't exist
                                                   if ( slideshow_length == 0 ) {
                                                           $('.gallery a').magnificPopup({
                                                                                    type : 'image',
                                                                                    gallery : {
                                                                                               enabled:true
                                                                                    }
                                                                        });
                                                           $('div#portfolio_loading').css("display","none");
                                                            var item_height = $('div.item').height();
                                                            var window_height = $(window).height();
                                                           if ( window_height > item_height ) {
                                                                     var difference = window_height - item_height;
                                                                     var topmargin = difference/2;
                                                                     $('div.item').css("margin-top",topmargin);
                                                           }
                                                           if ( window_height < item_height ) {
                                                                     $('div.item').css("margin-top","30px");
                                                           }
                                                           $('div.item').fadeIn(200, function(){
                                                                     $('div#portfolio_loading').fadeOut(400);
                                                                     $('div.item a.close, div.item a.close_full').click( function(){
                                                                               $('div#item_container').empty();
                                                                               $('div#item_container').css("display","none");
                                                                               $('body').removeAttr('style');
                                                                     return false;
                                                                     });
                                                           });
                                                   }
                                         });
                               });
                
                     return false;
                     });
                     <?php endif; ?>
                
                });
               
         })(jQuery);
         </script>
<?php
}
add_action('wp_footer','mm_js_portfolio', 12);

/* JS BACKGROUND
===========================*/
function mm_js_background() {
?>
         <script>
         (function($) {
               "use strict";

                $(document).ready(function(){ $.backstretch("<?php echo esc_url( get_option('background_image') ); ?>"); });

         })(jQuery);
         </script>
<?php
}
if ( get_option('background_image') ) { add_action('wp_footer','mm_js_background', 13); }

/* CUSTOM JS
===========================*/
function mm_custom_js() {
?>
         <script>
         (function($) {
               "use strict";
                    <?php echo get_option('custom_js'); ?>
         })(jQuery);
         </script>
<?php
}
if ( get_option('custom_js') ) { add_action('wp_footer','mm_custom_js', 14); }
?>