<?php

get_header();
require_once(ME_MISC . '/multi_page_navigation.php'); 
?>

     </div>
     <!--* END HEADER *-->

     <!--* CONTENT *-->
     <div id="content">

     <?php 
     
     if ( !get_option('blog_layout') || get_option('blog_layout') == "blog_full" ) :
        require_once("archive_layout1.php");
     else :
        require_once("archive_layout2.php");
     endif;

get_footer(); ?>