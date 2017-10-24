(function($) {
      "use strict";
      
      $(function() {
      
           /*-- Mobile menu --*/
           //Set the variables
           var windowWidth = $(window).width();
           var mainMenu = $('div#navigation').clone();
           var hiddenMenu = $('div#hidden_items').clone();
      
           //Append the <select> into the containers
           $('div#navigation, div#hidden_items').append('<div class="mobile-menu-container"><span class="menu-label">' + goto_text +'</span><div class="menu-lines"><span class="menu-line"></span><span class="menu-line"></span><span class="menu-line"></span></div><select class="mobile_menu"></select></div>');
      
           var selectMenu = $('select.mobile_menu');
      
           $(mainMenu, hiddenMenu).children('ul').children('li').each(function() {
      
                     var href = $(this).children('a').attr('href');
                     var text = $(this).children('a').text();
      
                               $(selectMenu).append('<option value="'+href+'">'+text+'</option>');
      
                               //FIRST SUBLEVEL
                               if ($(this).children('ul').length > 0) {
      
                                         //Select child level items
                                         $(this).children('ul').children('li').each(function() {
      
                                                   //Get the links from the first sublevel
                                                   var href2 = $(this).children('a').attr('href');
                                                   var text2 = $(this).children('a').text();
      
                                                   //Add the option to the menu
                                                   $(selectMenu).append('<option value="'+href2+'" class="mobile_sublevel">-- '+text2+'</option>');
                                                   
                                                   //SECOND SUBLEVEL
                                                   if ($(this).children('ul').length > 0) {
      
                                                             //Select child level items
                                                             $(this).children('ul').children('li').each(function() {
      
                                                                       //Get the links from the second sublevel
                                                                       var href3 = $(this).children('a').attr('href');
                                                                       var text3 = $(this).children('a').text();
      
                                                                       //Add the option to the menu
                                                                       $(selectMenu).append('<option value="'+href3+'" class="mobile_sublevel">------ '+text3+'</option>');
                                                                       
                                                                       //THIRD SUBLEVEL
                                                                       if ($(this).children('ul').length > 0) {
      
                                                                                 //Select child level items
                                                                                 $(this).children('ul').children('li').each(function() {
      
                                                                                           //Get the links from the second sublevel
                                                                                           var href4 = $(this).children('a').attr('href');
                                                                                           var text4 = $(this).children('a').text();
      
                                                                                           //Add the option to the menu
                                                                                           $(selectMenu).append('<option value="'+href4+'" class="mobile_sublevel">---------- '+text4+'</option>');
                                                                                 });
                                                                       }
                                                             });
                                                   }
                                         });
                               }
           });
      
           $('select.mobile_menu').change(function(){
                     location = this.options[this.selectedIndex].value;
           return false;
           });
      
      });

})(jQuery);