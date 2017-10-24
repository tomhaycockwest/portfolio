<?php

$wp_include = "../wp-load.php";
$i = 0;
while (!file_exists($wp_include) && $i++ < 10) {
  $wp_include = "../$wp_include";
}
require($wp_include);

  if ( isset($_POST['name']) )     { $name = iconv("UTF-8", "ISO-8859-2", $_POST['name']); } else { die("Please don't try to hack this site!"); }
  if ( isset($_POST['email']) )    { $email = iconv("UTF-8", "ISO-8859-2", $_POST['email']); } else { die("Please don't try to hack this site!"); }
  if ( isset($_POST['comments']) ) { $comments = iconv("UTF-8", "ISO-8859-2", $_POST['comments']); } else { die("Please don't try to hack this site!"); }
  $thank_you = get_option('thank_you_text');

  if ( !checked(1, get_option('disable_phpmailer'), false) ) { require_once('mail1.php'); }
  if (  checked(1, get_option('disable_phpmailer'), false) ) { require_once('mail2.php'); }

?>