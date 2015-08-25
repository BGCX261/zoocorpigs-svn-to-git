<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GadgetFooter
 *
 * @author minero
 */
class GadgetFooter implements CommonGadget {
    //put your code here
    public function loadCss() {
        ?>
             <link rel="stylesheet" type="text/css" href="common/css/util/gadgetfooter.css" />
        <?
    }
    public function windowDesign() {
        ?>
                <div id="gadget_footer">
                    <div id="footer_top"></div>
                    <div id="footer_igs"></div>
                </div>
        <?
    }
}
?>
