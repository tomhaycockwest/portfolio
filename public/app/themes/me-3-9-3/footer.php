     <!-- SlideTo button-->
     <a href="#wrapper" class="scroll_top"></a>

     <?php 
     $default_text = esc_attr__('Magna Themes 2016 &copy; All Rights Reserved','me-3-9-3');
     $copyright_text = get_option('copyright_text', $default_text);
     if ( $copyright_text ) :
     ?>
     <p id="copyright_text">
        <?php
        $allowed_tags = array(
                              'a' => array(
                                     'href' => array(),
                                     'title' => array(),
                                     'target' => array()
                              ),
                              'img' => array(
                                                     'src' => array(),
                                                     'width' => array(),
                                                     'height' => array(),
                                                     'alt' => array()
                                              ),
                              'br' => array(),
                              'em' => array(),
                              'strong' => array(),
                              'i' => array(),
                              'cite' => array(),
                              'sub' => array(),
                              'sup' => array()
                        );
        echo wp_kses($copyright_text, $allowed_tags);
        ?>
     </p>
     <?php endif; ?>

     </div>
     <!--* END CONTENT *-->

</div>
<!--*** END WRAPPER ***-->

<?php wp_footer(); ?>
</body>

</html>