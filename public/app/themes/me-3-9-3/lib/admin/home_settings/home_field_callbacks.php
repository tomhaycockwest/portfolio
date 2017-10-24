<?php
//Intro text
function intro_text_callback() {
      $default_value = esc_attr__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in sodales eros. Donec bibendum, lectus sit amet volutpat tristique, libero magna fringilla nibh, non tristique lorem dolor sit amet arcu.','me-3-9-3');
      $options = get_option('intro_text',$default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Intro text','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                $editor_settings =  array (
                    'textarea_rows' => 8 ,
                    'textarea_name' => 'intro_text',
                    'media_buttons' => false,
                    'teeny'         => false,
                    'tinymce'       => false,
                    // a very minimal setup
                   'quicktags'     => array ( 'buttons' => 'strong,em,link' )
                );
                wp_editor( $options, 'introeditor', $editor_settings );
                //echo "<textarea name='intro_text'>$options</textarea>";
                echo '<a href="" class="question" id="intro-text-tooltip" title="';
                _e('You can write an introduction text for your site. This text will be shown right above the slider on the homepage.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Home video
function home_video_callback() {
      $options = get_option('home_video');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Static video','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<textarea name='home_video'>$options</textarea>";
                echo '<a href="" class="question" id="home-video-tooltip" title="';
                _e('Insert the embed code into this textarea ( only the iframe! ). If you add a video to the homepage, the slider will be replaced with the video automatically!','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Section One content
function section1_content_callback() {
      $options = get_option('section1_content');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Section 1 content','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<select name='section1_content'>";
                   if (!$options || $options == "slider") { echo '<option value="slider">slider</option><option disabled>-----------</option>'; }
                   if ($options && $options != "slider" ) { echo '<option value="'.$options.'">'.$options.'</option><option disabled>-----------</option>'; }
                   echo '<option value="slider">slider</option>';
                   echo '<option value="portfolio">portfolio</option>';
                   echo '<option value="services">services</option>';
                   echo '<option value="about">about</option>';
                   echo '<option value="contact">contact</option>';
                   echo '<option value="text1">text1</option>';
                   echo '<option value="text2">text2</option>';
                   echo '<option value="text3">text3</option>';
                   echo '<option value="text4">text4</option>';
                   echo '<option value="text5">text5</option>';
                   echo '<option value="nothing">nothing</option>';
                echo "</select>";
                echo '<a href="" class="question" id="section1-content-tooltip" title="';
                _e('Select the content for the 1st section.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Section Two content
function section2_content_callback() {
      $options = get_option('section2_content');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Section 2 content','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<select name='section2_content'>";
                   if (!$options || $options == "portfolio") { echo '<option value="portfolio">portfolio</option><option disabled>-----------</option>'; }
                   if ($options && $options != "portfolio" ) { echo '<option value="'.$options.'">'.$options.'</option><option disabled>-----------</option>'; }
                   echo '<option value="slider">slider</option>';
                   echo '<option value="portfolio">portfolio</option>';
                   echo '<option value="services">services</option>';
                   echo '<option value="about">about</option>';
                   echo '<option value="contact">contact</option>';
                   echo '<option value="text1">text1</option>';
                   echo '<option value="text2">text2</option>';
                   echo '<option value="text3">text3</option>';
                   echo '<option value="text4">text4</option>';
                   echo '<option value="text5">text5</option>';
                   echo '<option value="nothing">nothing</option>';
                echo "</select>";
                echo '<a href="" class="question" id="section2-content-tooltip" title="';
                _e('Select the content for the 2nd section.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Section Three content
function section3_content_callback() {
      $options = get_option('section3_content');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Section 3 content','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<select name='section3_content'>";
                   if (!$options || $options == "services") { echo '<option value="services">services</option><option disabled>-----------</option>'; }
                   if ($options && $options != "services" ) { echo '<option value="'.$options.'">'.$options.'</option><option disabled>-----------</option>'; }
                   echo '<option value="slider">slider</option>';
                   echo '<option value="portfolio">portfolio</option>';
                   echo '<option value="services">services</option>';
                   echo '<option value="about">about</option>';
                   echo '<option value="contact">contact</option>';
                   echo '<option value="text1">text1</option>';
                   echo '<option value="text2">text2</option>';
                   echo '<option value="text3">text3</option>';
                   echo '<option value="text4">text4</option>';
                   echo '<option value="text5">text5</option>';
                   echo '<option value="nothing">nothing</option>';
                echo "</select>";
                echo '<a href="" class="question" id="section3-content-tooltip" title="';
                _e('Select the content for the 3rd section.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Section Four content
function section4_content_callback() {
      $options = get_option('section4_content');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Section 4 content','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<select name='section4_content'>";
                   if (!$options || $options == "about") { echo '<option value="about">about</option><option disabled>-----------</option>'; }
                   if ($options && $options != "about" ) { echo '<option value="'.$options.'">'.$options.'</option><option disabled>-----------</option>'; }
                   echo '<option value="slider">slider</option>';
                   echo '<option value="portfolio">portfolio</option>';
                   echo '<option value="services">services</option>';
                   echo '<option value="about">about</option>';
                   echo '<option value="contact">contact</option>';
                   echo '<option value="text1">text1</option>';
                   echo '<option value="text2">text2</option>';
                   echo '<option value="text3">text3</option>';
                   echo '<option value="text4">text4</option>';
                   echo '<option value="text5">text5</option>';
                   echo '<option value="nothing">nothing</option>';
                echo "</select>";
                echo '<a href="" class="question" id="section4-content-tooltip" title="';
                _e('Select the content for the fourth section.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Section Five content
function section5_content_callback() {
      $options = get_option('section5_content');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Section 5 content','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<select name='section5_content'>";
                   if (!$options || $options == "contact") { echo '<option value="contact">contact</option><option disabled>-----------</option>'; }
                   if ($options && $options != "contact" ) { echo '<option value="'.$options.'">'.$options.'</option><option disabled>-----------</option>'; }
                   echo '<option value="slider">slider</option>';
                   echo '<option value="portfolio">portfolio</option>';
                   echo '<option value="services">services</option>';
                   echo '<option value="about">about</option>';
                   echo '<option value="contact">contact</option>';
                   echo '<option value="text1">text1</option>';
                   echo '<option value="text2">text2</option>';
                   echo '<option value="text3">text3</option>';
                   echo '<option value="text4">text4</option>';
                   echo '<option value="text5">text5</option>';
                   echo '<option value="nothing">nothing</option>';
                echo "</select>";
                echo '<a href="" class="question" id="section5-content-tooltip" title="';
                _e('Select the content for the fifth section.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Section Six content
function section6_content_callback() {
      $options = get_option('section6_content');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Section 6 content','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<select name='section6_content'>";
                   if (!$options || $options == "nothing") { echo '<option value="nothing">nothing</option><option disabled>-----------</option>'; }
                   if ($options && $options != "nothing" ) { echo '<option value="'.$options.'">'.$options.'</option><option disabled>-----------</option>'; }
                   echo '<option value="slider">slider</option>';
                   echo '<option value="portfolio">portfolio</option>';
                   echo '<option value="services">services</option>';
                   echo '<option value="about">about</option>';
                   echo '<option value="contact">contact</option>';
                   echo '<option value="text1">text1</option>';
                   echo '<option value="text2">text2</option>';
                   echo '<option value="text3">text3</option>';
                   echo '<option value="text4">text4</option>';
                   echo '<option value="text5">text5</option>';
                   echo '<option value="nothing">nothing</option>';
                echo "</select>";
                echo '<a href="" class="question" id="section6-content-tooltip" title="';
                _e('Select the content for the sixth section.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Section Seven content
function section7_content_callback() {
      $options = get_option('section7_content');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Section 7 content','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<select name='section7_content'>";
                   if (!$options || $options == "nothing") { echo '<option value="nothing">nothing</option><option disabled>-----------</option>'; }
                   if ($options && $options != "nothing" ) { echo '<option value="'.$options.'">'.$options.'</option><option disabled>-----------</option>'; }
                   echo '<option value="slider">slider</option>';
                   echo '<option value="portfolio">portfolio</option>';
                   echo '<option value="services">services</option>';
                   echo '<option value="about">about</option>';
                   echo '<option value="contact">contact</option>';
                   echo '<option value="text1">text1</option>';
                   echo '<option value="text2">text2</option>';
                   echo '<option value="text3">text3</option>';
                   echo '<option value="text4">text4</option>';
                   echo '<option value="text5">text5</option>';
                   echo '<option value="nothing">nothing</option>';
                echo "</select>";
                echo '<a href="" class="question" id="section7-content-tooltip" title="';
                _e('Select the content for the seventh section.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Section Eight content
function section8_content_callback() {
      $options = get_option('section8_content');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Section 8 content','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<select name='section8_content'>";
                   if (!$options || $options == "nothing") { echo '<option value="nothing">nothing</option><option disabled>-----------</option>'; }
                   if ($options && $options != "nothing" ) { echo '<option value="'.$options.'">'.$options.'</option><option disabled>-----------</option>'; }
                   echo '<option value="slider">slider</option>';
                   echo '<option value="portfolio">portfolio</option>';
                   echo '<option value="services">services</option>';
                   echo '<option value="about">about</option>';
                   echo '<option value="contact">contact</option>';
                   echo '<option value="text1">text1</option>';
                   echo '<option value="text2">text2</option>';
                   echo '<option value="text3">text3</option>';
                   echo '<option value="text4">text4</option>';
                   echo '<option value="text5">text5</option>';
                   echo '<option value="nothing">nothing</option>';
                echo "</select>";
                echo '<a href="" class="question" id="section8-content-tooltip" title="';
                _e('Select the content for the eighth section.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Section Ninth content
function section9_content_callback() {
      $options = get_option('section9_content');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Section 9 content','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<select name='section9_content'>";
                   if (!$options || $options == "nothing") { echo '<option value="nothing" selected="selected">nothing</option><option disabled>-----------</option>'; }
                   if ($options && $options != "nothing" ) { echo '<option value="'.$options.'">'.$options.'</option><option disabled>-----------</option>'; }
                   echo '<option value="slider">slider</option>';
                   echo '<option value="portfolio">portfolio</option>';
                   echo '<option value="services">services</option>';
                   echo '<option value="about">about</option>';
                   echo '<option value="contact">contact</option>';
                   echo '<option value="text1">text1</option>';
                   echo '<option value="text2">text2</option>';
                   echo '<option value="text3">text3</option>';
                   echo '<option value="text4">text4</option>';
                   echo '<option value="text5">text5</option>';
                   echo '<option value="nothing">nothing</option>';
                echo "</select>";
                echo '<a href="" class="question" id="section9-content-tooltip" title="';
                _e('Select the content for the 9th section.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Section 10th content
function section10_content_callback() {
      $options = get_option('section10_content');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Section 10 content','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<select name='section10_content'>";
                   if (!$options || $options == "nothing") { echo '<option value="nothing" selected="selected">nothing</option><option disabled>-----------</option>'; }
                   if ($options && $options != "nothing" ) { echo '<option value="'.$options.'">'.$options.'</option><option disabled>-----------</option>'; }
                   echo '<option value="slider">slider</option>';
                   echo '<option value="portfolio">portfolio</option>';
                   echo '<option value="services">services</option>';
                   echo '<option value="about">about</option>';
                   echo '<option value="contact">contact</option>';
                   echo '<option value="text1">text1</option>';
                   echo '<option value="text2">text2</option>';
                   echo '<option value="text3">text3</option>';
                   echo '<option value="text4">text4</option>';
                   echo '<option value="text5">text5</option>';
                   echo '<option value="nothing">nothing</option>';
                echo "</select>";
                echo '<a href="" class="question" id="section10-content-tooltip" title="';
                _e('Select the content for the 10th section.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Portfolio title
function portfolio_title_callback() {
     $options = get_option('portfolio_title');
     if (!$options){
        echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Portfolio title','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' size='36' name='portfolio_title' size='60' value='";
                echo __('our work','me-3-9-3') ;
                echo "'/>";
                echo '<a href="" class="question" id="portfolio-title-tooltip" title="';
                _e('This is the title on the top of the portfolio section. For example: OUR WORK.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
     }
     if ($options){
        echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Portfolio title','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='portfolio_title' value='$options' size='60' />";
                echo '<a href="" class="question" id="portfolio-title-tooltip" title="';
                _e('This is the title on the top of the portfolio section. For example: OUR WORK.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
        echo '<div class="clear"></div>';
        echo '</div>';
     }

}

//Services title
function services_title_callback() {
     $options = get_option('services_title');
     if (!$options){
        echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Services title','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' size='36' name='services_title' size='60' value='";
                echo __('services','me-3-9-3') ;
                echo "'/>";
                echo '<a href="" class="question" id="services-title-tooltip" title="';
                _e('This is the title on the top of the services section. For example: OUR CAPABILITIES.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
     }
     if ($options){
        echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Services title','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='services_title' value='$options' size='60' />";
                echo '<a href="" class="question" id="services-title-tooltip" title="';
                _e('This is the title on the top of the services section. For example: OUR CAPABILITIES.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
        echo '<div class="clear"></div>';
        echo '</div>';
     }

}

//About title
function about_title_callback() {
     $options = get_option('about_title');
     if (!$options){
        echo '<div class="option">';
           echo '<div class="option-left">';
                _e('About title','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' size='36' name='about_title' size='60' value='";
                echo __('about','me-3-9-3') ;
                echo "'/>";
                echo '<a href="" class="question" id="about-title-tooltip" title="';
                _e('This is the title on the top of the about section. For example: ABOUT US.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
     }
     if ($options){
        echo '<div class="option">';
           echo '<div class="option-left">';
                _e('About title','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='about_title' value='$options' size='60' />";
                echo '<a href="" class="question" id="about-title-tooltip" title="';
                _e('This is the title on the top of the about section. For example: ABOUT US.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
        echo '<div class="clear"></div>';
        echo '</div>';
     }

}

//Contact title
function contact_title_callback() {
     $options = get_option('contact_title');
     if (!$options){
        echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Contact title','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' size='36' name='contact_title' size='60' value='";
                echo __('contact','me-3-9-3') ;
                echo "'/>";
                echo '<a href="" class="question" id="contact-title-tooltip" title="';
                _e('This is the title on the top of the contact section. For example: CONTACT US.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
     }
     if ($options){
        echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Contact title','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='contact_title' value='$options' size='60' />";
                echo '<a href="" class="question" id="contact-title-tooltip" title="';
                _e('This is the title on the top of the contact section. For example: CONTACT US.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
        echo '<div class="clear"></div>';
        echo '</div>';
     }

}

//Text1 title
function text1_title_callback() {
     $options = get_option('text1_title');
     if (!$options){
        echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Text section1 title','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' size='36' name='text1_title' size='60' value='";
                echo __('Text section 1','me-3-9-3') ;
                echo "'/>";
                echo '<a href="" class="question" id="text1-title-tooltip" title="';
                _e('This is the title on the top of the first optional text section. This section is inactive in default.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
     }
     if ($options){
        echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Text section 1 title','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='text1_title' value='$options' size='60' />";
                echo '<a href="" class="question" id="text1-title-tooltip" title="';
                _e('This is the title on the top of the first optional text section. This section is inactive in default.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
        echo '<div class="clear"></div>';
        echo '</div>';
     }

}

//Text 1 content
function text1_content_callback() {
      $options = get_option('text1_content');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Text section 1 content','me-3-9-3');
           echo '</div>';
           echo '<div class="clear"></div>';
           echo '<div class="option-editor">';
                $editor_settings =  array (
                    'textarea_rows' => 8,
                    'textarea_name' => 'text1_content',
                    'media_buttons' => true,
                    'teeny'         => false,
                    'tinymce'       => true,
                    // a very minimal setup
                   'quicktags'     => array ( 'buttons' => 'strong,em,link,fullscreen' )
                );
                wp_editor( $options, 'text1editor', $editor_settings );
                //echo "<textarea name='text1_content'>$options</textarea>";
                echo '<a href="" class="question" id="text1-content-tooltip" title="';
                _e('The content of the first additional text section. This section is inactive in default.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Text2 title
function text2_title_callback() {
     $options = get_option('text2_title');
     if (!$options){
        echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Text section 2 title','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' size='36' name='text2_title' size='60' value='";
                echo __('Text section 2','me-3-9-3') ;
                echo "'/>";
                echo '<a href="" class="question" id="text2-title-tooltip" title="';
                _e('This is the title on the top of the second optional text section. This section is inactive in default.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
     }
     if ($options){
        echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Text section 2 title','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='text2_title' value='$options' size='60' />";
                echo '<a href="" class="question" id="text2-title-tooltip" title="';
                _e('This is the title on the top of the second optional text section.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
        echo '<div class="clear"></div>';
        echo '</div>';
     }

}

//Text 2 content
function text2_content_callback() {
      $options = get_option('text2_content');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Text section 2 content','me-3-9-3');
           echo '</div>';
           echo '<div class="clear"></div>';
           echo '<div class="option-editor">';
                $editor_settings =  array (
                    'textarea_rows' => 8 ,
                    'textarea_name' => 'text2_content',
                    'media_buttons' => true,
                    'teeny'         => false,
                    'tinymce'       => true,
                    // a very minimal setup
                   'quicktags'     => array ( 'buttons' => 'strong,em,link,fullscreen' )
                );
                wp_editor( $options, 'text2editor', $editor_settings );
                //echo "<textarea name='text2_content'>$options</textarea>";
                echo '<a href="" class="question" id="text2-content-tooltip" title="';
                _e('The content of the second additional text section. This section is inactive in default.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Text3 title
function text3_title_callback() {
     $options = get_option('text3_title');
     if (!$options){
        echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Text section 3 title','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' size='36' name='text3_title' size='60' value='";
                echo __('Text section 3','me-3-9-3') ;
                echo "'/>";
                echo '<a href="" class="question" id="text3-title-tooltip" title="';
                _e('This is the title on the top of the third optional text section.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
     }
     if ($options){
        echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Text section 3 title','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='text3_title' value='$options' size='60' />";
                echo '<a href="" class="question" id="text3-title-tooltip" title="';
                _e('This is the title on the top of the third optional text section.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
        echo '<div class="clear"></div>';
        echo '</div>';
     }

}

//Text 3 content
function text3_content_callback() {
      $options = get_option('text3_content');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Text section 3 content','me-3-9-3');
           echo '</div>';
           echo '<div class="clear"></div>';
           echo '<div class="option-editor">';
                $editor_settings =  array (
                    'textarea_rows' => 8 ,
                    'textarea_name' => 'text3_content',
                    'media_buttons' => true,
                    'teeny'         => false,
                    'tinymce'       => true,
                    // a very minimal setup
                   'quicktags'     => array ( 'buttons' => 'strong,em,link,fullscreen' )
                );
                wp_editor( $options, 'text3editor', $editor_settings );
                //echo "<textarea name='text3_content'>$options</textarea>";
                echo '<a href="" class="question" id="text3-content-tooltip" title="';
                _e('The content of the third additional text section. This section is inactive in default.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Text 4 title
function text4_title_callback() {
     $options = get_option('text4_title');
     if (!$options){
        echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Text section 4 title','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' size='36' name='text4_title' size='60' value='";
                echo __('Text section 4','me-3-9-3') ;
                echo "'/>";
                echo '<a href="" class="question" id="text4-title-tooltip" title="';
                _e('The title of the 4th optional text section.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
     }
     if ($options){
        echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Text section 4 title','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='text4_title' value='$options' size='60' />";
                echo '<a href="" class="question" id="text4-title-tooltip" title="';
                _e('The title of the 4th optional text section.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
        echo '<div class="clear"></div>';
        echo '</div>';
     }

}

//Text 4 content
function text4_content_callback() {
      $options = get_option('text4_content');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Text section 4 content','me-3-9-3');
           echo '</div>';
           echo '<div class="clear"></div>';
           echo '<div class="option-editor">';
                $editor_settings =  array (
                    'textarea_rows' => 8 ,
                    'textarea_name' => 'text4_content',
                    'media_buttons' => true,
                    'teeny'         => false,
                    'tinymce'       => true,
                    // a very minimal setup
                   'quicktags'     => array ( 'buttons' => 'strong,em,link,fullscreen' )
                );
                wp_editor( $options, 'text4editor', $editor_settings );
                //echo "<textarea name='text4_content'>$options</textarea>";
                echo '<a href="" class="question" id="text4-content-tooltip" title="';
                _e('The content of the 4th additional text section. This section is inactive in default.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Text 5 title
function text5_title_callback() {
     $options = get_option('text5_title');
     if (!$options){
        echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Text section 5 title','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' size='36' name='text5_title' size='60' value='";
                echo __('Text section 5','me-3-9-3') ;
                echo "'/>";
                echo '<a href="" class="question" id="text5-title-tooltip" title="';
                _e('The title of the 5th optional text section.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
     }
     if ($options){
        echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Text section 5 title','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='text5_title' value='$options' size='60' />";
                echo '<a href="" class="question" id="text5-title-tooltip" title="';
                _e('The title of the 5th optional text section.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
        echo '<div class="clear"></div>';
        echo '</div>';
     }

}

//Text 5 content
function text5_content_callback() {
      $options = get_option('text5_content');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Text section 5 content','me-3-9-3');
           echo '</div>';
           echo '<div class="clear"></div>';
           echo '<div class="option-editor">';
                $editor_settings =  array (
                    'textarea_rows' => 8 ,
                    'textarea_name' => 'text5_content',
                    'media_buttons' => true,
                    'teeny'         => false,
                    'tinymce'       => true,
                    // a very minimal setup
                   'quicktags'     => array ( 'buttons' => 'strong,em,link,fullscreen' )
                );
                wp_editor( $options, 'text5editor', $editor_settings );
                //echo "<textarea name='text5_content'>$options</textarea>";
                echo '<a href="" class="question" id="text5-content-tooltip" title="';
                _e('The content of the 5th additional text section. This section is inactive in default.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//White space
function white_space_callback() {
      $options = get_option('white_space');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('White space','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<select name='white_space'>";
                if (!$options || $options == "600" ) { echo '<option value="600" selected="selected">600</option><option value="" disabled>---------</option>'; }
                if ($options) { echo '<option value="'.$options.'" selected="selected">'.$options.'</option><option value="" disabled>---------</option>'; }
                echo '
                <option value="50">50</option>
                <option value="100">100</option>
                <option value="150">150</option>
                <option value="200">200</option>
                <option value="250">250</option>
                <option value="300">300</option>
                <option value="350">350</option>
                <option value="400">400</option>
                <option value="450">450</option>
                <option value="500">500</option>
                <option value="550">550</option>
                <option value="600">600</option>
                <option value="650">650</option>
                <option value="700">700</option>
                <option value="750">750</option>
                ';
                echo "</select>";
                echo '<a href="" class="question" id="white-space-tooltip" title="';
                _e('You can set the white space between the sections. The defaul value is 600 in pixels.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Preloader
function preloader_callback() {
      $options = checked(1, get_option('preloader'), false);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Enable preloader','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo '<input type="checkbox" id="preloader" name="preloader" style="margin-left: 50px;" value="1" ' . $options . '/>';
                echo '<a href="" class="question" id="preloader-tooltip" title="';
                _e('Animated svg page prelader for media heavy websites.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

?>