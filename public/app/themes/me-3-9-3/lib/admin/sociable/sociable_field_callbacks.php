<?php

//Facebook url
function facebook_url_callback() {
      $options = get_option('facebook_url');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Facebook page url','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='facebook_url' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Facebook tooltip
function facebook_tooltip_callback() {
      $options = get_option('facebook_tooltip');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Facebook icon tooltip','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='facebook_tooltip' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Twitter url
function twitter_url_callback() {
      $options = get_option('twitter_url');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Twitter url','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='twitter_url' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Twitter tooltip
function twitter_tooltip_callback() {
      $options = get_option('twitter_tooltip');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Twitter icon tooltip','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='twitter_tooltip' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Rss url
function rss_url_callback() {
      $options = get_option('rss_url');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Rss url','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='rss_url' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Rss tooltip
function rss_tooltip_callback() {
      $options = get_option('rss_tooltip');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Rss icon tooltip','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='rss_tooltip' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Dribble url
function dribble_url_callback() {
      $options = get_option('dribble_url');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Dribble profile url','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='dribble_url' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Dribble tooltip
function dribble_tooltip_callback() {
      $options = get_option('dribble_tooltip');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Dribble icon tooltip','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='dribble_tooltip' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Youtube url
function youtube_url_callback() {
      $options = get_option('youtube_url');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Youtube channel','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='youtube_url' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Youtube tooltip
function youtube_tooltip_callback() {
      $options = get_option('youtube_tooltip');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Youtube icon tooltip','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='youtube_tooltip' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Vimeo url
function vimeo_url_callback() {
      $options = get_option('vimeo_url');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Vimeo channel','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='vimeo_url' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Vimeo tooltip
function vimeo_tooltip_callback() {
      $options = get_option('vimeo_tooltip');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Vimeo icon tooltip','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='vimeo_tooltip' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//LinkedIn url
function linkedin_url_callback() {
      $options = get_option('linkedin_url');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('LinkedIn profile url','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='linkedin_url' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//LinkedIn tooltip
function linkedin_tooltip_callback() {
      $options = get_option('linkedin_tooltip');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('LinkedIn icon tooltip','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='linkedin_tooltip' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//DeviantArt url
function deviant_url_callback() {
      $options = get_option('deviant_url');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('DeviantArt profile url','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='deviant_url' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//DeviantArt tooltip
function deviant_tooltip_callback() {
      $options = get_option('deviant_tooltip');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('DeviantArt icon tooltip','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='deviant_tooltip' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Tumblr url
function tumblr_url_callback() {
      $options = get_option('tumblr_url');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Tumblr blog','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='tumblr_url' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Tumblr tooltip
function tumblr_tooltip_callback() {
      $options = get_option('tumblr_tooltip');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Tumblr icon tooltip','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='tumblr_tooltip' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Pinterest url
function pinterest_url_callback() {
      $options = get_option('pinterest_url');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Pinterest url','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='pinterest_url' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Pinterest tooltip
function pinterest_tooltip_callback() {
      $options = get_option('pinterest_tooltip');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Pinterest icon tooltip','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='pinterest_tooltip' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Google+ url
function google_url_callback() {
      $options = get_option('google_url');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Google plus url','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='google_url' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Google+ tooltip
function google_tooltip_callback() {
      $options = get_option('google_tooltip');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Google plus icon tooltip','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='google_tooltip' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Instagram url
function instagram_url_callback() {
      $options = get_option('instagram_url');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Instagram url','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='instagram_url' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Instagram tooltip
function instagram_tooltip_callback() {
      $options = get_option('instagram_tooltip');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Instagram icon tooltip','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='instagram_tooltip' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//soundcloud url
function soundcloud_url_callback() {
      $options = get_option('soundcloud_url');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('SoundCloud url','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='soundcloud_url' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//soundcloud tooltip
function soundcloud_tooltip_callback() {
      $options = get_option('soundcloud_tooltip');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('SoundCloud icon tooltip','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='soundcloud_tooltip' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//github url
function github_url_callback() {
      $options = get_option('github_url');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Github url','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='github_url' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//github tooltip
function github_tooltip_callback() {
      $options = get_option('github_tooltip');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Github icon tooltip','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='github_tooltip' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//flickr url
function flickr_url_callback() {
      $options = get_option('flickr_url');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Flickr url','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='flickr_url' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//flickr tooltip
function flickr_tooltip_callback() {
      $options = get_option('flickr_tooltip');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Flickr icon tooltip','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='flickr_tooltip' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//behance url
function behance_url_callback() {
      $options = get_option('behance_url');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Behance url','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='behance_url' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//behance tooltip
function behance_tooltip_callback() {
      $options = get_option('behance_tooltip');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Behance icon tooltip','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='behance_tooltip' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Skype url
function skype_address_callback() {
      $options = get_option('skype_address');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Skype address','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='skype_address' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Skype tooltip
function skype_tooltip_callback() {
      $options = get_option('skype_tooltip');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Skype icon tooltip','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='skype_tooltip' value='$options' size='60' />";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Skype Button
function skype_button_callback() {
      $options = get_option('skype_button');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Skype button <a href="https://www.skype.com/en/developer/create-contactme-buttons/" target="_blank">code</a>','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<textarea name='skype_button'>$options</textarea>";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

?>