<?php

// Add the Meta Box
function add_service_meta_box() {
    add_meta_box(
		'service_meta_box', // $id
		__('Add an icon to this service','me-3-9-3'), // $title
		'show_service_meta_box', // $callback
		'service', // $page
		'normal', // $context
		'high'); // $priority
}
add_action('add_meta_boxes', 'add_service_meta_box');

// Field Array
$prefix = 'service_';
$service_meta_fields = array(

	array(
		'label'	=> __('Select a predesigned, high resolution icon.','me-3-9-3'),
		'desc'	=> __('Predesigned, high resolution icons.','me-3-9-3'),
		'id'	=> $prefix.'icon',
		'type'	=> 'icon'
	),
	array(
		'label'	=> __('Custom icon.','me-3-9-3'),
		'desc'	=> __('Custom icon','me-3-9-3'),
		'id'	=> $prefix.'custom_icon',
		'type'	=> 'custom_icon'
	),
	array(
		'label'	=> __('Custom icon dimensions ( optional )','me-3-9-3'),
		'desc'	=> __('Retina and HD screens have four times more pixels than standard screens. If you want to show a 48 x 40 icon, you need to use an 96 x 80 alternative to render it well on a high-density display, but you need to define the width and height of your icon in the fields above, otherwise the browser will render the icon in the bigger size automatically ( In this example you have to type 48 into the width and 40 into the height field ). Please use NUMBERS ONLY! If you do not care about retina screens, just upload your icon and leave the width and height fields empty.','me-3-9-3'),
		'id'	=> $prefix.'icon_width',
		'type'	=> 'icon_width'
	),
	array(
		'label'	=> __('Height','me-3-9-3'),
		'desc'	=> __('Dimensions','me-3-9-3'),
		'id'	=> $prefix.'icon_height',
		'type'	=> 'icon_height'
	),
	array(
		'label'	=> __('Slides','me-3-9-3'),
		'desc'	=> __('Add a slideshow gallery to the service item','me-3-9-3'),
		'id'	=> $prefix.'slides',
		'type'	=> 'slides'
	),
	array(
		'label'	=> __('External Url','me-3-9-3'),
		'desc'	=> __('Must be a full valid url with <strong>http://</strong> ! You can use this option in case the <br /> contents of the service item is stored on a page or hosted by a third party site.','me-3-9-3'),
		'id'	=> $prefix.'custom_link',
		'type'	=> 'custom_link'
	)
);


