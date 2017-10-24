jQuery(document).ready(function(){

     //Animate pattern selector
     jQuery("a.background_pattern_button").click(function(){
               jQuery(this).parent().find("div.patterns_container").animate({height:"4880px"});
               jQuery(this).parent().find("a.background_pattern_less").animate({opacity:1});
               jQuery(this).animate({opacity:0.3});

     return false;
     });
     
     jQuery("a.background_pattern_less").click(function(){
               jQuery(this).parent().find("div.patterns_container").animate({height:"120px"});
               jQuery(this).parent().find("a.background_pattern_button").animate({opacity:1});
               jQuery(this).animate({opacity:0.3});

     return false;
     });

     jQuery("a#logo-margin-tooltip").tipTip({ delay: 100 });
     jQuery("a#logo-url-tooltip").tipTip({ delay: 100 });
     jQuery("a#logo-width-tooltip").tipTip({ delay: 100 });
     jQuery("a#logo-height-tooltip").tipTip({ delay: 100 });
     jQuery("a#logo-alt-tooltip").tipTip({ delay: 100 });
     jQuery("a#admin-logo-tooltip").tipTip({ delay: 100 });
     jQuery("a#shortcut-icon-tooltip").tipTip({ delay: 100 });
     jQuery("a#touch-icon1-tooltip").tipTip({ delay: 100 });
     jQuery("a#touch-icon2-tooltip").tipTip({ delay: 100 });
     jQuery("a#touch-icon3-tooltip").tipTip({ delay: 100 });
     jQuery("a#touch-icon4-tooltip").tipTip({ delay: 100 });
     jQuery("a#copyright-text-tooltip").tipTip({ delay: 100 });
     jQuery("a#error-page-title-tooltip").tipTip({ delay: 100 });
     jQuery("a#error-page-content-tooltip").tipTip({ delay: 100 });

     jQuery("a#slider-width-tooltip").tipTip({ delay: 100 });
     jQuery("a#slider-height-tooltip").tipTip({ delay: 100 });
     jQuery("a#slider-animation-tooltip").tipTip({ delay: 100 });
     jQuery("a#slider-direction-tooltip").tipTip({ delay: 100 });
     jQuery("a#slider-slideshow-tooltip").tipTip({ delay: 100 });
     jQuery("a#slider-speed-tooltip").tipTip({ delay: 100 });
     jQuery("a#slider-animation-speed-tooltip").tipTip({ delay: 100 });
     jQuery("a#slider-direction-nav-tooltip").tipTip({ delay: 100 });
     jQuery("a#slider-keyboard-nav-tooltip").tipTip({ delay: 100 });
     jQuery("a#slider-control-nav-tooltip").tipTip({ delay: 100 });
     jQuery("a#slider-mousewheel-tooltip").tipTip({ delay: 100 });
     jQuery("a#slider-randomize-tooltip").tipTip({ delay: 100 });
     jQuery("a#slider-start-tooltip").tipTip({ delay: 100 });

     jQuery("a#contact-email-tooltip").tipTip({ delay: 100 });
     jQuery("a#contact-text-tooltip").tipTip({ delay: 100 });
     jQuery("a#contact-address-tooltip").tipTip({ delay: 100 });
     jQuery("a#contact-phone-tooltip").tipTip({ delay: 100 });
     
     jQuery("a#contact-form-email-tooltip").tipTip({ delay: 100 });
     jQuery("a#contact-form-name-tooltip").tipTip({ delay: 100 });
     jQuery("a#contact-form-email-label-tooltip").tipTip({ delay: 100 });
     jQuery("a#contact-form-message-label-tooltip").tipTip({ delay: 100 });
     jQuery("a#contact-form-button-label-tooltip").tipTip({ delay: 100 });
     jQuery("a#missing-name-tooltip").tipTip({ delay: 100 });
     jQuery("a#missing-mail-tooltip").tipTip({ delay: 100 });
     jQuery("a#invalid-mail-tooltip").tipTip({ delay: 100 });
     jQuery("a#missing-message-tooltip").tipTip({ delay: 100 });
     jQuery("a#error-color-tooltip").tipTip({ delay: 100 });
     jQuery("a#contact-subject-tooltip").tipTip({ delay: 100 });
     jQuery("a#thank-you-tooltip").tipTip({ delay: 100 });
     jQuery("a#disable-phpmailer-tooltip").tipTip({ delay: 100 });
     jQuery("a#contactform7-shortcode-tooltip").tipTip({ delay: 100 });

     jQuery("a#portfolio-thumbnail-shape-tooltip").tipTip({ delay: 100 });
     jQuery(".layout-container ul li input").tipTip({ delay: 100 });
     jQuery("a#portfolio-title-tooltip").tipTip({ delay: 100 });
     jQuery("a#auto-greyscale-tooltip").tipTip({ delay: 100 });
     jQuery("a#portfolio-more-info-tooltip").tipTip({ delay: 100 });
     jQuery("a#portfolio-link-tooltip").tipTip({ delay: 100 });
     jQuery("a#portfolio-lightbox-tooltip").tipTip({ delay: 100 });
     jQuery("a#portfolio-display-tooltip").tipTip({ delay: 100 });
     jQuery("a#all-projects-tooltip").tipTip({ delay: 100 });
     jQuery("a#disable-filter-tooltip").tipTip({ delay: 100 });
     jQuery("a#disable-icons-tooltip").tipTip({ delay: 100 });
     jQuery("a#show-description-tooltip").tipTip({ delay: 100 });
     jQuery("a#meta-keyword-tooltip").tipTip({ delay: 100 });
     jQuery("a#meta-description-tooltip").tipTip({ delay: 100 });
     jQuery("a#intro-text-tooltip").tipTip({ delay: 100 });
     jQuery("a#home-video-tooltip").tipTip({ delay: 100 });
     jQuery("a#section1-content-tooltip").tipTip({ delay: 100 });
     jQuery("a#section2-content-tooltip").tipTip({ delay: 100 });
     jQuery("a#section3-content-tooltip").tipTip({ delay: 100 });
     jQuery("a#section4-content-tooltip").tipTip({ delay: 100 });
     jQuery("a#section5-content-tooltip").tipTip({ delay: 100 });
     jQuery("a#section6-content-tooltip").tipTip({ delay: 100 });
     jQuery("a#section7-content-tooltip").tipTip({ delay: 100 });
     jQuery("a#section8-content-tooltip").tipTip({ delay: 100 });
     jQuery("a#section9-content-tooltip").tipTip({ delay: 100 });
     jQuery("a#section10-content-tooltip").tipTip({ delay: 100 });
     jQuery("a#services-title-tooltip").tipTip({ delay: 100 });
     jQuery("a#about-title-tooltip").tipTip({ delay: 100 });
     jQuery("a#contact-title-tooltip").tipTip({ delay: 100 });
     jQuery("a#text1-title-tooltip").tipTip({ delay: 100 });
     jQuery("a#text2-title-tooltip").tipTip({ delay: 100 });
     jQuery("a#text3-title-tooltip").tipTip({ delay: 100 });
     jQuery("a#text4-title-tooltip").tipTip({ delay: 100 });
     jQuery("a#text5-title-tooltip").tipTip({ delay: 100 });
     jQuery("a#text1-content-tooltip").tipTip({ delay: 100 });
     jQuery("a#text2-content-tooltip").tipTip({ delay: 100 });
     jQuery("a#text3-content-tooltip").tipTip({ delay: 100 });
     jQuery("a#text4-content-tooltip").tipTip({ delay: 100 });
     jQuery("a#text5-content-tooltip").tipTip({ delay: 100 });
     jQuery("a#disable-slider-tooltip").tipTip({ delay: 100 });
     jQuery("a#disable-portfolio-tooltip").tipTip({ delay: 100 });
     jQuery("a#disable-services-tooltip").tipTip({ delay: 100 });
     jQuery("a#disable-about-tooltip").tipTip({ delay: 100 });
     jQuery("a#disable-contact-tooltip").tipTip({ delay: 100 });
     jQuery("a#white-space-tooltip").tipTip({ delay: 100 });
     jQuery("a#preloader-tooltip").tipTip({ delay: 100 });

     jQuery("a#disable-overlay-tooltip").tipTip({ delay: 100 });
     
     jQuery("a#services-display-tooltip").tipTip({ delay: 100 });
     jQuery("a#services-intro-tooltip").tipTip({ delay: 100 });
     jQuery("a#services-image-tooltip").tipTip({ delay: 100 });
     jQuery("a#services-background-tooltip").tipTip({ delay: 100 });
     
     jQuery("a#read-more-tooltip").tipTip({ delay: 100 });
     jQuery("a#disable-author-tooltip").tipTip({ delay: 100 });
     jQuery("a#disable-date-tooltip").tipTip({ delay: 100 });
     jQuery("a#disable-category-tooltip").tipTip({ delay: 100 });
     jQuery("a#disable-comments-tooltip").tipTip({ delay: 100 });
     jQuery("a#older-posts-tooltip").tipTip({ delay: 100 });
     jQuery("a#newer-posts-tooltip").tipTip({ delay: 100 });
     jQuery("a#blog-layout-tooltip").tipTip({ delay: 100 });
     
     jQuery("a#commentform-name-tooltip").tipTip({ delay: 100 });
     jQuery("a#commentform-name-error-tooltip").tipTip({ delay: 100 });
     jQuery("a#commentform-email-tooltip").tipTip({ delay: 100 });
     jQuery("a#commentform-email-error-tooltip").tipTip({ delay: 100 });
     jQuery("a#commentform-email-invalid-tooltip").tipTip({ delay: 100 });
     jQuery("a#commentform-website-tooltip").tipTip({ delay: 100 });
     jQuery("a#commentform-message-tooltip").tipTip({ delay: 100 });
     jQuery("a#commentform-message-error-tooltip").tipTip({ delay: 100 });

});