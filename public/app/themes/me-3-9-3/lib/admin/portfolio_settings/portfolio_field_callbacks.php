<?php

//Thumbnail shape
function portfolio_thumbnail_shape_callback() {
     $options = get_option('portfolio_thumbnail_shape');
      echo '<div class="option">';
           echo '<div class="option-left">';
                esc_attr_e('Thumbnails shape','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo '<div class="layout-container">
                           <ul>
                               <li>
                                   <span class="circle"></span>';
                                   if ( $options == "circle" ) { echo '<input type="radio" name="portfolio_thumbnail_shape" value="circle" title="circle - 520x520" checked>'; }
                                   if ( $options != "circle" ) { echo '<input type="radio" name="portfolio_thumbnail_shape" value="circle" title="circle - 520x520">'; }

                               echo '
                               </li>
                               <li>
                                   <span class="cube"></span>';
                                   if ( $options == "cube" ) { echo '<input type="radio" name="portfolio_thumbnail_shape" value="cube" title="cube - 520x520" checked>'; }
                                   if ( $options != "cube" ) { echo '<input type="radio" name="portfolio_thumbnail_shape" value="cube" title="cube - 520x520">'; }
                               echo '
                               </li>
                               <li>
                                   <span class="landscape"></span>';
                                   if ( $options == "landscape" ) { echo '<input type="radio" name="portfolio_thumbnail_shape" value="landscape" title="landscape - 520x390" checked>'; }
                                   if ( $options != "landscape" ) { echo '<input type="radio" name="portfolio_thumbnail_shape" value="landscape" title="landscape - 520x390">'; }
                               echo '
                               </li>
                               <li>
                                   <span class="portrait"></span>';
                                   if ( $options == "portrait" ) { echo '<input type="radio" name="portfolio_thumbnail_shape" value="portrait" title="portrait - 520x690" checked>'; }
                                   if ( $options != "portrait" ) { echo '<input type="radio" name="portfolio_thumbnail_shape" value="portrait" title="portrait - 520x690">'; }
                               echo '
                               </li>
                               <li>
                                   <span class="oval"></span>';
                                   if ( $options == "oval" ) { echo '<input type="radio" name="portfolio_thumbnail_shape" value="oval" title="oval - 520x520" checked>'; }
                                   if ( $options != "oval" ) { echo '<input type="radio" name="portfolio_thumbnail_shape" value="oval" title="oval - 520x520">'; }
                               echo '
                               </li>
                           </ul>
                      </div>';
                echo '<a href="" class="question" id="portfolio-thumbnail-shape-tooltip" title="';
                esc_attr_e('Select a shape for the thumbnail images.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Portfolio more info tooltip
function portfolio_more_info_callback() {
     $options = get_option('portfolio_more_info');
      echo '<div class="option">';
           echo '<div class="option-left">';
                esc_attr_e('"I" button tooltip','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='portfolio_more_info' value='$options' size='60' />";
                echo '<a href="" class="question" id="portfolio-more-info-tooltip" title="';
                esc_attr_e('Tooltip text of the info button.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Portfolio link tooltip
function portfolio_link_callback() {
     $options = get_option('portfolio_link');
      echo '<div class="option">';
           echo '<div class="option-left">';
                esc_attr_e('Link button tooltip','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='portfolio_link' value='$options' size='60' />";
                echo '<a href="" class="question" id="portfolio-link-tooltip" title="';
                esc_attr_e('Tooltip text of the link button.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Lightbox tooltip
function portfolio_lightbox_callback() {
     $options = get_option('portfolio_lightbox');
      echo '<div class="option">';
           echo '<div class="option-left">';
                esc_attr_e('Lightbox button tooltip','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='portfolio_lightbox' value='$options' size='60' />";
                echo '<a href="" class="question" id="portfolio-lightbox-tooltip" title="';
                esc_attr_e('Tooltip text of the lightbox button.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//All projects string
function all_projects_callback() {
     $options = get_option('all_projects');
      echo '<div class="option">';
           echo '<div class="option-left">';
                esc_attr_e('All projects text','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input type='text' name='all_projects' value='$options' size='60' />";
                echo '<a href="" class="question" id="all-projects-tooltip" title="';
                esc_attr_e('You can modify the `All projcets` text in the filter.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Disable filter
function disable_filter_callback() {
      $options = checked(1, get_option('disable_filter'), false);
      echo '<div class="option">';
           echo '<div class="option-left">';
                esc_attr_e('Disable filter','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo '<input type="checkbox" id="disable_contact" name="disable_filter" style="margin-left: 50px;" value="1" ' . $options . '/>';
                echo '<a href="" class="question" id="disable-filter-tooltip" title="';
                esc_attr_e('You can switch off the filter by selecting this option.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Disable icon link
function disable_icon_link_callback() {
      $options = checked(1, get_option('disable_icon_link'), false);
      echo '<div class="option">';
           echo '<div class="option-left">';
                esc_attr_e('Disable icons','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo '<input type="checkbox" id="disable_contact" name="disable_icon_link" style="margin-left: 50px;" value="1" ' . $options . '/>';
                echo '<a href="" class="question" id="disable-icons-tooltip" title="';
                esc_attr_e('Delete the icons and make the entire overlay a clickable link.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Disable overlay
function disable_overlay_callback() {
      $options = checked(1, get_option('disable_overlay'), false);
      echo '<div class="option">';
           echo '<div class="option-left">';
                esc_attr_e('Disable overlay effect','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo '<input type="checkbox" id="disable_overlay" name="disable_overlay" style="margin-left: 50px;" value="1" ' . $options . '/>';
                echo '<a href="" class="question" id="disable-overlay-tooltip" title="';
                esc_attr_e('This option removes the black overlay from the circles.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Show category description
function show_description_callback() {
      $options = checked(1, get_option('show_description'), false);
      echo '<div class="option">';
           echo '<div class="option-left">';
                esc_attr_e('Show category description','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo '<input type="checkbox" id="show_description" name="show_description" style="margin-left: 50px;" value="1" ' . $options . '/>';
                echo '<a href="" class="question" id="show-description-tooltip" title="';
                esc_attr_e('Select this option if you want to show category descriptions under the filter links.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Auto grayscale
function auto_greyscale_callback() {
      $options = checked(1, get_option('auto_greyscale'), false);
      echo '<div class="option">';
           echo '<div class="option-left">';
                esc_attr_e('Auto greyscale','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo '<input type="checkbox" id="auto_greyscale" name="auto_greyscale" style="margin-left: 50px;" value="1" ' . $options . '/>';
                echo '<a href="" class="question" id="auto-greyscale-tooltip" title="';
                esc_attr_e('Make portfolio thumbnails black and white automatically.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Item Layout
function item_layout_callback() {
      $options = get_option('item_layout');
      echo '<div class="option">';
           echo '<div class="option-left">';
                esc_attr_e('How to show items?','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<select name='item_layout'>";
                if (!$options) {
                   echo '<option value="above">';esc_attr_e('Above the circles','me-3-9-3');echo '</option>';
                   echo '<option value="full">';esc_attr_e('Full Screen','me-3-9-3');echo '</option>';
                }
                if ($options && $options == "full") {
                   echo "<option value='$options'>";esc_attr_e('Full Screen','me-3-9-3');echo "</option>";
                   echo '<option value="above">';esc_attr_e('Above the circles','me-3-9-3');echo '</option>';
                }
                if ($options && $options == "above") {
                   echo "<option value='$options'>";esc_attr_e('Above the circles','me-3-9-3');echo "</option>";
                   echo '<option value="full">';esc_attr_e('Full Screen','me-3-9-3');echo '</option>';
                }
                echo "</select>";
                echo '<a href="" class="question" id="portfolio-display-tooltip" title="';
                _e('You can choose from two effects to show the ajax loaded portfolio items. One loads the item into a full screen overlay while the other shows the item inside the container element of the filter links.','me-3-9-3');
                echo '"></a>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

?>