// The Callback
function show_service_meta_box() {
	global $service_meta_fields, $post;
	// Use nonce for verification
	echo '<input type="hidden" name="service_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

	// Begin the field table and loop
	echo '<table class="form-table">';
	foreach ($service_meta_fields as $field) {

		$meta = get_post_meta($post->ID, $field['id'], true);
                $images_directory = get_template_directory_uri();

                switch($field['type']) {

                         //Icon
                         case 'icon':
                              echo '<tr><td>';
                              echo '<p><h4 class="custom_metabox_title">'.$field['label'].'</h4></p>';
                              echo '
                                   <div id="predesigned_icons">
                                   <ul>';

                                   //Android icon
                                   if ($meta == "android") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/android.png" width="46" height="54" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="android" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "android") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/android.png" width="46" height="54" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="android">
                                       </li>';

                                   }
                                   
                                   //Android icon in white
                                   if ($meta == "android_white") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/android_white.png" width="46" height="54" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="android_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "android_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/android_white.png" width="46" height="54" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="android_white">
                                       </li>';

                                   }
                                   
                                   //Repair icon
                                   if ($meta == "repair") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/repair.png" width="66" height="63" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="repair" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "repair") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/repair.png" width="66" height="63" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="repair">
                                       </li>';

                                   }
                                   
                                   //Repair icon in white
                                   if ($meta == "repair_white") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/repair_white.png" width="66" height="63" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="repair_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "repair_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/repair_white.png" width="66" height="63" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="repair_white">
                                       </li>';

                                   }
                                   
                                   //Revision
                                   if ($meta == "revision") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/revision.png" width="45" height="62" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="revision" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "revision") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/revision.png" width="45" height="62" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="revision">
                                       </li>';

                                   }
                                   
                                   //Revision in white
                                   if ($meta == "revision_white") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/revision_white.png" width="45" height="62" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="revision_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "revision_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/revision_white.png" width="45" height="62" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="revision_white">
                                       </li>';

                                   }
                                   
                                   //SEO icon
                                   if ($meta == "seo") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/seo.png" width="51" height="53" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="seo" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "seo") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/seo.png" width="51" height="53" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="seo">
                                       </li>';

                                   }
                                   
                                   //SEO icon in white
                                   if ($meta == "seo_white") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/seo_white.png" width="51" height="53" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="seo_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "seo_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/seo_white.png" width="51" height="53" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="seo_white">
                                       </li>';

                                   }
                                   
                                   
                                   //Settings icon
                                   if ($meta == "settings") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/settings.png" width="60" height="50" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="settings" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "settings") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/settings.png" width="60" height="50" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="settings">
                                       </li>';

                                   }
                                   
                                   //Settings icon in white
                                   if ($meta == "settings_white") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/settings_white.png" width="60" height="50" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="settings_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "settings_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/settings_white.png" width="60" height="50" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="settings_white">
                                       </li>';

                                   }
                                   
                                   //Line chart
                                   if ($meta == "statistics") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/statistics.png" width="59" height="51" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="statistics" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "statistics") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/statistics.png" width="59" height="51" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="statistics">
                                       </li>';

                                   }
                                   
                                   //Line chart in white
                                   if ($meta == "statistics_white") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/statistics_white.png" width="59" height="51" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="statistics_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "statistics_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/statistics_white.png" width="59" height="51" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="statistics_white">
                                       </li>';

                                   }
                                   
                                   //Pie chart
                                   if ($meta == "statistics2") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/statistics2.png" width="58" height="58" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="statistics2" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "statistics2") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/statistics2.png" width="58" height="58" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="statistics2">
                                       </li>';

                                   }
                                   
                                   //Pie chart in white
                                   if ($meta == "statistics2_white") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/statistics2_white.png" width="58" height="58" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="statistics2_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "statistics2_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/statistics2_white.png" width="58" height="58" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="statistics2_white">
                                       </li>';

                                   }
                                   
                                   //Telephone icon
                                   if ($meta == "telemarketing") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/telemarketing.png" width="62" height="42" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="telemarketing" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "telemarketing") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/telemarketing.png" width="62" height="42" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="telemarketing">
                                       </li>';

                                   }
                                   
                                   //Telephone icon in white
                                   if ($meta == "telemarketing_white") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/telemarketing_white.png" width="62" height="42" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="telemarketing_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "telemarketing_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/telemarketing_white.png" width="62" height="42" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="telemarketing_white">
                                       </li>';

                                   }
                                   
                                   //Timer icon
                                   if ($meta == "time") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/time.png" width="55" height="64" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="time" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "time") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/time.png" width="55" height="64" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="time">
                                       </li>';

                                   }
                                   
                                   //Timer icon in white
                                   if ($meta == "time_white") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/time_white.png" width="55" height="64" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="time_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "time_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/time_white.png" width="55" height="64" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="time_white">
                                       </li>';

                                   }
                                   
                                   //Clock icon
                                   if ($meta == "time2") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/time2.png" width="53" height="56" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="time2" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "time2") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/time2.png" width="53" height="56" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="time2">
                                       </li>';

                                   }
                                   
                                   //Clock icon in white
                                   if ($meta == "time2_white") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/time2_white.png" width="53" height="56" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="time2_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "time2_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/time2_white.png" width="53" height="56" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="time2_white">
                                       </li>';

                                   }
                                   
                                   //Monitor icon
                                   if ($meta == "webdesign") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/webdesign.png" width="62" height="60" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="webdesign" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "webdesign") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/webdesign.png" width="62" height="60" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="webdesign">
                                       </li>';

                                   }
                                   
                                   //Monitor icon in white
                                   if ($meta == "webdesign_white") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/webdesign_white.png" width="62" height="60" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="webdesign_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "webdesign_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/webdesign_white.png" width="62" height="60" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="webdesign_white">
                                       </li>';

                                   }
                                   
                                   //Wordpress icon
                                   if ($meta == "wp") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/wp.png" width="58" height="56" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="wp" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "wp") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/wp.png" width="58" height="56" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="wp">
                                       </li>';

                                   }
                                   
                                   //Wordpress icon in white
                                   if ($meta == "wp_white") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/wp_white.png" width="58" height="56" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="wp_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "wp_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/wp_white.png" width="58" height="56" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="wp_white">
                                       </li>';

                                   }
                                   
                                   //Pen icon
                                   if ($meta == "writing") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/writing.png" width="60" height="57" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="writing" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "writing") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/writing.png" width="60" height="57" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="writing">
                                       </li>';

                                   }
                                   
                                   //Pen icon in white
                                   if ($meta == "writing_white") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/writing_white.png" width="60" height="57" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="writing_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "writing_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/writing_white.png" width="60" height="57" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="writing_white">
                                       </li>';

                                   }
                                   
                                   //Brush icon
                                   if ($meta == "design") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/design.png" width="61" height="54" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="design" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "design") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/design.png" width="61" height="54" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="design">
                                       </li>';

                                   }

                                   //Brush icon in white
                                   if ($meta == "design_white") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/design_white.png" width="61" height="54" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="design_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "design_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/design_white.png" width="61" height="54" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="design_white">
                                       </li>';

                                   }
                                   
                                   //Drupal icon
                                   if ($meta == "drupal") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/drupal.png" width="57" height="63" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="drupal" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "drupal") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/drupal.png" width="57" height="63" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="drupal">
                                       </li>';

                                   }
                                   
                                   //Drupal icon in white
                                   if ($meta == "drupal_white") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/drupal_white.png" width="57" height="63" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="drupal_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "drupal_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/drupal_white.png" width="57" height="63" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="drupal_white">
                                       </li>';

                                   }
                                   
                                   //Cart icon
                                   if ($meta == "ecommerce") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/ecommerce.png" width="60" height="46" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="ecommerce" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "ecommerce") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/ecommerce.png" width="60" height="46" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="ecommerce">
                                       </li>';

                                   }
                                   
                                   //Cart icon in white
                                   if ($meta == "ecommerce_white") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/ecommerce_white.png" width="60" height="46" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="ecommerce_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "ecommerce_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/ecommerce_white.png" width="60" height="46" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="ecommerce_white">
                                       </li>';

                                   }
                                   
                                   //Mail icon
                                   if ($meta == "email") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/email.png" width="56" height="36" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="email" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "email") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/email.png" width="56" height="36" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="email">
                                       </li>';

                                   }
                                   
                                   //Mail icon in white
                                   if ($meta == "email_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/email_white.png" width="56" height="36" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="email_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "email_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/email_white.png" width="56" height="36" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="email_white">
                                       </li>';

                                   }
                                   
                                   //Calendar icon
                                   if ($meta == "event") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/event.png" width="56" height="56" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="event" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "event") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/event.png" width="56" height="56" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="event">
                                       </li>';

                                   }
                                   
                                   //Calendar icon in white
                                   if ($meta == "event_white") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/event_white.png" width="56" height="56" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="event_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "event_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/event_white.png" width="56" height="56" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="event_white">
                                       </li>';

                                   }
                                   
                                   //Camera icon
                                   if ($meta == "film") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/film.png" width="64" height="46" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="film" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "film") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/film.png" width="64" height="46" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="film">
                                       </li>';

                                   }
                                   
                                   //Camera icon in white
                                   if ($meta == "film_white") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/film_white.png" width="64" height="46" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="film_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "film_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/film_white.png" width="64" height="46" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="film_white">
                                       </li>';

                                   }
                                   
                                   //iPad icon
                                   if ($meta == "ipad") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/ipad.png" width="52" height="58" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="ipad" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "ipad") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/ipad.png" width="52" height="58" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="ipad">
                                       </li>';

                                   }
                                   
                                   //iPad icon in white
                                   if ($meta == "ipad_white") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/ipad_white.png" width="52" height="58" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="ipad_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "ipad_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/ipad_white.png" width="52" height="58" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="ipad_white">
                                       </li>';

                                   }
                                   
                                   //Parts icon
                                   if ($meta == "parts") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/parts.png" width="44" height="52" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="parts" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "parts") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/parts.png" width="44" height="52" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="parts">
                                       </li>';

                                   }


                                   //Parts icon in white
                                   if ($meta == "parts_white") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/parts_white.png" width="44" height="52" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="parts_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "parts_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/parts_white.png" width="44" height="52" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="parts_white">
                                       </li>';

                                   }
                                   
                                   //Photo icon
                                   if ($meta == "photography") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/photography.png" width="60" height="52" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="photography" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "photography") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/photography.png" width="60" height="52" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="photography">
                                       </li>';

                                   }
                                   
                                   //Photo icon in white
                                   if ($meta == "photography_white") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/photography_white.png" width="60" height="52" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="photography_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "photography_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/photography_white.png" width="60" height="52" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="photography_white">
                                       </li>';

                                   }
                                   
                                   //Printer icon
                                   if ($meta == "print") {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/print.png" width="54" height="52" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="print" checked="checked">
                                       </li>';

                                   }
                                   if ($meta != "print") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/print.png" width="54" height="52" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="print">
                                       </li>';

                                   }
                                   
                                   //Printer icon in white
                                   if ($meta == "print_white" || !$meta) {
                                   
                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/print_white.png" width="54" height="52" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="print_white" checked="checked">
                                       </li>';

                                   }
                                   if ($meta && $meta != "print_white") {

                                       echo'
                                       <li>
                                       <img src="'.$images_directory.'/images/service_icons/print_white.png" width="54" height="52" />
                                       <input type="radio" name="'.$field['id'].'" id="'.$field['id'].'" value="print_white">
                                       </li>';

                                   }

                                   echo'
                                   </ul>
                                   <div class="clear"></div>
                                   </div>';

                                   //<br /><span class="description">'.$field['desc'].'</span>';
                              echo '</td></tr>';
                         break;
                         
                         //Custom Icon
                         case 'custom_icon':
                              echo '<tr><td>';
                              echo '<p><h4 class="custom_metabox_title">'.$field['label'].'</h4></p>';

                                   if($meta){
                                     
                                           echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" class="custom_icon_field image_select_field" value="'.$meta.'" size="42" style="margin-right: 10px;" />';
        
                                           echo '<a class="button image_select" href="#" style="margin-right: 10px;">';
                                           echo __('Select image','me-3-9-3');
                                           echo '</a>';
                                           
                                           echo '<a class="button image_remove" href="#" id="remove_service_icon" style="margin-right: 10px;">';
                                           echo __('Remove image','me-3-9-3');
                                           echo '</a>';
                                           
                                           echo '<div class="admin_image_container logo-container"><img src="'.$meta.'" alt="" /></div>';

                                     }else{
                                     
                                           echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" class="custom_icon_field image_select_field" value="" size="42" style="margin-right: 10px;" />';
        
                                           echo '<a class="button image_select" href="#" style="margin-right: 10px;">';
                                           echo __('Select image','me-3-9-3');
                                           echo '</a>';
                                           
                                           echo '<a class="button image_remove" href="#" id="remove_service_icon" style="margin-right: 10px;">';
                                           echo __('Remove image','me-3-9-3');
                                           echo '</a>';
                                           
                                           echo '<div class="admin_image_container logo-container"></div>';

                                     }


                              echo '</td></tr>';
                         break;

                         //Icon width
                         case 'icon_width':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';

                              $width = get_post_meta($post->ID, 'service_icon_width', true);
                              $height = get_post_meta($post->ID, 'service_icon_height', true);

                              //Width
                              if ($width){ echo __('Width:','me-3-9-3');echo '<input type="text" name="service_icon_width" value="'.$width.'" size="20" />'; }
                              if (!$width){ echo __('Width:','me-3-9-3');echo '<input type="text" name="service_icon_width" value="" size="20" />'; }

                              //Height
                              if ($height) { echo __('Height:','me-3-9-3');echo '<input type="text" name="service_icon_height" value="'.$height.'" size="20" />'; }
                              if (!$height) { echo __('Height:','me-3-9-3');echo '<input type="text" name="service_icon_height" value="" size="20" />'; }

                              
                              echo '<br /><span class="description">'.$field['desc'].'</span>';
                              echo '</td></tr>';

                         break;
                         
                         //Slides
                         case 'slides':
  			  echo	'<tr><td>';
				echo '<h4 class="custom_metabox_title">'.$field['label'].'</h4>';
                                echo '<a class="slides-add button" href="#">';
				echo __('Add new image','me-3-9-3');
                                echo '</a>';
                                echo '<ul id="'.$field['id'].'" class="custom_slides" style="margin-top: 15px;">';
						$i = 100;
						if ($meta) {
							foreach($meta as $row) {
								echo '<li>
                                                                          <input type="text" name="'.$field['id'].'['.$i.']" id="'.$field['id'].'" class="image_select_field" value="'.$row.'" size="30" style="margin-right: 10px;" />';

                                                                          echo '<a class="button image_select" href="#" style="margin-right: 10px;">';
                                                                          echo __('Select image','me-3-9-3');
                                                                          echo '</a>';

                                                                          echo '<a class="slides-remove button" href="#">';
                                                                          echo __('Remove image','me-3-9-3');
                                                                          echo '</a><div class="admin_image_container" style="display: block;"><img src="'.$row.'" alt="" /></div></li>';

								$i--;
							}
						} else {
							echo '<li>
                                                                  <input type="text" name="'.$field['id'].'['.$i.']" id="'.$field['id'].'" class="image_select_field" value="" size="30" style="margin-right: 10px;" />';

                                                                  echo '<a class="button image_select" href="#" style="margin-right: 10px;">';
                                                                  echo __('Select image','me-3-9-3');
                                                                  echo '</a>';

                                                                  echo '<a class="slides-remove button" href="#">';
                                                                  echo __('Remove image','me-3-9-3');
                                                                  echo '</a><div class="admin_image_container"></div></li>';
						}
						echo '</ul>';
                         echo '</td></tr>';
                         break;

                         //Link
                         case 'custom_link':
                              echo '<tr><td>';
                              echo '<h4 class="custom_metabox_title">'.$field['label'].'</h4>';

                              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="60" style="margin-right: 10px;" />';
                              echo '<br /><span class="description">'.$field['desc'].'</span>';

                              echo '</td></tr>';
                         break;

                }//end switch
                echo '</tr>';
	} // end foreach
	echo '</table>'; // end table
}

// Save the Data
function save_service_meta($post_id) {
    global $service_meta_fields;
	
	// verify nonce
	if (!isset( $_POST['service_meta_box_nonce'] ) || !wp_verify_nonce($_POST['service_meta_box_nonce'], basename(__FILE__))) 
		return $post_id;
	// check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return $post_id;
	// check permissions
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id))
			return $post_id;
		} elseif (!current_user_can('edit_post', $post_id)) {
			return $post_id;
	}
	
	// loop through fields and save the data
	foreach ($service_meta_fields as $field) {
		if($field['type'] == 'tax_select') continue;
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	} // enf foreach

}
add_action('save_post', 'save_service_meta');

?>