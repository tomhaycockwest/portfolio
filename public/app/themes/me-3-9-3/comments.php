<?php
function mytheme_comment($comment, $args, $depth){
$GLOBALS['comment'] = $comment;
?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

      <div id="comment-<?php comment_ID(); ?>">

      <div class="comment_author">
           
           <?php echo get_avatar( $comment->comment_author_email, $size = '70'); ?>

           <p><?php comment_author_link() ?></p>
      </div>
                            
      <div class="comment_content">
           
           <div class="comment_meta">
                <ul>
                <li><?php comment_date('M d, Y'); ?></li>
                <li class="reply_container">
                <div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div>
                </li>
                <li class="edit_container"><?php edit_comment_link(__('edit','me-3-9-3'),' ','') ?></li>
                </ul>
           <div class="clear"></div>
           </div>
           
           <div class="comment_text">
                <?php comment_text() ?>
           </div>

      </div>
      <div class="clear"></div>
      
      </div>


<?php
}//end mytheme_comment

if ( have_comments() && !post_password_required() ) : ?>

<div class="comments" id="comments">

     <div class="single_title">
          <h3>
              <span><?php _e('Comments','me-3-9-3') ?></span>
          </h3>
     </div>

     <ul class="commentlist">
	 <?php wp_list_comments('callback=mytheme_comment'); ?>
     </ul>

     <div id="comments_pagination">
          <?php paginate_comments_links(); ?>
     </div>
     <div class="clear"></div>

</div>
<?php endif; ?>


<?php if ( !have_comments() ) : ?>
<h4><?php _e('No comments','me-3-9-3'); ?></h4>
<?php endif; ?>

<?php if ( !comments_open() ) : ?>
    <h4><?php _e('Comments are closed.','me-3-9-3'); ?></h4>
<?php endif; ?>

<?php if ( comments_open() && !post_password_required() ) : ?>

               <!-- Comment form -->
               <div class="leave_reply">
               
                    <div class="single_title">
                         <h3>
                             <span><?php _e('Leave a reply','me-3-9-3') ?></span>
                         </h3>
                    </div>

                    <?php
                    $default_name_label = esc_attr__('Your Name','me-3-9-3');
                    $default_email_label = esc_attr__('Email Address','me-3-9-3');
                    $default_website_label = esc_attr__('Your Website ( optional )','me-3-9-3');
                    $default_message = esc_attr__('Your Thoughts','me-3-9-3');
                    $default_missing_name = esc_attr__('What is your name?','me-3-9-3');
                    $default_missing_mail = esc_attr__('What is your email address?','me-3-9-3');
                    $default_invalid_mail = esc_attr__('Oh No! Invalid email address!','me-3-9-3');
                    $default_missing_message = esc_attr__('Do you want to say sumthin?','me-3-9-3');
                    $args = array(
                    'id_form'           => 'commentform',
                    'id_submit'         => 'submit',
                    'title_reply'       => '',
                    'title_reply_to'    => __( 'Leave a Reply to %s','me-3-9-3'),
                    'cancel_reply_link' => __( 'Cancel Reply','me-3-9-3' ),
                    'label_submit'      => __( 'GO','me-3-9-3' ),
                    'comment_field' =>  '<textarea rows="7" cols="60" name="comment" id="comment_content" placeholder="' . esc_attr( get_option('commentform_message') ) .'" data-error="'. esc_attr( get_option('commentform_message_error', $default_missing_message) ) .'"></textarea>',
                    'must_log_in' => '<p class="must-log-in">' . sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.','me-3-9-3' ), wp_login_url( apply_filters( 'the_permalink', get_permalink() ) ) ) . '</p>',
                    'logged_in_as' => '<p id="logged_in">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>','me-3-9-3' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
                    'comment_notes_before' => '<p class="comment-notes">' . __( 'Your email address will not be published.','me-3-9-3' ) . '</p>',
                    'comment_notes_after' => '<p class="form-allowed-tags">' . sprintf( __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s','me-3-9-3' ), ' <code>' . allowed_tags() . '</code>' ) . '</p>',
                         'fields' => apply_filters( 'comment_form_default_fields', 
                                  array(
                                  'author' => '<input type="text" id="author_name" value="" placeholder="' . esc_attr( get_option('commentform_name') ) .'" name="author" data-error="'. esc_attr( get_option('commentform_name_error', $default_missing_name) ) .'" />',
                                  'email' => '<input type="text" id="author_email" value="" placeholder="' . esc_attr( get_option('commentform_email') ) .'" name="email" data-error="'. esc_attr( get_option('commentform_email_error', $default_missing_mail) ) .'" data-invalid="'. esc_attr( get_option('commentform_email_invalid', $default_invalid_mail) ) .'" />',
                                  'url' => '<input type="text" id="author_url" value="" placeholder="' . esc_attr( get_option('commentform_website') ) . '" name="url">'
                                  )
                         ),
                    );
                    comment_form($args);
                    ?>

               </div>
               <div class="clear"></div>
               <!-- End Comment form -->

<?php endif; ?>