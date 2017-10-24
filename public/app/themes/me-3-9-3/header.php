<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<?php if ( !function_exists( '_wp_render_title_tag' ) ) : ?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php endif; ?>

<meta charset="<?php echo get_option('blog_charset'); ?>">

<?php if ( get_option('meta_keyword') ) : ?>
<meta name="keywords" content="<?php echo esc_attr( get_option('meta_keyword') ); ?>" />
<?php endif; ?>
<?php if ( get_option('meta_description') ) : ?>
<meta name="description" content="<?php echo esc_attr( get_option('meta_description') ); ?>" />
<?php endif; ?>

<!-- Mobile specific meta tag -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<!-- Favicon -->
<?php if ( get_option('shortcut_icon') ) : ?>
<link rel="shortcut icon" href="<?php echo esc_url( get_option('shortcut_icon') ); ?>">
<?php endif; ?>

<!-- Touch icon  -->
<?php if ( get_option('touch_icon1') ) : ?>
<link rel="apple-touch-icon" href="<?php echo esc_url( get_option('touch_icon1') ); ?>">
<?php endif; ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
$preloader = checked(1, get_option('preloader'), false);
if ($preloader) { echo '<div id="preloader"><div id="preloader_1"><span></span><span></span><span></span><span></span><span></span></div></div>'; }
?>

<!--*** WRAPPER ***-->
<div id="wrapper">

     <!--* HEADER *-->
     <div id="header">
          
          <!-- LOGO -->
          <?php 
          $default_url = get_template_directory_uri() . '/images/logo.png';
          $logo_url = get_option('logo_url', $default_url);
          $default_width = 86;
          $logo_width = get_option('logo_width', $default_width);
          $default_height = 86;
          $logo_height = get_option('logo_height', $default_height);
          $default_margin = 19;
          if ( $logo_url ) :
          ?>
          <div id="logo" style="margin-top: <?php echo get_option('logo_margin', $default_margin); ?>px;">
               <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <img src="<?php echo esc_url( $logo_url ); ?>" <?php if ( $logo_width ): ?>width="<?php echo esc_attr( $logo_height ); ?>"<?php endif; ?> <?php if ( $logo_height ): ?>height="<?php echo esc_attr( $logo_height ); ?>"<?php endif; ?> alt="<?php echo esc_attr( get_option('logo_alt') );?>"  />
               </a>
          </div>
          <?php endif; ?>