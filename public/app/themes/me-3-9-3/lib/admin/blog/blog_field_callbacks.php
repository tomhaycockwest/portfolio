<?php

//Blog layout
function blog_layout_callback() {
      $options = get_option('blog_layout');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Blog page layout','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<select name='blog_layout'>";
                if (!$options) {
                   echo '<option value="">';_e('Please select','me-3-9-3');echo '</option>';
                   echo '<option value="blog_sidebar">';_e('Show sidebar','me-3-9-3');echo '</option>';
                   echo '<option value="blog_full">';_e('Don`t show sidebar','me-3-9-3');echo '</option>';
                }
                if ($options  && $options == "blog_full") {
                   echo "<option value='$options'>";_e('Don`t show sidebar','me-3-9-3');echo "</option>";
                   echo '<option value="blog_sidebar">';_e('Show sidebar','me-3-9-3');echo '</option>';
                }
                if ($options  && $options == "blog_sidebar") {
                   echo "<option value='$options'>";_e('Show sidebar','me-3-9-3');echo "</option>";
                   echo '<option value="blog_full">';_e('Don`t show sidebar','me-3-9-3');echo '</option>';
                }
                echo "</select>";
                echo '<a href="" class="question" id="blog-layout-tooltip" title="';
                _e('Do you want to a show a sidebar on your blog page?','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Custom Read More
function read_more_callback() {
      $default_value = esc_attr__('Read more','me-3-9-3');
      $options = get_option('read_more', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Read more text','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='read_more' value='$options' size='60' />";
                echo '<a href="" class="question" id="read-more-tooltip" title="';
                _e('You can define a custom ``Read more`` text for your blog pages.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Disable Author
function disable_author_callback() {
     $options = checked(1, get_option('disable_author'), false);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Don`t show the author','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo '<input type="checkbox" id="disable_author" style="margin-left: 50px;" name="disable_author" value="1" ' . $options . '/>';
                echo '<a href="" class="question" id="disable-author-tooltip" title="';
                _e('This option hides the author`s name on the blog page.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Disable Comments
function disable_date_callback() {
     $options = checked(1, get_option('disable_date'), false);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Don`t show post dates','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo '<input type="checkbox" id="disable_date" style="margin-left: 50px;" name="disable_date" value="1" ' . $options . '/>';
                echo '<a href="" class="question" id="disable-date-tooltip" title="';
                _e('This option hides the post dates on the blog page.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Disable Categories
function disable_category_callback() {
     $options = checked(1, get_option('disable_category'), false);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Don`t show categories','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo '<input type="checkbox" id="disable_category" style="margin-left: 50px;" name="disable_category" value="1" ' . $options . '/>';
                echo '<a href="" class="question" id="disable-category-tooltip" title="';
                _e('This option hides the category names on the blog page.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Disable Comments
function disable_comments_callback() {
     $options = checked(1, get_option('disable_comments'), false);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Don`t show comments','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo '<input type="checkbox" id="disable_comments" style="margin-left: 50px;" name="disable_comments" value="1" ' . $options . '/>';
                echo '<a href="" class="question" id="disable-comments-tooltip" title="';
                _e('This option hides the number of comments, but you cannot disable the comments completely by checking this checkbox.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Older posts tooltip
function older_posts_callback() {
      $options = get_option('older_posts');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Older posts tooltip','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='older_posts' value='$options' size='60' />";
                echo '<a href="" class="question" id="older-posts-tooltip" title="';
                _e('You can edit the tool tip of the prev button on the blog page.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Newer posts tooltip
function newer_posts_callback() {
      $options = get_option('newer_posts');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Newer posts tooltip','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='newer_posts' value='$options' size='60' />";
                echo '<a href="" class="question" id="newer-posts-tooltip" title="';
                _e('You can edit the tool tip of the next button on the blog page.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Comment form name value
function commentform_name_callback() {
      $default_value = esc_attr__('Your Name','me-3-9-3');
      $options = get_option('commentform_name', $default_value);
      echo '<h2 style="float: none; margin-top: 50px; margin-bottom: 20px;">';
      _e('Comment form settings','me-3-9-3');
      echo '</h2>';
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Name label','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='commentform_name' value='$options' size='60' />";
                echo '<a href="" class="question" id="commentform-name-tooltip" title="';
                _e('The default value of the `Name` field in the comment form. REQUIRED.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Comment form name error
function commentform_name_error_callback() {
      $default_value = esc_attr__('What is your name?','me-3-9-3');
      $options = get_option('commentform_name_error', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Missing name warning','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='commentform_name_error' value='$options' size='60' />";
                echo '<a href="" class="question" id="commentform-name-error-tooltip" title="';
                _e('If the user doesn`t fill the `Name` field, this message will be shown in the mentioned field. REQUIRED.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Comment form email value
function commentform_email_callback() {
      $default_value = esc_attr__('Email Address','me-3-9-3');
      $options = get_option('commentform_email', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Email label','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='commentform_email' value='$options' size='60' />";
                echo '<a href="" class="question" id="commentform-email-tooltip" title="';
                _e('The default value of the `Email` field in the comment form. REQUIRED.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Comment form website value
function commentform_website_callback() {
      $default_value = esc_attr__('Your Website ( optional )','me-3-9-3');
      $options = get_option('commentform_website', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Website label','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='commentform_website' value='$options' size='60' />";
                echo '<a href="" class="question" id="commentform-website-tooltip" title="';
                _e('The default value of the `Website` field in the comment form. It isn`t required, but I recommend you to fill out.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Comment form email error
function commentform_email_error_callback() {
      $default_value = esc_attr__('What is your email address?','me-3-9-3');
      $options = get_option('commentform_email_error', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Missing email warning','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='commentform_email_error' value='$options' size='60' />";
                echo '<a href="" class="question" id="commentform-email-error-tooltip" title="';
                _e('If the user doesn`t fill the `Email` field, this message will be shown in the mentioned field. REQUIRED.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Comment form invalid email warning
function commentform_email_invalid_callback() {
      $default_value = esc_attr__('Oh No! Invalid email address!','me-3-9-3');
      $options = get_option('commentform_email_invalid', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Invalid email warning','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='commentform_email_invalid' value='$options' size='60' />";
                echo '<a href="" class="question" id="commentform-email-invalid-tooltip" title="';
                _e('If the user tries to sent the form with an invalid email address, this message will be shown in the email field. REQUIRED.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Comment form message value
function commentform_message_callback() {
      $default_value = esc_attr__('Your Thoughts','me-3-9-3');
      $options = get_option('commentform_message', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Message label','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='commentform_message' value='$options' size='60' />";
                echo '<a href="" class="question" id="commentform-message-tooltip" title="';
                _e('The default value of the `Message` textarea in the comment form. REQUIRED.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Comment form message error
function commentform_message_error_callback() {
      $default_value = esc_attr__('Do you want to say sumthin?','me-3-9-3');
      $options = get_option('commentform_message_error', $default_value);
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Missing message warning','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='commentform_message_error' value='$options' size='60' />";
                echo '<a href="" class="question" id="commentform-message-error-tooltip" title="';
                _e('If the user leave the the `Message` textarea empty, this message will be shown. REQUIRED.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

?>