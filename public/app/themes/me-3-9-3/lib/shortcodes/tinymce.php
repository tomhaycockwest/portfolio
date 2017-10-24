<?php
$wp_include = "../wp-load.php";
$i = 0;
while (!file_exists($wp_include) && $i++ < 10) {
  $wp_include = "../$wp_include";
}
require($wp_include);
?>
<!html>

<head>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/tiny_mce_popup.js"></script>
<script type="text/javascript">
<?php require_once('tinymce_lang.php'); ?>
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/shortcodes/tinymce_handler.js"></script>
<style type="text/css">
a.button{ display: inline-block; text-decoration: none; font-size: 13px; line-height: 26px; height: 28px; margin: 0; padding: 0 10px 1px; cursor: pointer; border-width: 1px; border-style: solid; -webkit-border-radius: 3px; -webkit-appearance: none; border-radius: 3px; white-space: nowrap; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; color: #555; border-color: #ccc; background: #f7f7f7; -webkit-box-shadow: inset 0 1px 0 #fff,0 1px 0 rgba(0,0,0,.08); box-shadow: inset 0 1px 0 #fff,0 1px 0 rgba(0,0,0,.08); vertical-align: top;  }
select#media_shortcodes { height: 28px; line-height: 170%; font-size: 14px; }
h3 { font-size: 16px; color: #333; }
</style>
</head>

<body>
      
      <h3 style="text-align: center; margin-bottom: 10px;"><?php _e('Shortcodes','me-3-9-3'); ?></h3>
      <table>
             <tbody>
                    <tr>
                        <td style="font-size: 12px;">
                        Please select:
                        </td>

                        <td>
                            <select name="media_shortcodes" id="media_shortcodes">
                                    <optgroup label="Images">
                                              <option value="image_frame1"><?php _e('Image frame','me-3-9-3'); ?></option>
                                              <option value="image_frame2"><?php _e('Image frame with title','me-3-9-3'); ?></option>
                                              <option value="image_frame3"><?php _e('Image frame witht title and description','me-3-9-3'); ?></option>
                                    </optgroup>
                                    <optgroup label="Youtube">
                                              <option value="youtube"><?php _e('Youtube video','me-3-9-3');  ?></option>
                                              <option value="youtube_frame1"><?php _e('Youtube video frame','me-3-9-3'); ?></option>
                                              <option value="youtube_frame2"><?php _e('Youtube video frame with title','me-3-9-3'); ?></option>
                                              <option value="youtube_frame3"><?php _e('Youtube video frame with title and description','me-3-9-3'); ?></option>
                                    </optgroup>
                                    <optgroup label="Vimeo">
                                              <option value="vimeo"><?php _e('Vimeo video','me-3-9-3'); ?></option>
                                              <option value="vimeo_frame1"><?php _e('Vimeo video frame','me-3-9-3'); ?></option>
                                              <option value="vimeo_frame2"><?php _e('Vimeo video frame with title','me-3-9-3'); ?></option>
                                              <option value="vimeo_frame3"><?php _e('Vimeo video frame with title and description','me-3-9-3'); ?></option>
                                    </optgroup>
                                    <optgroup label="List styles">
                                              <option value="check"><?php _e('Check','me-3-9-3'); ?></option>
                                              <option value="remove"><?php _e('Remove','me-3-9-3'); ?></option>
                                              <option value="settings"><?php _e('Settings','me-3-9-3'); ?></option>
                                              <option value="user"><?php _e('User','me-3-9-3'); ?></option>
                                              <option value="add"><?php _e('Add','me-3-9-3'); ?></option>
                                              <option value="undo"><?php _e('Undo','me-3-9-3'); ?></option>
                                              <option value="redo"><?php _e('Redo','me-3-9-3'); ?></option>
                                              <option value="speech"><?php _e('Speech bubble','me-3-9-3'); ?></option>
                                              <option value="attention"><?php _e('Attention','me-3-9-3'); ?></option>
                                              <option value="telephone"><?php _e('Telephone','me-3-9-3'); ?></option>
                                              <option value="locked"><?php _e('Lock','me-3-9-3'); ?></option>
                                              <option value="mail"><?php _e('Mail','me-3-9-3'); ?></option>
                                    </optgroup>
                                    <optgroup label="Headings">
                                              <option value="h1"><?php _e('h1','me-3-9-3'); ?></option>
                                              <option value="h2"><?php _e('h2','me-3-9-3'); ?></option>
                                              <option value="h3"><?php _e('h3','me-3-9-3'); ?></option>
                                              <option value="h4"><?php _e('h4','me-3-9-3'); ?></option>
                                              <option value="h5"><?php _e('h5','me-3-9-3'); ?></option>
                                              <option value="h6"><?php _e('h6','me-3-9-3'); ?></option>
                                    </optgroup>
                                    <optgroup label="Columns">
                                              <option value="full"><?php _e('1/1','me-3-9-3'); ?></option>
                                              <option value="one_half"><?php _e('1/2','me-3-9-3'); ?></option>
                                              <option value="one_half_last"><?php _e('1/2 last','me-3-9-3'); ?></option>
                                              <option value="one_third"><?php _e('1/3','me-3-9-3'); ?></option>
                                              <option value="one_third_last"><?php _e('1/3 last','me-3-9-3'); ?></option>
                                              <option value="two_third"><?php _e('2/3','me-3-9-3'); ?></option>
                                              <option value="two_third_last"><?php _e('2/3 last','me-3-9-3'); ?></option>
                                              <option value="one_fourth"><?php _e('1/4','me-3-9-3'); ?></option>
                                              <option value="one_fourth_last"><?php _e('1/4 last','me-3-9-3'); ?></option>
                                              <option value="two_fourth"><?php _e('2/4','me-3-9-3'); ?></option>
                                              <option value="two_fourth_last"><?php _e('2/4 last','me-3-9-3'); ?></option>
                                              <option value="three_fourth"><?php _e('3/4','me-3-9-3'); ?></option>
                                              <option value="three_fourth_last"><?php _e('3/4 last','me-3-9-3'); ?></option>
                                              <option value="one_fifth"><?php _e('1/5','me-3-9-3'); ?></option>
                                              <option value="one_fifth_last"><?php _e('1/5 last','me-3-9-3'); ?></option>
                                              <option value="two_fifth"><?php _e('2/5','me-3-9-3'); ?></option>
                                              <option value="two_fifth_last"><?php _e('2/5 last','me-3-9-3'); ?></option>
                                              <option value="three_fifth"><?php _e('3/5','me-3-9-3'); ?></option>
                                              <option value="three_fifth_last"><?php _e('3/5 last','me-3-9-3'); ?></option>
                                              <option value="four_fifth"><?php _e('4/5','me-3-9-3'); ?></option>
                                              <option value="four_fifth_last"><?php _e('4/5 last','me-3-9-3'); ?></option>
                                    </optgroup>
                            </select>
                        </td>

                        <td>
                            <a href="javascript:GalleryTiny.insert(GalleryTiny.e)" class="button"><?php _e('Insert','me-3-9-3'); ?></a>
                        </td>
                    </tr>
             </tbody>
      </table>

</body>

</html>