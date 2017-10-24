<?php
//Custom css
function custom_css_callback() {
      $options = get_option('custom_css');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Custom css','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<textarea name='custom_css'>$options</textarea>";
                echo '<a href="" class="question" id="custom-css-tooltip"></a>';
                $css_tooltip = __('You can add your custom css code to the &lt;head>. Please don not use the &lt;style> tags, because the theme generates them automatically!','me-3-9-3');
                echo '<script type="text/javascript">';
                echo "var css_tooltip = '$css_tooltip';";
                echo 'jQuery(document).ready(function(){
                           jQuery("a#custom-css-tooltip").tipTip({ delay: 100, content: css_tooltip });
                     });';
                echo '</script>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Custom js
function custom_js_callback() {
      $options = get_option('custom_js');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Custom javascript','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<textarea name='custom_js'>$options</textarea>";
                echo '<a href="" class="question" id="custom-js-tooltip"></a>';
                $js_tooltip = __('You can add your custom javascript code to the &lt;head>. Please don not use the &lt;script> html tags, because the theme generates them automatically!','me-3-9-3');
                echo '<script type="text/javascript">';
                echo "var js_tooltip = '$js_tooltip';";
                echo 'jQuery(document).ready(function(){
                           jQuery("a#custom-js-tooltip").tipTip({ delay: 100, content: js_tooltip });
                     });';
                echo '</script>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}
?>