jQuery(document).ready(function(){

     jQuery('div#filter_wrapper').after('<div class="clear"></div><div id="category_desc"></div>');
     jQuery('ul#portfolioFilter li[data-filter!="all"]').click(function(){
               var category_description = jQuery(this).attr("data-description");
               jQuery('div#category_desc').slideUp(600, function(){
                         jQuery('div#category_desc').empty();
                         jQuery('div#category_desc').append(category_description);
                         jQuery('div#category_desc').slideDown(600);
               });
      
     return false;
     });
     
     jQuery('ul#portfolioFilter li[data-filter="all"]').click(function(){
               jQuery('div#category_desc').slideUp(600, function(){
                         jQuery('div#category_desc').empty();
               });
      
     return false;
     });

});