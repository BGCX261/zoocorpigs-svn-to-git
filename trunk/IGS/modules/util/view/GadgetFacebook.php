<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class GadgetFacebook implements CommonGadget{

        public function loadCss() {
    ?>
        <link rel="stylesheet" href="common/css/util/gadgetfacebook.css" />
    <?
    }


    public function windowDesign() {
        ?>
           <div id="facebook">
              <a class="facebook_button" href="#">
                  <span class=""></span>
              </a>
           </div>
        <?
    }
}
?>
