<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GadgetLearnMore
 *
 * @author juliboy
 */
class GadgetLearnMore implements CommonGadget{
    //put your code here
    public function loadCss() {
    ?>
        <link rel="stylesheet" href="common/css/util/gadgetlearnmore.css" />
    <?
    }
    public function windowDesign() {
        ?>
            <div id="header_lernmore">
                     <a class="header_learnmore_botao" href="#">
                            <div id="header_lernmore_text"><h1>Saiba mais sobre este pioneiro</h1><br> <h2>Agente de Saúde</h2></div>
                            <span class="header_learnmore_botao_learnmore">
                                    &nbsp;
                            </span>
                     </a>
                 </div>
        <?
    }
}
?>
