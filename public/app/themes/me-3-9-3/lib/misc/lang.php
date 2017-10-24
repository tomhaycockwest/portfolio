<?php
add_action('after_setup_theme', 'me_theme_setup');
function me_theme_setup() { load_theme_textdomain('me-3-9-3', get_template_directory() . '/lang'); }
?>