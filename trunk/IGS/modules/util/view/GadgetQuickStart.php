<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GadgetQuickStart
 *
 * @author juliboy
 */
class GadgetQuickStart implements CommonGadget{
    //put your code here
    public function loadCss() {
        ?>
            <link rel="stylesheet" href="common/css/util/gadgetquickstart.css" />
            <link rel="stylesheet" href="common/css/util/util.css" />
        <?
    }
    public function windowDesign() {
         ?>
            <div class="quickstart_botao defaul_button_hover quickstart_access" onmouseover="quickStart(1);" onmouseout="quickStart(2);">
                Acesso rápido
                <a class="quickstart_botao_first" href="#">
                    <span class="quickFirst">
                        e-CPF
                    </span>
                </a>
                <a class="quickstart_botao_second" href="#">
                    <span class="quickSecond">
                        e-CNPJ
                    </span>
                </a>
                <a class="quickstart_botao_third" href="#">
                    <span class="quickThird">
                        e-TESTE
                    </span>
                </a>
            </div>
        <?
    }
}
?>
