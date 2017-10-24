(function($) {
      "use strict";
      
      $(document).ready(function(){
      
              //Select Image
              $('.image_select').click(function(e) {
                      
                      e.preventDefault();

                      var image_container = $(this).parent().find(".admin_image_container");
                      var preview_image = $(this).parent().find(".admin_image_container img");
                      var formfield = $(this).siblings('.image_select_field');

                      var image = wp.media({
                          title: 'Upload Image',
                          // mutiple: true if you want to upload multiple files at once
                          multiple: false
                      }).open().on('select', function(e){
                          var uploaded_image = image.state().get('selection').first();
                          console.log(uploaded_image);
                          var image_url = uploaded_image.toJSON().url;
                          formfield.val(image_url);
                          if (preview_image) { jQuery(image_container).empty().append("<img src=" + image_url + " />").slideDown(); }
                          if (!preview_image) { jQuery(image_container).append("<img src=" + image_url + " />").slideDown(); }
                      });

              });

              //Remove Image
              $('.image_remove').click(function(e) {
                      
                      e.preventDefault();

                      var image_container = jQuery(this).parent().find(".admin_image_container");
                      var preview_image = jQuery(this).parent().find(".admin_image_container img");
                      var image_field = jQuery(this).parent().find(".image_select_field");
        
                      $(image_field).val('');
                      $(image_container).empty();

              });
              
              //Repeatable elements ( post slides )
              $('.repeatable-add').click(function(e) {
                      
                      e.preventDefault();

                      var field = jQuery(this).closest('td').find('.custom_repeatable li:first').clone(true).find(".admin_image_container img").remove().end();
                      var fieldLocation = jQuery(this).closest('td').find('.custom_repeatable li:first');
                      $('input', field).val('').attr('name', function(index, name) {
                                 return name.replace(/(\d+)/, function(fullMatch, n) {
                                        return Number(n) + 1;
                                 });
                      })
                      field.insertBefore(fieldLocation, jQuery(this).closest('td'));
              });
        
              $('.repeatable-remove').click(function(e){
                      e.preventDefault();
                      $(this).parent().remove();
              });
              
              //Services slider
              $('.slides-add').click(function(e) {

                      e.preventDefault();

                      var field = jQuery(this).closest('td').find('.custom_slides li:first').clone(true).find(".admin_image_container img").remove().end();
                      var fieldLocation = jQuery(this).closest('td').find('.custom_slides li:first');
                      $('input', field).val('').attr('name', function(index, name) {
                                 return name.replace(/(\d+)/, function(fullMatch, n) {
                                        return Number(n) + 1;
                                 });
                      })
                      field.insertBefore(fieldLocation, jQuery(this).closest('td'));
              });
        
              $('.slides-remove').click(function(e){
                      e.preventDefault();
                      $(this).parent().remove();
              });

      });

})(jQuery);