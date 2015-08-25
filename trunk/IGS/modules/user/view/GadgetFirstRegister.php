<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GadgetFirstRegister
 *
 * @author tiagoajacobi
 */
class GadgetFirstRegister implements CommonGadget{

    public function loadCss() {
        ?>
            <link rel="stylesheet" type="text/css" href="common/css/gadgetfirstregister.css" />
        <?
    }

    public function loadJavaScript() {
        ?>
            <link rel="text" type="text/javascript" href="common/js/gadgetfirstregister.js" />
        <?
    }

    public function windowDesign() {
        ?>
            <div id="firstregister_body" class="window">
                <div class="d-header">
                    <input type="text" value="name" onclick="this.value=''"/><br/>
                    <input type="text" value="email" onclick="this.value=''"/>
                </div>
                <div class="d-blank"></div>
                <div class="d-login">
                    <input type="image" alt="Login" title="Login" src="../../common/images/login-button.png"/>
                </div>
            </div>
        <?
    }
}
?>
