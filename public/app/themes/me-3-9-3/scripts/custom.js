/*

Template name: Me ( Wordpress version )
Author: Magna Themes
Support: http://www.magna-themes.com/support

Table of contents:
------------------

                  1. Page scroll
                  2. Portfolio: show hidden details
                  3. Portfolio: load and show item page
                  4. Portfolio: filtering elements
                  5. Animate social icons
                  6. Show/hide the secondary menu
                  7. Notifiaction boxes

*/

(function($) {
      "use strict";

          $(window).load(function() {
          
               //Remove preloader
               if ( $('#preloader').length != 0 ) {
                               setTimeout(function(){
                                      $('#preloader').fadeOut(1000);
                               }, 1500);
               }
          
          
               /*  1. Navigation system
               ==========================================*/
               $('div#navigation ul li a, div#hidden_items ul li a,  a.scroll_down, a.scroll_top').click(function(){
                         var id = $(this).attr("href");
                         $('html,body').stop().animate({scrollTop: $("div"+id).offset().top},'slow', function(){
                                   if ( navigator.userAgent.indexOf('iPad') != -1 ) {
                                             var yPos = window.pageYOffset;
                                             var $fixedElement = $('div#hidden_menu');
                                             $fixedElement.css({ "position": "relative" });
                                             window.scroll(0,yPos);
                                             $fixedElement.css({ "position": "fixed" });
                                   }
                         });
          
               return false;
               });
          
               /*-- Activate superfish plugin --*/
               $('div#navigation ul').superfish({
                         delay: 500, // one second delay on mouseout
                         animation: {opacity:'show',height:'show'},  // fade-in and slide-down animation
                         speed: '300', // faster animation speed
                         autoArrows:  false, //keep it false:)
                         disableHI: false // set to true to disable hoverIntent detection
               });
          
          
               /*  2. Portfolio: show/hide details
               ==========================================*/
               var show_effect = 'clip'; //select the animation type: 'blind', 'clip', 'drop','explode','fade','fold','scale','slide'
               var hide_effect = 'clip'; //select the animation type: 'blind', 'clip', 'drop','explode','fade','fold','scale','slide'
               $('ul#Portfolio-Grid li .item_content ').hoverIntent(
                         function(){ $(this).find('div.hidden').stop().show(show_effect, 200); return false; },
                         function(){ $(this).find('div.hidden').stop().hide(hide_effect, 100); return false; }
               );
          
          
               /*  3. Portfolio: filtering elements
               ==========================================*/
               var $filterType = $('#filterOptions li.active a').attr('class');
               var $holder = $('ul#Portfolio-Grid');
               var $data = $holder.clone();
               
               $('#Portfolio-Grid').mixitup({
                                          targetSelector: '.mix',
                                          filterSelector: '.filter',
                                          sortSelector: '.sort',
                                          buttonEvent: 'click',
                                          effects: ['fade','scale'],
                                          listEffects: null,
                                          easing: 'smooth',
                                          layoutMode: 'grid',
                                          targetDisplayGrid: 'inline-block',
                                          targetDisplayList: 'block',
                                          gridClass: '',
                                          listClass: '',
                                          transitionSpeed: 600,
                                          showOnLoad: 'all',
                                          sortOnLoad: false,
                                          multiFilter: false,
                                          filterLogic: 'or',
                                          resizeContainer: true,
                                          minHeight: 0,
                                          failClass: 'fail',
                                          perspectiveDistance: '3000',
                                          perspectiveOrigin: '50% 50%',
                                          animateGridList: true,
                                          onMixLoad: null,
                                          onMixStart: null,
                                          onMixEnd: null
                                      });
          

               /*  3/B. Portfolio: lightbox
               ==========================================*/
               $('.me_lightbox').magnificPopup({
                          type : 'image',
                          gallery : {
                                     enabled:true
                          }
               });


               /*  3/C. Portfolio single slider
               ==========================================*/
               if ( $('.slideshow_wrapper .slideshow').length != 0 ) {
                          $('.slideshow').flexslider({controlNav: false, smoothHeight: true});
               }
               if ( $('.slideshow_wrapper_full .slideshow').length != 0 ) {
                          $('.slideshow').flexslider({controlNav: false, smoothHeight: true});
               }


               /*  4. Load services
               ==========================================*/
               $('#services a.more-link, a.open-service').click(function(){
                         var source = $(this).attr('href');
                         $('div#service_item').append('<div id="loading"></div>');
                         $('html,body').animate({scrollTop: $('div#services').offset().top},'slow');//End: animate()
                         setTimeout(function(){
                                   $('div#service_item div#loading').slideDown(300, function(){
                                             $('div#service_item').load(source + ' #service_content', function(){
                                                       $('div#loading').css("display","none");
                                                       $('div#service_content').slideDown(600, function(){
                                                                 $('.slideshow').flexslider({controlNav: false, smoothHeight: true });
                                                                 $('div#service_content a#close_service').click(function(){
                                                                           $(this).parent('div#service_content').slideUp(300, function(){
                                                                                     $('div#service_item').empty();
                                                                           });
                                                                 return false;
                                                                 });//End: click();
                                                       });//End: slideDown()
                                             });//End: load()
                                   });//End: slideDown()
                         }, 1500); //End: setTimeout()
               return false;
               });
               
               /*  4/B. Service slider for non-ajax
               ==========================================*/
               if ( $('.service-slideshow .slideshow').length != 0 ) {
                          $('.slideshow').flexslider({controlNav: false, smoothHeight: true });
               }
          
          
               /*  5. Animate social icons
               ==========================================*/
               $('#contact_info ul.social_icons li').hover(
                         
                         function(){
                         $(this).find('a').stop().animate({marginTop: "-7px"},600);
                         return false;
                         },
                         
                         function(){
                         $(this).find('a').stop().animate({marginTop: "0px"},600);
                         return false;
                         }
               );
          
          });
          
          $(document).ready(function(){
          
               if ( information != "none" ) {
                         $("ul#Portfolio-Grid li .item_content .hidden .hidden_content a.information").tipTip({ delay: 100, content: information });
               }
               if ( visit != "none" ) {
                         $("ul#Portfolio-Grid li .item_content .hidden .hidden_content a.link").tipTip({ delay: 100, content: visit });
               }
               
               
               /*  6. Fitvids
               ==========================================*/
               if ( $('#video_wrapper').length != 0 ) { $(this).fitVids(); }
               if ( $('.post_teaser p').length != 0 ) { $('.post_teaser p').fitVids(); }
               if ( $('.text-section-content').length != 0 ) { $('.text-section-content').fitVids(); }
          
          
               /*  7. Show/hide the secondary menu
               ==========================================*/
               $(window).scroll(function(){
                         var pagetop = $(this).scrollTop();
                         if (pagetop >= 450) {
                                   $('div#hidden_menu').slideDown();
                         }
                         if (pagetop <= 450) {
                                   $('div#hidden_menu').css("display","none");
                         }
               });
               
               /*  8. Notifiaction boxes
               ==========================================*/
               $(".success a").click(function(){ $("div.success").fadeOut("slow"); return false; });
               $(".error a").click(function(){ $("div.error").fadeOut("slow"); return false; });
               $(".alert a").click(function(){ $("div.alert").fadeOut("slow"); return false; });
               $(".remember a").click(function(){ $("div.remember").fadeOut("slow"); return false; });
               
               /*  9. Tool tips
               ==========================================*/
               $("#contact_info ul.social_icons li a").tipTip({ delay: 100 });
               
          });

})(jQuery);