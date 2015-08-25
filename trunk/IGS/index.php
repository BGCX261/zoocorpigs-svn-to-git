<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    require_once("modules/util/view/HomeWindow.php");
    require_once("modules/util/view/GadgetHead.php");
    require_once("modules/util/view/GadgetQuickStart.php");
    require_once("modules/util/view/GadgetLearnMore.php");
    require_once("modules/util/view/GadgetFooter.php");
    require_once("modules/util/view/GadgetFacebook.php");

    $home = new HomeWindow();
    $header = new GadgetHead();
    $Qks = new GadgetQuickStart();
    $learnmore = new GadgetLearnMore();
    $footer = new GadgetFooter();
    $facebook = new GadgetFacebook();
    

    $gadget1 = new WindowGadget();
    $gadget1->setGadget($header, "header");
    $gadget1->setZ_index("10");
    $gadget1->setWidth("99%");
    $gadget1->setHeight("200px");


    $gadget2 = new WindowGadget();
    $gadget2->setGadget($Qks, "qks");
    $gadget2->setMargin_left("px");
    $gadget2->setMargin_top("100px");
    $gadget2->setFloat("right");
    $gadget2->setMargin_right("200px");
    $gadget2->setZ_index("11");
    $gadget2->setWidth("400px");
    $gadget2->setHeight("350px");
    $gadget2->setPosition("relative");

    $gadget3 = new WindowGadget();
    $gadget3->setGadget($learnmore, "learnmore2");
    $gadget3->setMargin_left("430px");
    $gadget3->setMargin_top("35px");
    $gadget3->setZ_index("18");
    $gadget3->setPosition("absolute");
    $gadget3->setWidth("300px");
    $gadget3->setHeight("40px");

    $gadget4 = new WindowGadget();
    $gadget4->setGadget($footer, "footer");
    $gadget4->setHeight("120px");
    $gadget4->setZ_index("18");

    $gadget5 = new WindowGadget();
    $gadget5->setGadget($facebook, "facebook");
    $gadget5->setZ_index("18");
    $gadget5->setPosition("absolute");
    $gadget5->setWidth("300px");
    $gadget5->setHeight("40px");
    $gadget5->setMargin_left("80px");
    $gadget5->setBottom("65px");

    $home->addGadget($gadget1);
    $home->addGadget($gadget2);
    $home->addGadget($gadget3);
    $home->addGadget($gadget4);
    $home->addGadget($gadget5);

    $home->windowDesign();
?>
