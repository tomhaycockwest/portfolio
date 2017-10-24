<?php

//Services Intro
function services_intro_callback() {
      $default_value = esc_attr__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis tincidunt sagittis.','me-3-9-3');
      $options = get_option('services_intro', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Intro text','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                $editor_settings =  array (
                    'textarea_rows' => 8 ,
                    'textarea_name' => 'services_intro',
                    'media_buttons' => false,
                    'teeny'         => false,
                    'tinymce'       => false,
                    // a very minimal setup
                   'quicktags'     => array ( 'buttons' => 'strong,em,link' )
                );
                wp_editor( $options, 'serviceseditor', $editor_settings );
                //echo "<textarea name='services_intro'>$options</textarea>";
                echo '<a href="" class="question" id="services-intro-tooltip" title="';
                _e('You can write an overall description about all of your services. This text will be shown right above your services.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Services Layout
function services_display_callback() {
      $options = get_option('services_display');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Services Layout','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<select name='services_display'>";
                if (!$options) {
                   echo '<option value="">';_e('Please select','me-3-9-3');echo '</option>';
                   echo '<option value="one_service">';_e('1 service per row','me-3-9-3');echo '</option>';
                   echo '<option value="three_services">';_e('3 services per row','me-3-9-3');echo '</option>';
                }
                if ($options  && $options == "one_service") {
                   echo "<option value='$options'>";_e('1 service per row','me-3-9-3');echo "</option>";
                   echo '<option value="three_services">';_e('3 services per row','me-3-9-3');echo '</option>';
                }
                if ($options  && $options == "three_services") {
                   echo "<option value='$options'>";_e('3 services per row','me-3-9-3');echo "</option>";
                   echo '<option value="one_service">';_e('1 service per row','me-3-9-3');echo '</option>';
                }
                echo "</select>";
                echo '<a href="" class="question" id="services-display-tooltip" title="';
                _e('How do you want to show your services? If you don`t intend to use long description for your services, I recommend you to pick the boxed (3 services per row) layout. Otherwise the `1 service per row` option will be the best for you.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Circle background
function services_background_callback () {
      $options = get_option('services_background');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Circle background','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                      if (!$options){
                         echo "<input id='services_background' type='text' size='30' name='services_background' value='#272727' class='color-input' />";
                         echo '<span class="color_preview" id="color9" style="background: #272727;"></span>';
                      }
                      if ($options){
                         echo "<input id='services_background' type='text' size='30' name='services_background' value='$options' class='color-input' />";
                         echo "<span class='color_preview' id='color9' style='background: $options'></span>";
                      }
                      echo "<a id='services_background_button' class='button'>";
                           _e('Choose color','me-3-9-3');
                      echo "</a>";
                      echo '<a href="" class="question" id="services-background-tooltip" title="';
                      _e('You can change the background color of the icon container circles.','me-3-9-3');
                      echo '"></a>';
           echo '</div>';
           echo "
           <script type='text/javascript'>
           jQuery('#services_background_button').ColorPicker({
               color: '$options',
               onShow: function (colpkr) {
                       jQuery(colpkr).fadeIn(500);
                       return false;
               },
               onHide: function (colpkr) {
                       jQuery(colpkr).fadeOut(500);
                       return false;
               },
               onChange: function (hsb, hex, rgb) {
                         jQuery('input#services_background').val('#' + hex);
                         jQuery('span#color9').css('background-color', '#' + hex);
	      }
           });
           </script>";
      echo '<div class="clear"></div>';
      echo '</div>';

}

?>