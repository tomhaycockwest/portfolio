<?php

//Logo margin
function logo_margin_callback() {
  
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Top Margin','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                $default_value = 19;
                $options = get_option('logo_margin', $default_value);
           echo "<select name='logo_margin' style='width: 60px;'>";
           echo "<option value='$options' selected='selected'>$options</option>
                 <option value='0'>0</option>
                 <option value='1'>1</option>
                 <option value='2'>2</option>
                 <option value='3'>3</option>
                 <option value='4'>4</option>
                 <option value='5'>5</option>
                 <option value='6'>6</option>
                 <option value='7'>7</option>
                 <option value='8'>8</option>
                 <option value='9'>9</option>
                 <option value='10'>10</option>
                 <option value='11'>11</option>
                 <option value='12'>12</option>
                 <option value='13'>13</option>
                 <option value='14'>14</option>
                 <option value='15'>15</option>
                 <option value='16'>16</option>
                 <option value='17'>17</option>
                 <option value='18'>18</option>
                 <option value='19'>19</option>
                 <option value='20'>20</option>
                 <option value='21'>21</option>
                 <option value='22'>22</option>
                 <option value='23'>23</option>
                 <option value='24'>24</option>
                 <option value='25'>25</option>
                 <option value='26'>26</option>
                 <option value='27'>27</option>
                 <option value='28'>28</option>
                 <option value='29'>29</option>
                 <option value='30'>30</option>
                 <option value='31'>31</option>
                 <option value='32'>32</option>
                 <option value='33'>33</option>
                 <option value='34'>34</option>
                 <option value='35'>35</option>
                 <option value='36'>36</option>
                 <option value='37'>37</option>
                 <option value='38'>38</option>
                 <option value='39'>39</option>
                 <option value='40'>40</option>
                 <option value='41'>41</option>
                 <option value='42'>42</option>
                 <option value='43'>43</option>
                 <option value='44'>44</option>
                 <option value='45'>45</option>
                 <option value='46'>46</option>
                 <option value='47'>47</option>
                 <option value='48'>48</option>
                 <option value='49'>49</option>
                 <option value='50'>50</option>";
           echo "</select>";
           echo '<label for="logo_margin">';
           echo __('in pixels','me-3-9-3');
           echo '</label>';
                echo '<a href="" class="question" id="logo-margin-tooltip" title="';
                _e('You can set the distance (in pixels) between the top of the viewport and your logo. The default value is 19px','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';

}

//Logo url
function logo_url_callback() {
      $default_value = get_template_directory_uri() . '/images/logo.png';
      $options = get_option('logo_url', $default_value);
      $select_image_text = __('Select Image','me-3-9-3');
      $remove_image_text =  __('Remove','me-3-9-3');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Site logo','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input id='logo_url' type='text' size='36' name='logo_url' value='$options' class='image_select_field'/>";
                echo "<a id='logo_url_button' class='button image_select'>$select_image_text</a>";
                echo "<a class='button image_remove'>$remove_image_text</a>";
                echo '<a href="" class="question" id="logo-url-tooltip" title="';
                _e('The full path to your logo. You can define it manually, but I recommend you to use the inbuilt media manager by clicking on the `Select Image` button. After you picked one image as your logo, click the `Insert into Post` to assign the url to the awaiting form field.','me-3-9-3');
                echo '"></a>';
                if ( !$options ) { echo '<div class="admin_image_container"><img src="'.$default_image.'" alt="" /></div>'; }
                if ( $options ) { echo '<div class="admin_image_container"><img src="'.$options.'" alt="" /></div>'; }
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Logo width
function logo_width_callback() {
      $default_value = 86;
      $options = get_option('logo_width', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Logo width','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input id='width' type='text' size='36' name='logo_width' value='$options' />";
                echo '<a href="" class="question" id="logo-width-tooltip" title="';
                _e('The width of the logo. It is optional.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Logo height
function logo_height_callback() {
      $default_value = 86;
      $options = get_option('logo_height', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Logo height','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input id='height' type='text' size='36' name='logo_height' value='$options' />";
                echo '<a href="" class="question" id="logo-height-tooltip" title="';
                _e('The height of the logo. It is optional.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Logo alt text
function logo_alt_callback() {
      $options = get_option('logo_alt');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Logo alt text','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='logo_alt' value='$options' size='60' />";
                echo '<a href="" class="question" id="logo-alt-tooltip" title="';
                _e('If the url of the logo is wrong, this text will substitute the image.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Admin Logo
function admin_logo_callback() {
      $options = get_option('admin_logo');
      $logo_button_text = __('Select Image','me-3-9-3');
      $remove_button_text =  __('Remove','me-3-9-3');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Admin logo','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input id='admin_logo' type='text' size='36' name='admin_logo' value='$options' class='image_select_field'/>";
                echo "<a id='admin_logo_button' class='button image_select'>$logo_button_text</a>";
                echo "<a class='button image_remove'>$remove_button_text</a>";
                echo '<a href="" class="question" id="admin-logo-tooltip" title="';
                _e('You can replace the default `Wordpress` logo on the log in page.','me-3-9-3');
                echo '"></a>';
                if ( !$options ) { echo '<div class="admin_image_container logo-container"></div>'; }
                if ( $options ) { echo '<div class="admin_image_container logo-container"><img src="'.$options.'" alt="" /></div>'; }
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Copyright text
function copyright_text_callback() {
      $default_value = esc_attr__('Magna Themes 2016 &copy; All Rights Reserved','me-3-9-3');
      $options = get_option('copyright_text', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Copyright text','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='copyright_text' value='$options' size='60' />";
                echo '<a href="" class="question" id="copyright-text-tooltip" title="';
                _e('You can define a copyright text that will be appeared at the bottom of the page.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//404 title
function error_page_title_callback() {
      $options = get_option('error_page_title');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('404 title','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='error_page_title' value='$options' size='60' />";
                echo '<a href="" class="question" id="error-page-title-tooltip" title="';
                _e('Title of the 404 page. The server will typically generate `404 - Not Found` web page, when a user attempts to follow a broken or dead link.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//404 content
function error_page_content_callback() {
      $options = get_option('error_page_content');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('404 content','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                $editor_settings =  array (
                    'textarea_rows' => 8 ,
                    'textarea_name' => 'error_page_content',
                    'media_buttons' => false,
                    'teeny'         => false,
                    'tinymce'       => false,
                    // a very minimal setup
                   'quicktags'     => array ( 'buttons' => 'strong,em,link' )
                );
                wp_editor( $options, 'erroreditor', $editor_settings );
                //echo "<textarea name='error_page_content'>$options</textarea>";
                echo '<a href="" class="question" id="error-page-content-tooltip" title="';
                _e('You can define the contents of the 404 page ( text only ).','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Shortcut icon url
function shortcut_icon_callback() {
      $options = get_option('shortcut_icon');
      $shortcut_button_text = __('Select Image','me-3-9-3');
      $remove_button_text =  __('Remove','me-3-9-3');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Shortcut icon','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input id='shortcut_icon' type='text' size='36' name='shortcut_icon' value='$options' class='image_select_field' />";
                echo "<a id='shortcut_icon_button' class='button image_select'>$shortcut_button_text</a>";
                echo "<a class='button image_remove'>$remove_button_text</a>";
                echo '<a href="" class="question" id="shortcut-icon-tooltip" title="';
                _e('You can add a shortcut icon (favicon) to your site.','me-3-9-3');
                echo '"></a>';
                if ( !$options ) { echo '<div class="admin_image_container logo-container"></div>'; }
                if ( $options ) { echo '<div class="admin_image_container logo-container"><img src="'.$options.'" alt="" /></div>'; }
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Touch icon 1 url 
function touch_icon1_callback() {
      $options = get_option('touch_icon1');
      $touchicon_button_text = __('Select Image','me-3-9-3');
      $remove_button_text =  __('Remove','me-3-9-3');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Apple touch icon','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input id='touch_icon1' type='text' size='36' name='touch_icon1' value='$options' class='image_select_field'/>";
                echo "<a id='touch_icon1_button' class='button image_select'>$touchicon_button_text</a>";
                echo "<a class='button image_remove'>$remove_button_text</a>";
                echo '<a href="" class="question" id="touch-icon1-tooltip" title="';
                _e('An icon that users can add to the home screen of their smart devices.','me-3-9-3');
                echo '"></a>';
                if ( !$options ) { echo '<div class="admin_image_container logo-container"></div>'; }
                if ( $options ) { echo '<div class="admin_image_container logo-container"><img src="'.$options.'" alt="" /></div>'; }
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

?>