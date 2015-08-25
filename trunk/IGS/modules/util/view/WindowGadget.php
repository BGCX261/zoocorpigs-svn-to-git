<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WindowGadget
 *
 * @author juliboy
 */
class WindowGadget implements CommonGadget{
    private $margin_left="";
    private $margin_top="";
    private $gadget;
    private $id="";
    private $z_index="";
    private $position="absolute";
    private $width="100%";
    private $height="100%";
    private $float="";
    private $margin_right="";
    private $margin_bottom="";
    private $bottom="";

    public function setBottom($value){
        $this->bottom = $value;
    }

    public function getBottom(){
        echo (!empty ($this->bottom))?"bottom:".$this->bottom.";":"";
    }

    public function setMargin_bottom($value){
        $this->margin_bottom = $value;
    }

    public function getMargin_bottom(){
        echo (!empty ($this->margin_bottom))?"margin_bottom:".$this->margin_bottom.";":"";
    }

    public function setMargin_right($value){
        $this->margin_right = $value;
    }

    public function getMargin_right(){
        echo (!empty ($this->margin_right))?"margin_right:".$this->margin_right.";":"";
    }


    public function setFloat($value){
        $this->float = $value;
    }

    public function getFloat(){
        echo (!empty ($this->float))?"float:".$this->float.";":"";
    }

    public function setHeight($value){
        $this->height = $value;
    }

    public function getHeight(){
        echo "height:".$this->height.";";
    }

    public function setWidth($value){
        $this->width = $value;
    }

    public function getWidth(){
        echo "width:".$this->width.";";
    }

    public function setPosition($value){
        $this->position = $value;
    }

    public function getPosition(){
        echo "position:".$this->position.";";
    }

    public function setZ_index($value){
        $this->z_index = $value;
    }

    public function getZ_index(){
        echo "z-index:".$this->z_index.";";
    }

    public function setMargin_left($value){
        $this->margin_left = $value;
    }

    public function getMargin_left(){
        echo "margin-left:".$this->margin_left.";";
    }

    public function setMargin_top($value){
        $this->margin_top = $value;
    }

    public function getMargin_top(){
        echo "margin-top:".$this->margin_top.";";
    }

    public function loadCss() {
            $this->gadget->loadCss();
        ?>
            <style type="text/css">
                #gadget_<?=$this->id?>{
                    <?
                    $this->getMargin_left();
                    $this->getMargin_top();
                    $this->getZ_index();
                    $this->getPosition();
                    $this->getWidth();
                    $this->getHeight();
                    $this->getMargin_right();
                    $this->getFloat();
                    $this->getMargin_bottom();
                    $this->getBottom();
                    ?>
                    
                }
            </style>
        <?
    }
    public function windowDesign() {
        ?>
            <div id="gadget_<?=$this->id?>">
            <?
                $this->gadget->windowDesign();
            ?>
            </div>
        <?
    }

    public function setGadget(CommonGadget $gadget,$id){
        $this->gadget = $gadget;
        $this->id = $id;
    }
}
?>
