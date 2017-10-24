<?php
function frontend_scripts() {
         
         /* CSS FILES
         =========================*/
         //Default Google fonts
         wp_register_style( 'Brawler', 'http://fonts.googleapis.com/css?family=Brawler');
         wp_enqueue_style( 'Brawler' );
         wp_register_style( 'Vollkorn', 'http://fonts.googleapis.com/css?family=Vollkorn:400italic,400,700');
         wp_enqueue_style( 'Vollkorn' );
         wp_register_style( 'Quicksand', 'http://fonts.googleapis.com/css?family=Quicksand:400,700');
         wp_enqueue_style( 'Quicksand' );
         wp_register_style( 'DroidSans', 'http://fonts.googleapis.com/css?family=Droid+Sans:400,700');
         wp_enqueue_style( 'DroidSans' );
         //Menu font
         if ( get_option('menu_font') && get_option('menu_font') != "Arial" && get_option('menu_font') != "Tahoma" && get_option('menu_font') != "Verdana" && get_option('menu_font') != "Georgia" && get_option('menu_font') != "Times New Roman" && get_option('menu_font') != "Brawler" )
            {
            wp_register_style( 'MenuFont', 'http://fonts.googleapis.com/css?family='.get_option('menu_font'));
            wp_enqueue_style( 'MenuFont' );
            }
         //Heading font
         if ( get_option('heading_font') && get_option('heading_font') != "Arial" && get_option('heading_font') != "Tahoma" && get_option('heading_font') != "Verdana" && get_option('heading_font') != "Georgia" && get_option('heading_font') != "Times New Roman" && get_option('heading_font') != "Vollkorn" )
            {
            wp_register_style( 'HeadingFont', 'http://fonts.googleapis.com/css?family='.get_option('heading_font'));
            wp_enqueue_style( 'HeadingFont' );
            }
         //Body font
         if ( get_option('body_font') && get_option('body_font') != "Arial" && get_option('body_font') != "Tahoma" && get_option('body_font') != "Verdana" && get_option('body_font') != "Georgia" && get_option('body_font') != "Times New Roman" && get_option('body_font') != "Droid Sans" )
            {
            wp_register_style( 'BodyFont', 'http://fonts.googleapis.com/css?family='.get_option('body_font'));
            wp_enqueue_style( 'BodyFont' );
            }
         //Intro font
         if ( get_option('intro_font') && get_option('intro_font') != "inherited" && get_option('intro_font') != "Arial" && get_option('intro_font') != "Tahoma" && get_option('intro_font') != "Verdana" && get_option('intro_font') != "Georgia" && get_option('intro_font') != "Times New Roman" )
            {
            wp_register_style( 'IntroFont', 'http://fonts.googleapis.com/css?family='.get_option('intro_font'));
            wp_enqueue_style( 'IntroFont' );
            }
         //Page title font
         if ( get_option('page_title_font') && get_option('page_title_font') != "Arial" && get_option('page_title_font') != "Tahoma" && get_option('page_title_font') != "Verdana" && get_option('page_title_font') != "Georgia" && get_option('page_title_font') != "Times New Roman" && get_option('page_title_font') != "Brawler" )
            {
            wp_register_style( 'SectionFont', 'http://fonts.googleapis.com/css?family='.get_option('page_title_font'));
            wp_enqueue_style( 'SectionFont' );
            }
         //Default stylesheets
         wp_register_style( 'style', get_stylesheet_uri(), array( 'DroidSans', 'Quicksand', 'Vollkorn', 'Brawler' ));
         wp_enqueue_style( 'style' );
         wp_register_style( 'settings', get_template_directory_uri().'/settings.css', array( 'DroidSans', 'Quicksand', 'Vollkorn', 'Brawler', 'style' ));
         wp_enqueue_style( 'settings' );
         wp_register_style( 'ie8', get_template_directory_uri().'/ie8.css', array( 'DroidSans', 'Quicksand', 'Vollkorn', 'Brawler', 'style' ));
         $GLOBALS['wp_styles']->add_data( 'ie8', 'conditional', 'IE 8' );
         wp_enqueue_style( 'ie8' );


         /* JS FILES
         =========================*/
         if ( is_singular() && get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
         wp_register_script('effects', get_template_directory_uri().'/scripts/effects.js', array('jquery'), null);
         wp_enqueue_script('effects');
         wp_register_script('easing', get_template_directory_uri().'/scripts/easing.js', array('jquery'), null);
         wp_enqueue_script('easing');
         wp_register_script('hoverintent', get_template_directory_uri().'/scripts/hoverIntent.js', array('jquery'), null);
         wp_enqueue_script('hoverintent');
         wp_register_script('flex-slider', get_template_directory_uri().'/scripts/flexslider.js', array('jquery','easing'), null);
         wp_enqueue_script('flex-slider');
         wp_register_script('superfish', get_template_directory_uri().'/scripts/superfish.js', array('jquery','easing'), null);
         wp_enqueue_script('superfish');
         wp_register_script('isotope', get_template_directory_uri().'/scripts/isotope.js', array('jquery','easing'), null);
         wp_enqueue_script('isotope');
         wp_register_script('fitvids', get_template_directory_uri().'/scripts/fitvids.js', array('jquery','easing'), null);
         wp_enqueue_script('fitvids');
         wp_register_script('tipTip', get_template_directory_uri().'/scripts/tipTip.js', array('jquery','easing'), null);
         wp_enqueue_script('tipTip');
         wp_register_script('form_validation', get_template_directory_uri().'/scripts/form_validation.js', array('jquery'), null);
         wp_enqueue_script('form_validation');
         wp_register_script('mobilemenu', get_template_directory_uri().'/scripts/mobilemenu.js', array('jquery'), null);
         wp_enqueue_script('mobilemenu');
         wp_register_script('backstretch', get_template_directory_uri().'/scripts/backstretch.js', array('jquery'), null);
         wp_enqueue_script('backstretch');
         wp_register_script('magnific_popup', get_template_directory_uri().'/scripts/magnific_popup.js', array('jquery'), null);
         wp_enqueue_script('magnific_popup');
         wp_register_script('custom', get_template_directory_uri().'/scripts/custom.js', array('jquery', 'easing', 'flex-slider', 'superfish', 'isotope', 'tipTip', 'form_validation', 'fitvids', 'magnific_popup'), null);
         wp_enqueue_script('custom');
         if ( checked(1, get_option('show_description'), false) ) {
            wp_register_script('category_desc', get_template_directory_uri().'/scripts/category_desc.js', array('jquery', 'easing', 'flex-slider', 'superfish', 'isotope', 'tipTip', 'form_validation', 'fitvids', 'magnific_popup', 'custom'), null);
            wp_enqueue_script('category_desc');
         }
}
add_action('wp_enqueue_scripts', 'frontend_scripts');
?>