<?php

//Body font
function body_font_callback() {
      $options = get_option('body_font');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Body font','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                      echo "<select name='body_font'>";
                           if (!$options) {
                              echo '<option value="Open Sans">Open Sans</option>';
                           }
                           if ($options) {
                              echo "<option value='$options'>$options</option>";
                           }
                              echo '
                              <optgroup label="Sans Serif style">
                                        <option value="Abel">Abel</option>
                                        <option value="Andika">Andika</option>
                                        <option value="Antic">Antic</option>
                                        <option value="arial">Arial</option>
                                        <option value="Arimo">Arimo</option>
                                        <option value="Asap">Asap</option>
                                        <option value="Gudea">Gudea</option>
                                        <option value="Cabin">Cabin</option>
                                        <option value="Cantarell">Cantarell</option>
                                        <option value="Denk One">Denk One</option>
                                        <option value="Didact Gothic">Didact gothic</option>
                                        <option value="Droid Sans">Droid Sans</option>
                                        <option value="Electrolize">Electrolize</option>
                                        <option value="Josefin Sans">Josefin Sans</option>
                                        <option value="Julius Sans One">Julius Sans One</option>
                                        <option value="Lato">Lato</option>
                                        <option value="Lekton">Lekton</option>
                                        <option value="Maven Pro">Maven Pro</option>
                                        <option value="Michroma">Michroma</option>
                                        <option value="Muli">Muli</option>
                                        <option value="Nobile">Nobile</option>
                                        <option value="Numans">Numans</option>
                                        <option value="Nunito">Nunito</option>
                                        <option value="Open Sans">Open Sans</option>
                                        <option value="Pathway Gothic One">Pathway Gothic One</option>
                                        <option value="PT Sans">PT Sans</option>
                                        <option value="Quattrocento Sans">Quattrocento Sans</option>
                                        <option value="Quicksand">Quicksand</option>
                                        <option value="Questrial">Questrial</option>
                                        <option value="Raleway">Raleway</option>
                                        <option value="Rationale">Rationale</option>
                                        <option value="Six Caps">Six Caps</option>
                                        <option value="Terminal Dosis">Terminal Dosis</option>
                              </optgroup>
                              <optgroup label="Serif style">
                                        <option value="Alice">Alice</option>
                                        <option value="Alike Angular">Alike</option>
                                        <option value="Andada">Andada</option>
                                        <option value="Arapey">Arapey</option>
                                        <option value="Arvo">Arvo</option>
                                        <option value="Alegreya SC">Alegreya</option>
                                        <option value="Bitter">Bitter</option>
                                        <option value="Brawler">Brawler</option>
                                        <option value="Cardo">Cardo</option>
                                        <option value="Copse">Copse</option>
                                        <option value="Crimson Text">Crimson text</option>
                                        <option value="Domine">Domine</option>
                                        <option value="Droid Serif">Droid Serif</option>
                                        <option value="Fanwood Text">Fanwood text</option>
                                        <option value="Fjord One">Fjord one</option>
                                        <option value="Gentium Basic">Gentium basic</option>
                                        <option value="EB Garamond">EB Garamond</option>
                                        <option value="Goudy Bookletter 1911">Goudy Bookletter 1911</option>
                                        <option value="Junge">Junge</option>
                                        <option value="Linden Hill">Linden Hill</option>
                                        <option value="Lusitana">Lusitana</option>
                                        <option value="Lustria">Lustria</option>
                                        <option value="Mate">Mate</option>
                                        <option value="Merriweather">Merriweather</option>
                                        <option value="Noto Serif">Noto Serif</option>
                                        <option value="Oranienbaum">Oranienbaum</option>
                                        <option value="Petrona">Petrona</option>
                                        <option value="Podkova">Podkova</option>
                                        <option value="Poly">Poly</option>
                                        <option value="Prata">Prata</option>
                                        <option value="PT Serif Caption">PT Serif Caption</option>
                                        <option value="Quattrocento">Quattrocento</option>
                                        <option value="Rokkitt">Rokkitt</option>
                                        <option value="Vollkorn">Vollkorn</option>
                              </optgroup>
                              <optgroup label="System fonts">
                                        <option value="Arial">Arial</option>
                                        <option value="Courier New">Courier New</option>
                                        <option value="Comic Sans MS">Comic Sans MS</option>
                                        <option value="Helvetica">Helvetica</option>
                                        <option value="Tahoma">Tahoma</option>
                                        <option value="Verdana">Verdana</option>
                                        <option value="Book Antiqua">Book Antiqua</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Times New Roman">Times New Roman</option>
                              </optgroup>
                              <optgroup label="Cyrllic Extended">
                                         <option value="Comfortaa">Comfortaa</option>
                                         <option value="Didact Gothic">Didact gothic</option>
                                         <option value="Jura">Jura</option>
                                         <option value="Open Sans">OpenSans-cyrillic</option>
                                         <option value="Tenor Sans">Tenor Sans</option>
                              </optgroup>
                              ';
                      echo '</select>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Body font size
function body_font_size_callback() {
         $options = get_option('body_font_size');
         echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Body font size','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<select name='body_font_size'>";
                     if ( !get_option('body_font_size') ){
                        echo "<option value='15px' selected='selected'>15px</option><option disabled>--</option>";
                     }
                     if ( get_option('body_font_size') ){
                        echo "<option value='$options'>$options</option><option disabled>--</option>";
                     }
                     echo '
                          <option value="12px">8px</option>
                          <option value="12px">9px</option>
                          <option value="12px">10px</option>
                          <option value="12px">11px</option>
                          <option value="12px">12px</option>
                          <option value="13px">13px</option>
                          <option value="14px">14px</option>
                          <option value="15px">15px</option>
                          <option value="16px">16px</option>
                          <option value="17px">17px</option>
                          <option value="18px">18px</option>
                          <option value="19px">19px</option>
                          <option value="20px">20px</option>
                          <option value="21px">21px</option>
                          <option value="22px">22px</option>
                     ';
                echo "</select>";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Body font color
function body_color_callback() {
      $options = get_option('body_font_color');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Body font color','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                      if (!$options){
                         echo "<input id='body_font_color' type='text' size='30' name='body_font_color' value='#666666' class='color-input' />";
                         echo '<span class="color_preview" id="color1" style="background: #666666;"></span>';
                      }
                      if ($options){
                         echo "<input id='body_font_color' type='text' size='30' name='body_font_color' value='$options' class='color-input' />";
                         echo "<span class='color_preview' id='color1' style='background: $options'></span>";
                      }
                      echo "<a id='body_font_color_button' class='button'>";
                           _e('Choose color','me-3-9-3');
                      echo "</a>";
           echo '</div>';
           echo "
           <script type='text/javascript'>
           jQuery('#body_font_color_button').ColorPicker({
               color: '$options',
               onShow: function (colpkr) {
                       jQuery(colpkr).fadeIn(500);
                       return false;
               },
               onHide: function (colpkr) {
                       jQuery(colpkr).fadeOut(500);
                       return false;
               },
               onChange: function (hsb, hex, rgb) {
                         jQuery('input#body_font_color').val('#' + hex);
                         jQuery('span#color1').css('background-color', '#' + hex);
	      }
           });
           </script>";
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Letter spacing
function letter_spacing_callback() {
         $options = get_option('letter_spacing');
         echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Letter spacing','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<select name='letter_spacing'>";
                     if ( !get_option('letter_spacing') ){
                        echo "<option value='0px' selected='selected'>0px</option><option disabled>--</option>";
                     }
                     if ( get_option('letter_spacing') ){
                        echo "<option value='$options'>$options</option><option disabled>--</option>";
                     }
                     echo '
                          <option value="0px">0px</option>
                          <option value="1px">1px</option>
                          <option value="2px">2px</option>
                          <option value="3px">3px</option>
                          <option value="4px">4px</option>
                          <option value="5px">5px</option>
                          <option value="6px">6px</option>
                     ';
                echo "</select>";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Link color
function link_color_callback() {
         $options = get_option('link_color');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Link color','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                      if (!$options){
                         echo "<input id='link_color' type='text' size='30' name='link_color' value='#990000' class='color-input' />";
                         echo '<span class="color_preview" id="color2" style="background: #990000;"></span>';
                      }
                      if ($options){
                         echo "<input id='link_color' type='text' size='30' name='link_color' value='$options' class='color-input' />";
                         echo "<span class='color_preview'  id='color2' style='background: $options'></span>";
                      }
                      echo "<a id='link_color_button' class='button'>";
                           _e('Choose color','me-3-9-3');
                      echo "</a>";
           echo '</div>';
           echo "
           <script type='text/javascript'>
           jQuery('#link_color_button').ColorPicker({
               color: '$options',
               onShow: function (colpkr) {
                       jQuery(colpkr).fadeIn(500);
                       return false;
               },
               onHide: function (colpkr) {
                       jQuery(colpkr).fadeOut(500);
                       return false;
               },
               onChange: function (hsb, hex, rgb) {
                         jQuery('input#link_color').val('#' + hex);
                         jQuery('span#color2').css('background-color', '#' + hex);
	      }
           });
           </script>";
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Menu font family
function menu_font_callback() {
      $options = get_option('menu_font');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Menu font','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<select name='menu_font'>";
                     if (!get_option('menu_font')) {
                        echo '<option value="Brawler">Brawler</option>';
                     }
                     if (get_option('menu_font')) {
                        echo "<option value='$options' selected='selected'>$options</option>";
                     }
                     echo '<optgroup label="Sans Serif style">
                                        <option value="Abel">Abel</option>
                                        <option value="Andika">Andika</option>
                                        <option value="Antic">Antic</option>
                                        <option value="arial">Arial</option>
                                        <option value="Arimo">Arimo</option>
                                        <option value="Asap">Asap</option>
                                        <option value="Gudea">Gudea</option>
                                        <option value="Cabin">Cabin</option>
                                        <option value="Cantarell">Cantarell</option>
                                        <option value="Denk One">Denk One</option>
                                        <option value="Didact Gothic">Didact gothic</option>
                                        <option value="Droid Sans">Droid Sans</option>
                                        <option value="Electrolize">Electrolize</option>
                                        <option value="Josefin Sans">Josefin Sans</option>
                                        <option value="Julius Sans One">Julius Sans One</option>
                                        <option value="Lato">Lato</option>
                                        <option value="Lekton">Lekton</option>
                                        <option value="Maven Pro">Maven Pro</option>
                                        <option value="Michroma">Michroma</option>
                                        <option value="Muli">Muli</option>
                                        <option value="Nobile">Nobile</option>
                                        <option value="Numans">Numans</option>
                                        <option value="Nunito">Nunito</option>
                                        <option value="Open Sans">Open Sans</option>
                                        <option value="Pathway Gothic One">Pathway Gothic One</option>
                                        <option value="PT Sans">PT Sans</option>
                                        <option value="Quattrocento Sans">Quattrocento Sans</option>
                                        <option value="Quicksand">Quicksand</option>
                                        <option value="Questrial">Questrial</option>
                                        <option value="Raleway">Raleway</option>
                                        <option value="Rationale">Rationale</option>
                                        <option value="Six Caps">Six Caps</option>
                                        <option value="Terminal Dosis">Terminal Dosis</option>
                              </optgroup>
                              <optgroup label="Serif style">
                                        <option value="Alice">Alice</option>
                                        <option value="Alike Angular">Alike</option>
                                        <option value="Andada">Andada</option>
                                        <option value="Arapey">Arapey</option>
                                        <option value="Arvo">Arvo</option>
                                        <option value="Alegreya SC">Alegreya</option>
                                        <option value="Bitter">Bitter</option>
                                        <option value="Brawler">Brawler</option>
                                        <option value="Cardo">Cardo</option>
                                        <option value="Copse">Copse</option>
                                        <option value="Crimson Text">Crimson text</option>
                                        <option value="Domine">Domine</option>
                                        <option value="Droid Serif">Droid Serif</option>
                                        <option value="Fanwood Text">Fanwood text</option>
                                        <option value="Fjord One">Fjord one</option>
                                        <option value="Gentium Basic">Gentium basic</option>
                                        <option value="EB Garamond">EB Garamond</option>
                                        <option value="Goudy Bookletter 1911">Goudy Bookletter 1911</option>
                                        <option value="Junge">Junge</option>
                                        <option value="Linden Hill">Linden Hill</option>
                                        <option value="Lusitana">Lusitana</option>
                                        <option value="Lustria">Lustria</option>
                                        <option value="Mate">Mate</option>
                                        <option value="Merriweather">Merriweather</option>
                                        <option value="Noto Serif">Noto Serif</option>
                                        <option value="Oranienbaum">Oranienbaum</option>
                                        <option value="Petrona">Petrona</option>
                                        <option value="Podkova">Podkova</option>
                                        <option value="Poly">Poly</option>
                                        <option value="Prata">Prata</option>
                                        <option value="PT Serif Caption">PT Serif Caption</option>
                                        <option value="Quattrocento">Quattrocento</option>
                                        <option value="Rokkitt">Rokkitt</option>
                                        <option value="Vollkorn">Vollkorn</option>
                              </optgroup>
                              <optgroup label="System fonts">
                                        <option value="Arial">Arial</option>
                                        <option value="Courier New">Courier New</option>
                                        <option value="Comic Sans MS">Comic Sans MS</option>
                                        <option value="Helvetica">Helvetica</option>
                                        <option value="Tahoma">Tahoma</option>
                                        <option value="Verdana">Verdana</option>
                                        <option value="Book Antiqua">Book Antiqua</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Times New Roman">Times New Roman</option>
                              </optgroup>
                              <optgroup label="Cyrllic Extended">
                                         <option value="Comfortaa">Comfortaa</option>
                                         <option value="Didact Gothic">Didact gothic</option>
                                         <option value="Jura">Jura</option>
                                         <option value="Open Sans">OpenSans-cyrillic</option>
                                         <option value="Tenor Sans">Tenor Sans</option>
                              </optgroup>
                ';
                echo "</select>";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Menu font size
function menu_font_size_callback() {
      $options = get_option('menu_font_size');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Menu font size','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<select name='menu_font_size'>";
                if ( !get_option('menu_font_size') ){
                   echo "<option value='16px' selected='selected'>16px</option><option disabled>--</option>";
                }
                if ( get_option('menu_font_size') ){
                   echo "<option value='$options'>$options</option><option disabled>--</option>";
                }
                echo '
                <option value="12px">12px</option>
                <option value="13px">13px</option>
                <option value="14px">14px</option>
                <option value="15px">15px</option>
                <option value="16px">16px</option>
                <option value="17px">17px</option>
                <option value="18px">18px</option>
                <option value="19px">19px</option>
                <option value="20px">20px</option>
                <option value="21px">21px</option>
                <option value="22px">22px</option>
                <option value="23px">23px</option>
                <option value="24px">24px</option>
                <option value="25px">25px</option>
                <option value="26px">26px</option>
                <option value="27px">27px</option>
                <option value="28px">28px</option>
                <option value="29px">29px</option>
                <option value="30px">30px</option>
                ';
                echo "</select>";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Menu color
function menu_font_color_callback() {
      $options = get_option('menu_font_color');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Menu font color','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                      if (!$options){
                         echo "<input id='menu_font_color' type='text' size='30' name='menu_font_color' value='#272727' class='color-input' />";
                         echo '<span class="color_preview" id="color3" style="background: #272727;"></span>';
                      }
                      if ($options){
                         echo "<input id='menu_font_color' type='text' size='30' name='menu_font_color' value='$options' class='color-input' />";
                         echo "<span class='color_preview' id='color3' style='background: $options'></span>";
                      }
                      echo "<a id='menu_font_color_button' class='button'>";
                           _e('Choose color','me-3-9-3');
                      echo "</a>";
           echo '</div>';
           echo "
           <script type='text/javascript'>
           jQuery('#menu_font_color_button').ColorPicker({
               color: '$options',
               onShow: function (colpkr) {
                       jQuery(colpkr).fadeIn(500);
                       return false;
               },
               onHide: function (colpkr) {
                       jQuery(colpkr).fadeOut(500);
                       return false;
               },
               onChange: function (hsb, hex, rgb) {
                         jQuery('input#menu_font_color').val('#' + hex);
                         jQuery('span#color3').css('background-color', '#' + hex);
	      }
           });
           </script>";
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Hidden menu background color
function hidden_menu_background_callback() {
      $options = get_option('hidden_menu_background');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Hidden menu background','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                      if (!$options){
                         echo "<input id='hidden_menu_background' type='text' size='30' name='hidden_menu_background' value='#272727' class='color-input' />";
                         echo '<span class="color_preview" id="color4" style="background: #272727"></span>';
                      }
                      if ($options){
                         echo "<input id='hidden_menu_background' type='text' size='30' name='hidden_menu_background' value='$options' class='color-input' />";
                         echo "<span class='color_preview' id='color4' style='background: $options'></span>";
                      }
                      echo "<a id='hidden_menu_background_button' class='button'>";
                           _e('Choose color','me-3-9-3');
                      echo "</a>";
           echo '</div>';
           echo "
           <script type='text/javascript'>
           jQuery('#hidden_menu_background_button').ColorPicker({
               color: '$options',
               onShow: function (colpkr) {
                       jQuery(colpkr).fadeIn(500);
                       return false;
               },
               onHide: function (colpkr) {
                       jQuery(colpkr).fadeOut(500);
                       return false;
               },
               onChange: function (hsb, hex, rgb) {
                         jQuery('input#hidden_menu_background').val('#' + hex);
                         jQuery('span#color4').css('background-color', '#' + hex);
	      }
           });
           </script>";
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Hidden menu font color
function hidden_menu_color_callback() {
      $options = get_option('hidden_menu_color');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Hidden menu font color','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                      if (!$options){
                         echo "<input id='hidden_menu_color' type='text' size='30' name='hidden_menu_color' value='#F8F8F8' class='color-input' />";
                         echo '<span class="color_preview" id="color5" style="background: #F8F8F8"></span>';
                      }
                      if ($options){
                         echo "<input id='hidden_menu_color' type='text' size='30' name='hidden_menu_color' value='$options' class='color-input' />";
                         echo "<span class='color_preview' id='color5' style='background: $options'></span>";
                      }
                      echo "<a id='hidden_menu_color_button' class='button'>";
                           _e('Choose color','me-3-9-3');
                      echo "</a>";
           echo '</div>';
           echo "
           <script type='text/javascript'>
           jQuery('#hidden_menu_color_button').ColorPicker({
               color: '$options',
               onShow: function (colpkr) {
                       jQuery(colpkr).fadeIn(500);
                       return false;
               },
               onHide: function (colpkr) {
                       jQuery(colpkr).fadeOut(500);
                       return false;
               },
               onChange: function (hsb, hex, rgb) {
                         jQuery('input#hidden_menu_color').val('#' + hex);
                         jQuery('span#color5').css('background-color', '#' + hex);
	      }
           });
           </script>";
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Background color
function background_color_callback() {
      $options = get_option('background_color');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Background color','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                      if (!$options){
                         echo "<input id='background_color' type='text' size='30' name='background_color' value='#F8F8F8' class='color-input' />";
                         echo '<span class="color_preview" id="color6" style="background: #F8F8F8"></span>';
                      }
                      if ($options){
                         echo "<input id='background_color' type='text' size='30' name='background_color' value='$options' class='color-input' />";
                         echo "<span class='color_preview' id='color6' style='background: $options'></span>";
                      }
                      echo "<a id='background_color_button' class='button'>";
                           _e('Choose color','me-3-9-3');
                      echo "</a>";
           echo '</div>';
           echo "
           <script type='text/javascript'>
           jQuery('#background_color_button').ColorPicker({
               color: '$options',
               onShow: function (colpkr) {
                       jQuery(colpkr).fadeIn(500);
                       return false;
               },
               onHide: function (colpkr) {
                       jQuery(colpkr).fadeOut(500);
                       return false;
               },
               onChange: function (hsb, hex, rgb) {
                         jQuery('input#background_color').val('#' + hex);
                         jQuery('span#color6').css('background-color', '#' + hex);
	      }
           });
           </script>";
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Background pattern
function background_pattern_callback() {
      $options = get_option('background_pattern');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Background pattern','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo '<div class="patterns_container">';
                      echo '<ul>';
                      if (!$options){
                         echo '<li class="active_pattern"><div class="no_pattern"></div><input type="radio" name="background_pattern" value="no_pattern"><br class="clear" /></li>';
                      }
                      if ($options && $options != "no_pattern" ){
                         $pattern_path = $options;
                         $pattern_class = explode(".",$options);
                         echo '<li class="active_pattern"><div class="'.$pattern_class[0].'"></div><input type="radio" name="background_pattern" value="'.$pattern_path.'" checked><br class="clear" /></li>';
                         echo '<li><div class="no_pattern"></div><input type="radio" name="background_pattern" value="no_pattern"><br class="clear" /></li>';
                      }
                      if ($options && $options == "no_pattern" ){
                         echo '<li class="active_pattern"><div class="no_pattern"></div><input type="radio" name="background_pattern" value="no_pattern" checked><br class="clear" /></li>';
                      }
                      echo '<li><div class="pattern1"></div><input type="radio" name="background_pattern" value="pattern1.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern2"></div><input type="radio" name="background_pattern" value="pattern2.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern3"></div><input type="radio" name="background_pattern" value="pattern3.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern4"></div><input type="radio" name="background_pattern" value="pattern4.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern5"></div><input type="radio" name="background_pattern" value="pattern5.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern6"></div><input type="radio" name="background_pattern" value="pattern6.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern7"></div><input type="radio" name="background_pattern" value="pattern7.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern8"></div><input type="radio" name="background_pattern" value="pattern8.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern9"></div><input type="radio" name="background_pattern" value="pattern9.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern10"></div><input type="radio" name="background_pattern" value="pattern10.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern11"></div><input type="radio" name="background_pattern" value="pattern11.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern12"></div><input type="radio" name="background_pattern" value="pattern12.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern13"></div><input type="radio" name="background_pattern" value="pattern13.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern14"></div><input type="radio" name="background_pattern" value="pattern14.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern15"></div><input type="radio" name="background_pattern" value="pattern15.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern16"></div><input type="radio" name="background_pattern" value="pattern16.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern17"></div><input type="radio" name="background_pattern" value="pattern17.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern18"></div><input type="radio" name="background_pattern" value="pattern18.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern19"></div><input type="radio" name="background_pattern" value="pattern19.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern20"></div><input type="radio" name="background_pattern" value="pattern20.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern21"></div><input type="radio" name="background_pattern" value="pattern21.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern22"></div><input type="radio" name="background_pattern" value="pattern22.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern23"></div><input type="radio" name="background_pattern" value="pattern23.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern24"></div><input type="radio" name="background_pattern" value="pattern24.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern25"></div><input type="radio" name="background_pattern" value="pattern25.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern26"></div><input type="radio" name="background_pattern" value="pattern26.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern27"></div><input type="radio" name="background_pattern" value="pattern27.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern28"></div><input type="radio" name="background_pattern" value="pattern28.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern29"></div><input type="radio" name="background_pattern" value="pattern29.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern30"></div><input type="radio" name="background_pattern" value="pattern30.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern31"></div><input type="radio" name="background_pattern" value="pattern31.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern32"></div><input type="radio" name="background_pattern" value="pattern32.png"><br class="clear" /></li>';
                      echo '<li><div class="pattern33"></div><input type="radio" name="background_pattern" value="pattern33.png"><br class="clear" /></li>';
                      echo '</ul>';
                echo '</div>';
                echo "<a class='button background_pattern_button' style='float: left;'>";
                     _e('Show More','me-3-9-3');
                echo "</a>";
                echo "<a class='button background_pattern_less' style='float: left; margin-left: 10px;'>";
                     _e('Show Less','me-3-9-3');
                echo "</a>";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Background image
function background_image_callback() {
      $options = get_option('background_image');
      $background_button_text = __('Select Image','me-3-9-3');
      $remove_button_text =  __('Remove','me-3-9-3');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Background image','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<input id='background_image' type='text' size='36' name='background_image' value='$options' class='image_select_field'/>";
                echo "<a id='background_image_button' class='button image_select'>$background_button_text</a>";
                echo "<a class='button image_remove'>$remove_button_text</a>";
                if ( !$options ) { echo '<div class="admin_image_container"></div>'; }
                if ( $options ) { echo '<div class="admin_image_container"><img src="'.$options.'" alt="" /></div>'; }
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Line color
function line_color_callback() {
      $options = get_option('line_color');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Line color','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                      if (!$options){
                         echo "<input id='line_color' type='text' size='30' name='line_color' value='#CCCCCC' class='color-input' />";
                         echo '<span class="color_preview" id="color7" style="background: #CCCCCC;"></span>';
                      }
                      if ($options){
                         echo "<input id='line_color' type='text' size='30' name='line_color' value='$options' class='color-input' />";
                         echo "<span class='color_preview' id='color7' style='background: $options'></span>";
                      }
                      echo "<a id='line_color_button' class='button'>";
                           _e('Choose color','me-3-9-3');
                      echo "</a>";
           echo '</div>';
           echo "
           <script type='text/javascript'>
           jQuery('#line_color_button').ColorPicker({
               color: '$options',
               onShow: function (colpkr) {
                       jQuery(colpkr).fadeIn(500);
                       return false;
               },
               onHide: function (colpkr) {
                       jQuery(colpkr).fadeOut(500);
                       return false;
               },
               onChange: function (hsb, hex, rgb) {
                         jQuery('input#line_color').val('#' + hex);
                         jQuery('span#color7').css('background-color', '#' + hex);
	      }
           });
           </script>";
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Heading font family
function heading_font_callback() {
      $options = get_option('heading_font');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Heading font','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<select name='heading_font'>";
                if (!$options) {
                   echo '<option value="Vollkorn">Vollkorn</option>';
                }
                if ($options) {
                   echo "<option value='$options'>$options</option>";
                }
                echo '
                     <optgroup label="Sans Serif style">
                                        <option value="Abel">Abel</option>
                                        <option value="Andika">Andika</option>
                                        <option value="Antic">Antic</option>
                                        <option value="arial">Arial</option>
                                        <option value="Arimo">Arimo</option>
                                        <option value="Asap">Asap</option>
                                        <option value="Gudea">Gudea</option>
                                        <option value="Cabin">Cabin</option>
                                        <option value="Cantarell">Cantarell</option>
                                        <option value="Denk One">Denk One</option>
                                        <option value="Didact Gothic">Didact gothic</option>
                                        <option value="Droid Sans">Droid Sans</option>
                                        <option value="Electrolize">Electrolize</option>
                                        <option value="Josefin Sans">Josefin Sans</option>
                                        <option value="Julius Sans One">Julius Sans One</option>
                                        <option value="Lato">Lato</option>
                                        <option value="Lekton">Lekton</option>
                                        <option value="Maven Pro">Maven Pro</option>
                                        <option value="Michroma">Michroma</option>
                                        <option value="Muli">Muli</option>
                                        <option value="Nobile">Nobile</option>
                                        <option value="Numans">Numans</option>
                                        <option value="Nunito">Nunito</option>
                                        <option value="Open Sans">Open Sans</option>
                                        <option value="Pathway Gothic One">Pathway Gothic One</option>
                                        <option value="PT Sans">PT Sans</option>
                                        <option value="Quattrocento Sans">Quattrocento Sans</option>
                                        <option value="Quicksand">Quicksand</option>
                                        <option value="Questrial">Questrial</option>
                                        <option value="Raleway">Raleway</option>
                                        <option value="Rationale">Rationale</option>
                                        <option value="Six Caps">Six Caps</option>
                                        <option value="Terminal Dosis">Terminal Dosis</option>
                              </optgroup>
                              <optgroup label="Serif style">
                                        <option value="Alice">Alice</option>
                                        <option value="Alike Angular">Alike</option>
                                        <option value="Andada">Andada</option>
                                        <option value="Arapey">Arapey</option>
                                        <option value="Arvo">Arvo</option>
                                        <option value="Alegreya SC">Alegreya</option>
                                        <option value="Bitter">Bitter</option>
                                        <option value="Brawler">Brawler</option>
                                        <option value="Cardo">Cardo</option>
                                        <option value="Copse">Copse</option>
                                        <option value="Crimson Text">Crimson text</option>
                                        <option value="Domine">Domine</option>
                                        <option value="Droid Serif">Droid Serif</option>
                                        <option value="Fanwood Text">Fanwood text</option>
                                        <option value="Fjord One">Fjord one</option>
                                        <option value="Gentium Basic">Gentium basic</option>
                                        <option value="EB Garamond">EB Garamond</option>
                                        <option value="Goudy Bookletter 1911">Goudy Bookletter 1911</option>
                                        <option value="Junge">Junge</option>
                                        <option value="Linden Hill">Linden Hill</option>
                                        <option value="Lusitana">Lusitana</option>
                                        <option value="Lustria">Lustria</option>
                                        <option value="Mate">Mate</option>
                                        <option value="Merriweather">Merriweather</option>
                                        <option value="Noto Serif">Noto Serif</option>
                                        <option value="Oranienbaum">Oranienbaum</option>
                                        <option value="Petrona">Petrona</option>
                                        <option value="Podkova">Podkova</option>
                                        <option value="Poly">Poly</option>
                                        <option value="Prata">Prata</option>
                                        <option value="PT Serif Caption">PT Serif Caption</option>
                                        <option value="Quattrocento">Quattrocento</option>
                                        <option value="Rokkitt">Rokkitt</option>
                                        <option value="Vollkorn">Vollkorn</option>
                              </optgroup>
                              <optgroup label="System fonts">
                                        <option value="Arial">Arial</option>
                                        <option value="Courier New">Courier New</option>
                                        <option value="Comic Sans MS">Comic Sans MS</option>
                                        <option value="Helvetica">Helvetica</option>
                                        <option value="Tahoma">Tahoma</option>
                                        <option value="Verdana">Verdana</option>
                                        <option value="Book Antiqua">Book Antiqua</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Times New Roman">Times New Roman</option>
                              </optgroup>
                              <optgroup label="Cyrllic Extended">
                                         <option value="Comfortaa">Comfortaa</option>
                                         <option value="Didact Gothic">Didact gothic</option>
                                         <option value="Jura">Jura</option>
                                         <option value="Open Sans">OpenSans-cyrillic</option>
                                         <option value="Tenor Sans">Tenor Sans</option>
                              </optgroup>
                ';
                echo '</select>';
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Heading color
function heading_color_callback() {
      $options = get_option('heading_color');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Heading font color','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                      if (!$options){
                         echo "<input id='heading_color' type='text' size='30' name='heading_color' value='#333333' class='color-input' />";
                         echo '<span class="color_preview" id="color8" style="background: #333333;"></span>';
                      }
                      if ($options){
                         echo "<input id='heading_color' type='text' size='30' name='heading_color' value='$options' class='color-input' />";
                         echo "<span class='color_preview' id='color8' style='background: $options'></span>";
                      }
                      echo "<a id='heading_color_button' class='button'>";
                           _e('Choose color','me-3-9-3');
                      echo "</a>";
           echo '</div>';
           echo "
           <script type='text/javascript'>
           jQuery('#heading_color_button').ColorPicker({
               color: '$options',
               onShow: function (colpkr) {
                       jQuery(colpkr).fadeIn(500);
                       return false;
               },
               onHide: function (colpkr) {
                       jQuery(colpkr).fadeOut(500);
                       return false;
               },
               onChange: function (hsb, hex, rgb) {
                         jQuery('input#heading_color').val('#' + hex);
                         jQuery('span#color8').css('background-color', '#' + hex);
	      }
           });
           </script>";
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Intro font family
function intro_font_callback() {
      $options = get_option('intro_font');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Intro text font','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<select name='intro_font'>";
                if (!$options) {
                   echo '<option value="inherited">';
                   echo __('Inherited','me-3-9-3');
                   echo '</option>';
                }
                if ($options) {
                   echo "<option value='$options'>$options</option>";
                }
                echo '<option value="inherited">';
                echo __('Inherited','me-3-9-3');
                echo '</option>
                     <optgroup label="Sans Serif style">
                                        <option value="Abel">Abel</option>
                                        <option value="Andika">Andika</option>
                                        <option value="Antic">Antic</option>
                                        <option value="arial">Arial</option>
                                        <option value="Arimo">Arimo</option>
                                        <option value="Asap">Asap</option>
                                        <option value="Gudea">Gudea</option>
                                        <option value="Cabin">Cabin</option>
                                        <option value="Cantarell">Cantarell</option>
                                        <option value="Denk One">Denk One</option>
                                        <option value="Didact Gothic">Didact gothic</option>
                                        <option value="Droid Sans">Droid Sans</option>
                                        <option value="Electrolize">Electrolize</option>
                                        <option value="Josefin Sans">Josefin Sans</option>
                                        <option value="Julius Sans One">Julius Sans One</option>
                                        <option value="Lato">Lato</option>
                                        <option value="Lekton">Lekton</option>
                                        <option value="Maven Pro">Maven Pro</option>
                                        <option value="Michroma">Michroma</option>
                                        <option value="Muli">Muli</option>
                                        <option value="Nobile">Nobile</option>
                                        <option value="Numans">Numans</option>
                                        <option value="Nunito">Nunito</option>
                                        <option value="Open Sans">Open Sans</option>
                                        <option value="PT Sans">PT Sans</option>
                                        <option value="Quattrocento Sans">Quattrocento Sans</option>
                                        <option value="Quicksand">Quicksand</option>
                                        <option value="Questrial">Questrial</option>
                                        <option value="Raleway">Raleway</option>
                                        <option value="Rationale">Rationale</option>
                                        <option value="Six Caps">Six Caps</option>
                                        <option value="Terminal Dosis">Terminal Dosis</option>
                              </optgroup>
                              <optgroup label="Serif style">
                                        <option value="Alice">Alice</option>
                                        <option value="Alike Angular">Alike</option>
                                        <option value="Andada">Andada</option>
                                        <option value="Arapey">Arapey</option>
                                        <option value="Arvo">Arvo</option>
                                        <option value="Alegreya SC">Alegreya</option>
                                        <option value="Bitter">Bitter</option>
                                        <option value="Brawler">Brawler</option>
                                        <option value="Cardo">Cardo</option>
                                        <option value="Copse">Copse</option>
                                        <option value="Crimson Text">Crimson text</option>
                                        <option value="Domine">Domine</option>
                                        <option value="Droid Serif">Droid Serif</option>
                                        <option value="Fanwood Text">Fanwood text</option>
                                        <option value="Fjord One">Fjord one</option>
                                        <option value="Gentium Basic">Gentium basic</option>
                                        <option value="EB Garamond">EB Garamond</option>
                                        <option value="Goudy Bookletter 1911">Goudy Bookletter 1911</option>
                                        <option value="Junge">Junge</option>
                                        <option value="Linden Hill">Linden Hill</option>
                                        <option value="Lusitana">Lusitana</option>
                                        <option value="Lustria">Lustria</option>
                                        <option value="Mate">Mate</option>
                                        <option value="Merriweather">Merriweather</option>
                                        <option value="Noto Serif">Noto Serif</option>
                                        <option value="Oranienbaum">Oranienbaum</option>
                                        <option value="Pathway Gothic One">Pathway Gothic One</option>
                                        <option value="Petrona">Petrona</option>
                                        <option value="Podkova">Podkova</option>
                                        <option value="Poly">Poly</option>
                                        <option value="Prata">Prata</option>
                                        <option value="PT Serif Caption">PT Serif Caption</option>
                                        <option value="Quattrocento">Quattrocento</option>
                                        <option value="Rokkitt">Rokkitt</option>
                                        <option value="Vollkorn">Vollkorn</option>
                              </optgroup>
                              <optgroup label="System fonts">
                                        <option value="Arial">Arial</option>
                                        <option value="Courier New">Courier New</option>
                                        <option value="Comic Sans MS">Comic Sans MS</option>
                                        <option value="Helvetica">Helvetica</option>
                                        <option value="Tahoma">Tahoma</option>
                                        <option value="Verdana">Verdana</option>
                                        <option value="Book Antiqua">Book Antiqua</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Times New Roman">Times New Roman</option>
                              </optgroup>
                              <optgroup label="Cyrllic Extended">
                                         <option value="Comfortaa">Comfortaa</option>
                                         <option value="Didact Gothic">Didact gothic</option>
                                         <option value="Jura">Jura</option>
                                         <option value="Open Sans">OpenSans-cyrillic</option>
                                         <option value="Tenor Sans">Tenor Sans</option>
                              </optgroup>
                ';
                echo '</select>';
                echo "<label for='intro_font'>";
                echo __('Inherited from the headings by default.','me-3-9-3');
                echo "</label>";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Intro font size
function intro_font_size_callback() {
      $options = get_option('intro_font_size');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Intro text font size','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<select name='intro_font_size'>";
                if ( !$options ){
                   echo "<option value='19px' selected='selected'>19px</option><option disabled>--</option>";
                }
                if ( $options ){
                   echo "<option value='$options'>$options</option><option disabled>--</option>";
                }
                echo '
                <option value="12px">12px</option>
                <option value="13px">13px</option>
                <option value="14px">14px</option>
                <option value="15px">15px</option>
                <option value="16px">16px</option>
                <option value="17px">17px</option>
                <option value="18px">18px</option>
                <option value="19px">19px</option>
                <option value="20px">20px</option>
                <option value="21px">21px</option>
                <option value="22px">22px</option>
                <option value="23px">23px</option>
                <option value="24px">24px</option>
                <option value="25px">25px</option>
                <option value="26px">26px</option>
                <option value="27px">27px</option>
                <option value="28px">28px</option>
                <option value="29px">29px</option>
                <option value="30px">30px</option>
                ';
                echo "</select>";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Page title font
function page_title_font_callback() {
      $options = get_option('page_title_font');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Section title font','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                echo "<select name='page_title_font'>";
                if (!$options) {
                echo '<option value="Brawler">Brawler</option>';
                }
                if ($options) {
                echo "<option value='$options' selected='selected'>$options</option>";
                }
                echo '<optgroup label="Sans Serif style">
                                        <option value="Abel">Abel</option>
                                        <option value="Andika">Andika</option>
                                        <option value="Antic">Antic</option>
                                        <option value="arial">Arial</option>
                                        <option value="Arimo">Arimo</option>
                                        <option value="Asap">Asap</option>
                                        <option value="Gudea">Gudea</option>
                                        <option value="Cabin">Cabin</option>
                                        <option value="Cantarell">Cantarell</option>
                                        <option value="Denk One">Denk One</option>
                                        <option value="Didact Gothic">Didact gothic</option>
                                        <option value="Droid Sans">Droid Sans</option>
                                        <option value="Electrolize">Electrolize</option>
                                        <option value="Josefin Sans">Josefin Sans</option>
                                        <option value="Julius Sans One">Julius Sans One</option>
                                        <option value="Lato">Lato</option>
                                        <option value="Lekton">Lekton</option>
                                        <option value="Maven Pro">Maven Pro</option>
                                        <option value="Michroma">Michroma</option>
                                        <option value="Muli">Muli</option>
                                        <option value="Nobile">Nobile</option>
                                        <option value="Numans">Numans</option>
                                        <option value="Nunito">Nunito</option>
                                        <option value="Open Sans">Open Sans</option>
                                        <option value="Pathway Gothic One">Pathway Gothic One</option>
                                        <option value="PT Sans">PT Sans</option>
                                        <option value="Quattrocento Sans">Quattrocento Sans</option>
                                        <option value="Quicksand">Quicksand</option>
                                        <option value="Questrial">Questrial</option>
                                        <option value="Raleway">Raleway</option>
                                        <option value="Rationale">Rationale</option>
                                        <option value="Six Caps">Six Caps</option>
                                        <option value="Terminal Dosis">Terminal Dosis</option>
                              </optgroup>
                              <optgroup label="Serif style">
                                        <option value="Alice">Alice</option>
                                        <option value="Alike Angular">Alike</option>
                                        <option value="Andada">Andada</option>
                                        <option value="Arapey">Arapey</option>
                                        <option value="Arvo">Arvo</option>
                                        <option value="Alegreya SC">Alegreya</option>
                                        <option value="Bitter">Bitter</option>
                                        <option value="Brawler">Brawler</option>
                                        <option value="Cardo">Cardo</option>
                                        <option value="Copse">Copse</option>
                                        <option value="Crimson Text">Crimson text</option>
                                        <option value="Domine">Domine</option>
                                        <option value="Droid Serif">Droid Serif</option>
                                        <option value="Fanwood Text">Fanwood text</option>
                                        <option value="Fjord One">Fjord one</option>
                                        <option value="Gentium Basic">Gentium basic</option>
                                        <option value="EB Garamond">EB Garamond</option>
                                        <option value="Goudy Bookletter 1911">Goudy Bookletter 1911</option>
                                        <option value="Junge">Junge</option>
                                        <option value="Linden Hill">Linden Hill</option>
                                        <option value="Lusitana">Lusitana</option>
                                        <option value="Lustria">Lustria</option>
                                        <option value="Mate">Mate</option>
                                        <option value="Merriweather">Merriweather</option>
                                        <option value="Noto Serif">Noto Serif</option>
                                        <option value="Oranienbaum">Oranienbaum</option>
                                        <option value="Petrona">Petrona</option>
                                        <option value="Podkova">Podkova</option>
                                        <option value="Poly">Poly</option>
                                        <option value="Prata">Prata</option>
                                        <option value="PT Serif Caption">PT Serif Caption</option>
                                        <option value="Quattrocento">Quattrocento</option>
                                        <option value="Rokkitt">Rokkitt</option>
                                        <option value="Vollkorn">Vollkorn</option>
                              </optgroup>
                              <optgroup label="System fonts">
                                        <option value="Arial">Arial</option>
                                        <option value="Courier New">Courier New</option>
                                        <option value="Comic Sans MS">Comic Sans MS</option>
                                        <option value="Helvetica">Helvetica</option>
                                        <option value="Tahoma">Tahoma</option>
                                        <option value="Verdana">Verdana</option>
                                        <option value="Book Antiqua">Book Antiqua</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Times New Roman">Times New Roman</option>
                              </optgroup>
                              <optgroup label="Cyrllic Extended">
                                         <option value="Comfortaa">Comfortaa</option>
                                         <option value="Didact Gothic">Didact gothic</option>
                                         <option value="Jura">Jura</option>
                                         <option value="Open Sans">OpenSans-cyrillic</option>
                                         <option value="Tenor Sans">Tenor Sans</option>
                              </optgroup>
                ';
                echo "</select>";
           echo '</div>';
      echo '<div class="clear"></div>';
      echo '</div>';
}

//Heading color
function section_title_color_callback() {
      $options = get_option('section_title_color');
      echo '<div class="option">';
           echo '<div class="option-left">';
                _e('Section title color','me-3-9-3');
           echo '</div>';
           echo '<div class="option-right">';
                      if (!$options){
                         echo "<input id='section_title_color' type='text' size='30' name='section_title_color' value='#272727' class='color-input' />";
                         echo '<span class="color_preview" id="color9" style="background: #272727;"></span>';
                      }
                      if ($options){
                         echo "<input id='section_title_color' type='text' size='30' name='section_title_color' value='$options' class='color-input' />";
                         echo "<span class='color_preview' id='color9' style='background: $options'></span>";
                      }
                      echo "<a id='section_title_color_button' class='button'>";
                           _e('Choose color','me-3-9-3');
                      echo "</a>";
           echo '</div>';
           echo "
           <script type='text/javascript'>
           jQuery('#section_title_color_button').ColorPicker({
               color: '$options',
               onShow: function (colpkr) {
                       jQuery(colpkr).fadeIn(500);
                       return false;
               },
               onHide: function (colpkr) {
                       jQuery(colpkr).fadeOut(500);
                       return false;
               },
               onChange: function (hsb, hex, rgb) {
                         jQuery('input#section_title_color').val('#' + hex);
                         jQuery('span#color9').css('background-color', '#' + hex);
	      }
           });
           </script>";
      echo '<div class="clear"></div>';
      echo '</div>';
}



?>