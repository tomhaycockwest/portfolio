<?php
function meta_keyword_callback() {
      $options = get_option('meta_keyword');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Meta keywords','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='meta_keyword' value='$options' size='60' />";
                echo '<a href="" class="question" id="meta-keyword-tooltip" title="';
                _e('You can add keywords to your website here ( but don not forget separate them by commas ). In fact this is not a very important thing in the modern SEO, this is just an additional option for you :)','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

function meta_description_callback() {
      $options = get_option('meta_description');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Meta description','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<textarea name='meta_description'>$options</textarea>";
                echo '<a href="" class="question" id="meta-description-tooltip" title="';
                _e('Define a description for your website. This is an importan tag, because the content of this element tells the search engine what your site is about.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}
?>