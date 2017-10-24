<?php

function slider_width_callback() {
      
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Slider width','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                $options = get_option('slider_width');
                if (!$options) {
                   echo "<input type='text' name='slider_width' value='700' />";
                }
                if ($options) {
                   echo "<input type='text' name='slider_width' value='$options' />";
                }
                echo '<a href="" class="question" id="slider-width-tooltip" title="';
                _e('The width of the slider in pixels. The deafault value is 700','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';

}

function slider_animation_callback(){

      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Animation','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                      $options = get_option('slider_animation');
                      if (!$options){
                         echo "<select name='slider_animation'>";
                              echo "<option value='slide' selected='selected'>";echo __('Slide','me-3-9-3');echo "</option>";
                              echo "<option value='fade'>";echo __('Fade','me-3-9-3');echo "</option>";
                         echo "</select>";
                      }
                      if ($options){
                         echo "<select name='slider_animation'>";
                         echo "<option value='$options' selected='selected'>$options</option>";
                      if ($options == 'slide'){
                         echo "<option value='fade'>";echo __('Fade','me-3-9-3');echo "</option>";
                         }
                      if ($options == 'fade'){
                         echo "<option value='slide'>";echo __('Slide','me-3-9-3');echo "</option>";
                         }
                         echo "</select>";
                      }

                echo '<a href="" class="question" id="slider-animation-tooltip" title="';
                _e('Select your animation type, `fade` or `slide`','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

function slider_direction_callback(){
      
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Sliding direction','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                
                $options = get_option('slider_direction');
                if ( !$options ) {
                   echo "<select name='slider_direction'>";
                        echo "<option value='' selected='selected'></option>";
                        echo "<option value='horizontal'>";echo __('Horizontal','me-3-9-3');echo "</option>";
                        echo "<option value='vertical'>";echo __('Vertical','me-3-9-3');echo "</option>";
                   echo "</select>";
                }
                if ( $options == "horizontal" ) {
                   echo "<select name='slider_direction'>";
                        echo "<option value='horizontal' selected='selected'>";echo __('Horizontal','me-3-9-3');echo "</option>";
                        echo "<option value='vertical'>";echo __('Vertical','me-3-9-3');echo "</option>";
                   echo "</select>";
                }
                if ( $options == "vertical" ) {
                   echo "<select name='slider_direction'>";
                        echo "<option value='horizontal'>";echo __('Horizontal','me-3-9-3');echo "</option>";
                        echo "<option value='vertical' selected='selected'>";echo __('Vertical','me-3-9-3');echo "</option>";
                   echo "</select>";
                }
                
                echo '<a href="" class="question" id="slider-direction-tooltip" title="';
                _e('Select the sliding direction, `horizontal` or `vertical`. It works only, if the `slide` animation has been selected in the prev option.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';

}

function slider_slideshow_callback() {
      
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Auto play','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                
                $options = get_option('slider_slideshow');
                echo "<select name='slider_slideshow'>";
                if (!$options) {
                   echo "<option value='true' selected='selected'>";echo __('True','me-3-9-3');echo "</option>";
                   echo "<option value='false'>";echo __('False','me-3-9-3');echo "</option>";
                }
                if ($options == 'false'){
                  echo "<option value='false' selected='selected'>";echo __('False','me-3-9-3');echo "</option>";
                  echo "<option value='true'>";echo __('True','me-3-9-3');echo "</option>";
                }
                if ($options == 'true'){
                  echo "<option value='false'>";echo __('False','me-3-9-3');echo "</option>";
                  echo "<option value='true' selected='selected'>";echo __('True','me-3-9-3');echo "</option>";                }
                echo "</select>";

                echo '<a href="" class="question" id="slider-slideshow-tooltip" title="';
                _e('Play the slide show automatically.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';

}

function slider_speed_callback() {
      
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Slideshow speed','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                $options = get_option('slider_speed');
                if (!$options) {
                   echo "<input type='text' name='slider_speed' value='7000' />";
                }
                if ($options) {
                   echo "<input type='text' name='slider_speed' value='$options' />";
                }
                echo '<a href="" class="question" id="slider-speed-tooltip" title="';
                _e('Set the speed of the slideshow cycling, in milliseconds.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';

}

function slider_animation_speed_callback() {
      
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Animation speed','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                $options = get_option('slider_animation_speed');
                if (!$options) {
                   echo "<input type='text' name='slider_animation_speed' value='600' />";
                }
                if ($options) {
                   echo "<input type='text' name='slider_animation_speed' value='$options' />";
                }
                echo '<a href="" class="question" id="slider-animation-speed-tooltip" title="';
                _e('Set the speed of animations, in milliseconds.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';

}

function slider_direction_nav_callback() {
      
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Allow Prev/Next buttons?','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                
                $options = get_option('slider_direction_nav');
                echo "<select name='slider_direction_nav'>";
                if (!$options) {
                   echo "<option value='true' selected='selected'>";echo __('True','me-3-9-3');echo "</option>";
                   echo "<option value='false'>";echo __('False','me-3-9-3');echo "</option>";
                }
                if ($options == 'false'){
                   echo "<option value='true'>";echo __('True','me-3-9-3');echo "</option>";
                   echo "<option value='false' selected='selected'>";echo __('False','me-3-9-3');echo "</option>";
                }
                if ($options == 'true'){
                   echo "<option value='true' selected='selected'>";echo __('True','me-3-9-3');echo "</option>";
                   echo "<option value='false'>";echo __('False','me-3-9-3');echo "</option>";
                }
                echo "</select>";

                echo '<a href="" class="question" id="slider-direction-nav-tooltip" title="';
                _e('Create navigation for previous/next navigation? (true/false).','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

function slider_control_nav_callback() {
      
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Allow ControlNav?','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                
                $options = get_option('slider_control_nav');
                
                echo "<select name='slider_control_nav'>";
                if (!$options) {
                   echo "<option value='true'>";echo __('true','me-3-9-3');echo "</option>";
                   echo "<option value='false' selected='selected'>";echo __('false','me-3-9-3');echo "</option>";
                }
                if ($options == 'false'){
                   echo "<option value='true'>";echo __('true','me-3-9-3');echo "</option>";
                   echo "<option value='false' selected='selected'>";echo __('false','me-3-9-3');echo "</option>";
                }
                if ($options == 'true'){
                   echo "<option value='true' selected='selected'>";echo __('true','me-3-9-3');echo "</option>";
                   echo "<option value='false'>";echo __('false','me-3-9-3');echo "</option>";
                }
                echo "</select>";

                echo '<a href="" class="question" id="slider-control-nav-tooltip" title="';
                _e('Create navigation for paging control of each slide?','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

function slider_keyboard_nav_callback() {
      
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Keyboard navigation','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                $options = get_option('slider_keyboard_nav');
                echo "<select name='slider_keyboard_nav'>";
                if (!$options) {
                   echo "<option value='true' selected='selected'>";echo __('true','me-3-9-3');echo "</option>";
                   echo "<option value='false'>";echo __('False','me-3-9-3');echo "</option>";
                }

                if ($options == 'false'){
                   echo "<option value='true'>";echo __('True','me-3-9-3');echo "</option>";
                   echo "<option value='false' selected='selected'>";echo __('False','me-3-9-3');echo "</option>";
                }
                if ($options == 'true'){
                   echo "<option value='true' selected='selected'>";echo __('True','me-3-9-3');echo "</option>";
                   echo "<option value='false'>";echo __('False','me-3-9-3');echo "</option>";
                }
                echo "</select>";

                echo '<a href="" class="question" id="slider-keyboard-nav-tooltip" title="';
                _e('Allow slider navigating via keyboard left/right keys?','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';

}

function slider_mousewheel_callback() {
      
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Mousewheel navigation?','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                
                $options = get_option('slider_mousewheel');
                echo "<select name='slider_mousewheel'>";
                if (!$options) {
                   echo "<option value='true'>";echo __('True','me-3-9-3');echo "</option>";
                   echo "<option value='false' selected='selected'>";echo __('False','me-3-9-3');echo "</option>";
                }
                if ($options == 'false'){
                   echo "<option value='true'>";echo __('True','me-3-9-3');echo "</option>";
                   echo "<option value='false' selected='selected'>";echo __('False','me-3-9-3');echo "</option>";
                }
                if ($options == 'true'){
                   echo "<option value='true' selected='selected'>";echo __('True','me-3-9-3');echo "</option>";
                   echo "<option value='false'>";echo __('False','me-3-9-3');echo "</option>";
                }
                echo "</select>";

                echo '<a href="" class="question" id="slider-mousewheel-tooltip" title="';
                _e('Allows slider navigating via mousewheel.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

function slider_randomize_callback() {

      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Randomize','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                
                $options = get_option('slider_randomize');
      
                echo "<select name='slider_randomize'>";
                if (!$options) {
                   echo "<option value='true'>";echo __('True','me-3-9-3');echo "</option>";
                   echo "<option value='false' selected='selected'>";echo __('False','me-3-9-3');echo "</option>";
                }
                if ($options == 'false'){
                   echo "<option value='true'>";echo __('True','me-3-9-3');echo "</option>";
                   echo "<option value='false' selected='selected'>";echo __('False','me-3-9-3');echo "</option>";
                }
                if ($options == 'true'){
                   echo "<option value='true' selected='selected'>";echo __('True','me-3-9-3');echo "</option>";
                   echo "<option value='false'>";echo __('False','me-3-9-3');echo "</option>";
                }
                echo "</select>";

                echo '<a href="" class="question" id="slider-randomize-tooltip" title="';
                _e('Randomize slide order.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

function slider_start_callback() {
      
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Slide to start','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                $options = get_option('slider_start');
                if (!$options) {
                   echo "<input type='text' name='slider_start' value='0' />";
                }
                if ($options) {
                   echo "<input type='text' name='slider_start' value='$options' />";
                }
                echo '<a href="" class="question" id="slider-start-tooltip" title="';
                _e('The slide that the slider should start on. 0 = first slide.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';

}

?>