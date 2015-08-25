<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HeadGadget
 *
 * @author juliboy
 */
class GadgetHead implements CommonGadget{

    public function loadCss() {
     ?>
        <link rel="stylesheet" type="text/css" href="common/css/util/gadgethead.css" />
     <?
    }
    public function windowDesign() {
        ?>
           
                <div id="header_logo_fundo">
                 </div>
                 <div id="header">
                     <a class="header_botao" href="#"><span class="header_botao_home">&nbsp;</span></a>
                 </div>

                <!--div id="header_lernmore">
                     <a class="header_learnmore_botao" href="#">
                            <span class="header_learnmore_botao_learnmore">
                                    &nbsp;
                            </span>
                     </a>
                 </div>



                <div id="content">
                    <p>This is the main content</p><br /><br />
                    <p></p>
                </div>
                <div id="footer">
                    <p>This is the Footer</p>
                </div-->
        <?
    }
}
?>
