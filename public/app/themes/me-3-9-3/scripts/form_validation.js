(function($) {
      "use strict";

      $(document).ready(function() {

           /*  CONTACT FORM
           ======================================*/

           $('input#form-name').click(function() { $('input#form-name').css("color" , default_color); $('input#form-name').val(''); });
           $('input#form-mail').click(function() { $('input#form-mail').css("color" , default_color); $('input#form-mail').val(''); });
           $('textarea#form-message').click(function() { $('textarea#form-message').css("color" , default_color); $('textarea#form-message').val(''); });


           $('#contact_form button#button').click(function() {
      
                     var name = $('input#form-name').val();
                     var email = $('input#form-mail').val();
                     var comments = $('textarea#form-message').val();
                     var missing_name = $('input#form-name').attr('data-error-message');
                     var missing_mail = $('input#form-mail').attr('data-error-message');
                     var invalid_mail = $('input#form-mail').attr('data-invalid-mail');
                     var missing_message = $('textarea#form-message').attr('data-error-message');

      
                     if (name == "" || name == missing_name )
                        {
                        $('input#form-name').css("color" , error_color);
                        $('input#form-name').val(missing_name);
                        }
      
                     if (email == "" || email == invalid_mail )
                        {
                        $('input#form-mail').css("color" , error_color);
                        $('input#form-mail').val(missing_mail);
                        }
      
                     if (email != "" && email != missing_mail ) {
                        var atpos=email.indexOf("@");
                        var dotpos=email.lastIndexOf(".");
                        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
                           {
                           $('input#form-mail').css("color" , error_color);
                           $('input#form-mail').val(invalid_mail);
                           }
                     }
      
                     if ( comments == "" || comments == missing_message)
                        {
                        $('textarea#form-message').css("color" , error_color);
                        $('textarea#form-message').val(missing_message);
                        }
                         
                     if ( name == "" || name == missing_name || email == "" || email == invalid_mail || comments == "" || comments == missing_message ) { return false; }
                         
                     var atpos=email.indexOf("@");
                     var dotpos=email.lastIndexOf(".");
                     if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
                        {
                        $('input#form-mail').css("color" , error_color);
                        $('input#form-mail').val(invalid_mail);
                        return false;
                        }
      
                     $("div#contact_form input[type='text']").remove();
                     $('div#contact_form textarea').remove();
                     $('div#contact_form button').remove();
                     $('div#result').append('<div id="loading"></div>');
      
                     $.ajax({
                               type: 'post',
                               url: mail_script_url,
                               data: 'name=' + name + '&email=' + email + '&comments=' + comments,
      
                               success: function(results) {
                                         $('div#loading').remove();
                                         $('div#result').html(results);
                                         $(".success a").click(function(){ $("div.success").fadeOut("slow"); return false; });
                                         $(".error a").click(function(){ $("div.error").fadeOut("slow"); return false; });
                               }
                     });
      
           });//GO click process ends here
      
           /*  COMMENT FORM
           ======================================*/
           $('input#author_name').click(function() { $('input#author_name').css("color" , default_color); $('input#author_name').val(''); });
           $('input#author_email').click(function() { $('input#author_email').css("color" , default_color); $('input#author_email').val(''); });
           $('textarea#comment_content').click(function() { $('textarea#comment_content').css("color" , default_color); $('textarea#comment_content').val(''); });

           $('#commentform input#submit').click(function() {

                     var author_nick = $('input#author_name').val();
                     var author_email = $('input#author_email').val();
                     var author_website = $('input#author_url').val();
                     var comment = $('textarea#comment_content').val();
                     var missing_name = $('input#author_name').attr('data-error');
                     var missing_mail = $('input#author_email').attr('data-error');
                     var invalid_mail = $('input#author_email').attr('data-invalid');
                     var missing_message = $('textarea#comment_content').attr('data-error');
      
                     if (author_nick == "" || author_nick == missing_name)
                        {
                        $('input#author_name').css("color" , error_color);
                        $('input#author_name').val(missing_name);
                        }
      
                     if (author_email == "" || author_email == missing_mail)
                        {
                        $('input#author_email').css("color" , error_color);
                        $('input#author_email').val(missing_mail);
                        }
      
                     var atpos=author_email.indexOf("@");
                     var dotpos=author_email.lastIndexOf(".");
                     if (atpos<1 || dotpos<atpos+2 || dotpos+2>=author_email.length)
                        {
                        $('input#author_email').css("color" , error_color);
                        $('input#author_email').val(invalid_mail);
                        }
      
                     if (comment == "" || comment == missing_message)
                        {
                        $('textarea#comment_content').css("color" , error_color);
                        $('textarea#comment_content').val(missing_message);
                        }

                     if ( author_nick == "" || author_nick == missing_name || author_email == "" || author_email == missing_mail || author_email == invalid_mail || comment == "" || comment == missing_message ) { return false; }
      
                     var atpos=author_email.indexOf("@");
                     var dotpos=author_email.lastIndexOf(".");
                     if (atpos<1 || dotpos<atpos+2 || dotpos+2>=author_email.length)
                        {
                        $('input#author_email').css("color" , error_color);
                        $('input#author_email').val(invalid_mail);
                        return false;
                        }

                     if (author_website == "")
                        {
                        $('input#author_url').val('');
                        }

           });//GO click process ends here

      });

})(jQuery);