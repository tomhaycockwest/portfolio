<?php

/* STYLE OPTIONS
============================*/
function mm_style_options() {
?>

    <style type="text/css">
            <?php if ( get_option('menu_font_size') && get_option('menu_font_size') != "16px" ) : ?>
            div#navigation ul li { font-size: <?php echo get_option('menu_font_size'); ?>; }
            <?php endif; ?>
            <?php if ( get_option('menu_font') && get_option('menu_font') != "Brawler" ) : ?>
            div#navigation ul li, div#hidden_items ul li { font-family: <?php echo get_option('menu_font'); ?>, serif;  }
            <?php endif; ?>
            <?php if ( get_option('menu_font_color') && get_option('menu_font_color') != "#272727" ) : ?>
            div#navigation ul li a, div.title h2 span { color: <?php echo get_option('menu_font_color'); ?>; }
            <?php endif; ?>
            <?php if ( get_option('page_title_font') && get_option('page_title_font') != "Brawler" ) : ?>
            div.title h2 { font-family: <?php echo get_option('page_title_font'); ?>, serif; }
            <?php endif; ?>
            <?php if ( get_option('section_title_color') && get_option('section_title_color') != "#272727" ) : ?>
            div.title h2 span { color: <?php echo get_option('section_title_color'); ?>; }
            <?php endif; ?>
            <?php if ( get_option('hidden_menu_background') && get_option('hidden_menu_background') != "#272727" ) : ?>
            div#hidden_menu { background: <?php echo get_option('hidden_menu_background'); ?>; }
            <?php endif; ?>
            <?php if ( get_option("hidden_menu_color") && get_option("hidden_menu_color") != "#F8F8F8" ) : ?>
            div#hidden_items ul li a { color: <?php echo get_option("hidden_menu_color"); ?>; }
            <?php endif; ?>
            <?php if ( get_option('background_color') &&  get_option('background_color') != "#F8F8F8" ) : ?>
            body, div.title h2 span, div#item_container { background: <?php echo get_option('background_color'); ?>; }
            div#navigation ul li ul.sub-menu { background: <?php echo get_option('background_color'); ?>; }
            .single_title h3 span { background: <?php echo get_option('background_color'); ?>; }
            #preloader { background: <?php echo get_option('background_color'); ?> url(<?php echo get_template_directory_uri() . '/images/preloader.svg'; ; ?>) center center no-repeat; }
            <?php endif; ?>
            <?php if ( get_option('body_font') && get_option('body_font') != "Open Sans" ) : ?>
            body { font-family: <?php echo get_option('body_font'); ?>; }
            <?php endif; ?>
            <?php if ( get_option('letter_spacing') && get_option('letter_spacing') != "0px" ) : ?>
            body { letter-spacing: <?php echo get_option('letter_spacing'); ?>;  }
            <?php endif; ?>
            <?php if ( get_option('body_font_size') && get_option('body_font_size') != "15px" ) : ?>
            body { font-size: <?php echo get_option('body_font_size'); ?>; }
            <?php endif; ?>
            <?php if ( get_option('body_font_color') && get_option('body_font_color') != "#666666" ) : ?>
            body, .post_teaser a.more-link, .image_description, div.sidebar_widget ul li a, .single_meta ul li a { color: <?php echo get_option('body_font_color'); ?>; }
            <?php endif; ?>
            <?php if ( get_option('link_color') && get_option('link_color') != "#990000" ) : ?>
            a, ul#recentcomments a { color: <?php echo get_option('link_color'); ?>; }
            <?php endif; ?>
            <?php if ( get_option('line_color') && get_option('line_color') != "#CCCCCC" ) : ?>
            div#navigation ul, .post_meta ul li, div.sidebar_widget ul li, div.sidebar_widget ul.menu li { border-top: 1px solid <?php echo get_option('line_color'); ?>; border-bottom: 1px solid <?php echo get_option('line_color'); ?>; }
            .post_container { border-top: 1px solid <?php echo get_option('line_color'); ?>; }
            div.image_frame { border: 1px solid <?php echo get_option('line_color'); ?>; }
            div#navigation ul li ul.sub-menu { border: 1px solid <?php echo get_option('line_color'); ?>; border-bottom: 0px; }
            div#navigation ul li ul.sub-menu li { border-bottom: 1px solid <?php echo get_option('line_color'); ?>; }
            div.title, div.post_title, .single_title { border-bottom: 1px solid <?php echo get_option('line_color'); ?>; }
            #contact_form input#form-name, #contact_form input#form-mail, #contact_form textarea#form-message { border-bottom: 1px dashed <?php echo get_option('line_color'); ?>; }
            <?php endif; ?>
            <?php if ( (get_option('heading_font') && get_option('heading_font') != "Vollkorn")  || (get_option('heading_color') && get_option('heading_color')!= "#333333") ) : ?>
            h1, h2,  h3, h4, h5, h6, h1 a, h2 a,  h3 a, h4 a, h5 a, h6 a, div.post_title h3, #intro { font-family: '<?php echo get_option("heading_font"); ?>', arial, verdana; <?php if ( get_option("heading_color") ) : ?>color: <?php echo get_option("heading_color"); ?>; <?php endif; ?> }
            .post_teaser a.more-link, .image_description, .flex-caption { font-family: '<?php echo get_option("heading_font"); ?>', 'Times New Roman', serif; }
            ul#portfolioFilter li, .post_meta ul li, ul.commentlist li.comment .comment_author p, ul.commentlist li.comment .comment_author p a, ul.commentlist li.comment .comment_content .comment_meta { font-family: '<?php echo get_option("heading_font"); ?>', 'Times New Roman', serif; <?php if ( get_option("heading_color") ) : ?>color: <?php echo get_option("heading_color"); ?>; <?php endif; ?> }
            .services_intro p { font-family: '<?php echo get_option("heading_font"); ?>', 'Times New Roman', serif; <?php if ( get_option("heading_color") ) : ?>color: <?php echo get_option("heading_color"); ?>; <?php endif; ?> }
            #about p { font-family: '<?php echo get_option("heading_font"); ?>', 'Times New Roman', serif; <?php if ( get_option("heading_color") ) : ?>color: <?php echo get_option("heading_color"); ?>; <?php endif; ?> }
            #contact_form input#form-name, #contact_form input#form-mail, #contact_form textarea#form-message, #respond input[type="text"], #respond textarea { font-family: '<?php echo get_option("heading_font"); ?>', 'Times New Roman', serif; <?php if ( get_option("heading_color") ) : ?>color: <?php echo get_option("heading_color"); ?>; <?php endif; ?> }
            #contact_info p, #contact_info ul { font-family: '<?php echo get_option("heading_font"); ?>', 'Times New Roman', serif; <?php if ( get_option("heading_color") ) : ?>color: <?php echo get_option("heading_color"); ?>; <?php endif; ?> }
            div.wpcf7 input[type="text"], div.wpcf7 input[type="email"], div.wpcf7 input[type="tel"], div.wpcf7 input[type="url"], div.wpcf7 input[type="file"], div.wpcf7 input[type="number"], div.wpcf7 input[type="date"], div.wpcf7 textarea { font-family: '<?php echo get_option("heading_font"); ?>', serif; <?php if ( get_option("heading_color") ) : ?>color: <?php echo get_option("heading_color"); ?>; <?php endif; ?> }
            .mobile-menu-container { color: <?php echo get_option("heading_color"); ?>; border: 1px solid <?php echo get_option("heading_color"); ?>; }
            .mobile-menu-container span.menu-line { background: <?php echo get_option("heading_color"); ?>; }
            <?php endif; ?>
            <?php if ( get_option('intro_font_size') && get_option('intro_font_size') != "19px" ) : ?>
            #intro { font-size: <?php echo get_option('intro_font_size'); ?>; }
            <?php endif; ?>
            <?php if ( get_option('intro_font') && get_option('intro_font') != "inherited" ) : ?>
            #intro { font-family: '<?php echo get_option("intro_font"); ?>', 'Times New Roman', serif; }
            <?php endif; ?>
            
            <?php if ( checked(1, get_option('auto_greyscale'), false) ) : ?>
            ul#Portfolio-Grid li .item_content img { -webkit-filter: grayscale(100%); -moz-filter: grayscale(100%); -ms-filter: grayscale(100%); -o-filter: grayscale(100%); filter: grayscale(100%); filter: gray; /* IE 6-9 */ }
            <?php endif; ?>
            
            <?php if ( get_option('slider_width') && get_option('slider_width') != "700" ) : ?>
            @media screen and (min-width: 970px) { #slider_wrapper, #slider_wrapper img { width: <?php echo get_option('slider_width'); ?>px; } #slider_wrapper img { height: auto; } }
            <?php endif; ?>
            
            <?php if (  !checked(1, get_option('disable_author'), false) && checked(1, get_option('disable_date'), false) ) : ?>
            .post_meta ul li.post_author { border-top: 0px; }
            <?php endif; ?>
            <?php if (  !checked(1, get_option('disable_author'), false) && checked(1, get_option('disable_category'), false)  && checked(1, get_option('disable_comments'), false) ) : ?>
            .post_meta ul li.post_author { border-bottom: 0px; }
            <?php endif; ?>
            <?php if (  !checked(1, get_option('disable_author'), false) && checked(1, get_option('disable_date'), false) && checked(1, get_option('disable_category'), false)  && checked(1, get_option('disable_comments'), false) ) : ?>
            .post_meta ul li.post_author { border-top: 0px; border-bottom: 0px; }
            <?php endif; ?>
            <?php if (  !checked(1, get_option('disable_date'), false) && checked(1, get_option('disable_author'), false) && checked(1, get_option('disable_category'), false)  && checked(1, get_option('disable_comments'), false) ) : ?>
            .post_meta ul li.post_date { border-bottom: 0px; }
            <?php endif; ?>
            <?php if (  !checked(1, get_option('disable_category'), false) && checked(1, get_option('disable_author'), false) && checked(1, get_option('disable_date'), false)  && checked(1, get_option('disable_comments'), false) ) : ?>
            .post_meta ul li.post_category { border-top: 0px; border-bottom: 0px; }
            <?php endif; ?>
            <?php if (  !checked(1, get_option('disable_category'), false) && checked(1, get_option('disable_author'), false) && checked(1, get_option('disable_date'), false) ) : ?>
            .post_meta ul li.post_category { border-top: 0px; }
            <?php endif; ?>
            <?php if (  !checked(1, get_option('disable_category'), false) && checked(1, get_option('disable_comments'), false)  ) : ?>
            .post_meta ul li.post_category { border-bottom: 0px; }
            <?php endif; ?>
            <?php if (  !checked(1, get_option('disable_comments'), false) && checked(1, get_option('disable_author'), false) && checked(1, get_option('disable_category'), false)  && checked(1, get_option('disable_date'), false) ) : ?>
            .post_meta ul li.post_comments { border-top: 0px; }
            <?php endif; ?>
            
            <?php if ( get_option('services_background') ) : ?>
            .icon_container { border: 1px solid <?php echo get_option('services_background'); ?>; }
            .icon { background: <?php echo get_option('services_background'); ?>; }
            <?php endif; ?>
            
            <?php if ( get_option('white_space') ) : ?>
            a.scroll_down { margin-bottom: <?php echo get_option('white_space'); ?>px; }
            <?php endif; ?>
            
            <?php if ( get_option('background_image') ) : ?>
            div.title h2 span, div#navigation ul li ul.sub-menu, .single_title h3 span, div.title { background: transparent; }
            div.title { border-bottom: 0px; }
            <?php endif; ?>
            
            <?php if ( get_option('background_pattern') && get_option('background_pattern') != "no_pattern" ) :
            $pattern = get_option('background_pattern');
            $pattern_name = explode(".",$pattern);
            $pattern_path = get_template_directory_uri() . '/images/patterns/' . $pattern_name[0] . '.png';
            $pattern_size = getimagesize($pattern_path);
            $width = $pattern_size[0];
            $height = $pattern_size[1];
            ?>
            body { background: url(<?php echo esc_url( $pattern_path ); ?>) repeat; }
            div#respond textarea, div.search_elements input[type="text"], ul.page-numbers li span.current, div.wpcf7 input[type="text"], div.wpcf7 input[type="email"], div.wpcf7 input[type="tel"], div.wpcf7 input[type="url"], div.wpcf7 input[type="file"], div.wpcf7 input[type="date"], div.wpcf7 textarea, div#contact_form input[type="text"], div#contact_form textarea { background: transparent; }
            @media only screen and (-Webkit-min-device-pixel-ratio: 1.5),
            only screen and (-moz-min-device-pixel-ratio: 1.5),
            only screen and (-o-min-device-pixel-ratio: 3/2),
            only screen and (min-device-pixel-ratio: 1.5) {
            body { background: url(<?php echo get_template_directory_uri() . '/images/patterns/' . $pattern_name[0] . '@2X.png'; ?>) repeat; background-size: <?php echo esc_attr( $width ); ?>px <?php echo esc_attr( $height ); ?>px; }
            }
            div.title h2 span, div#navigation ul li ul.sub-menu, .single_title h3 span, div.title { background: transparent; }
            div.title { border-bottom: 0px; }
            <?php endif; ?>
    </style>

<?php
}
add_action('wp_head','mm_style_options', 22);

/* CUSTOM STYLES
============================*/
function mm_custom_css() {
?>
    <style type="text/css">
    <?php echo esc_attr( get_option('custom_css') ); ?>
    </style>
<?php
}
add_action('wp_head','mm_custom_css', 23);
?>