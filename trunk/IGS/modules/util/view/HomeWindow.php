<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoomonWindow
 *
 * @author juliboy
 */

require_once 'CommonGadget.php';
require_once 'WindowGadget.php';

class HomeWindow implements CommonGadget{
    private $gadgetsList = array();


    function CoomonWindow(){
        
    }

    public function windowDesign() {
        ?>
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
            <title>IGS</title>
            <? $this->loadCss();?>
            </head>
            <body>
                <?
                foreach ($this->gadgetsList as $value) {
                    $value->windowDesign();
                }
                ?>
            </body>
            </html>
        <?
    }

    public function loadCss() {

        foreach ($this->gadgetsList as $value) {
            $value->loadCss();
        }

        /*for ($x=0;$x<sizeof($this->gadgetsList);$x++) {
            echo "aaaa";
            $this->gadgetsList[x]->loadCss();
        }*/
    }

    public function addGadget(CommonGadget $gadget){
         array_push($this->gadgetsList, $gadget);
    }
}
?>
