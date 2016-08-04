<?php
session_start();
 
use PFBC\Form;
use PFBC\Element;
 
include("PFBC/Form.php");
$form = new Form("html5");

$form->configure(array(
    "prevent" => array("bootstrap", "jQuery")
));

$form->addElement(new Element\HTML('<h2>TimeLine Generator</h2>'));

$form->addElement(new Element\Textbox("Nome da tarefa:", "Required", array(
    "required" => 1, 
    "shortDesc" => ""
)));

$form->addElement(new Element\Date("Date:", "Date"));

$form->addElement(new Element\Date("Date:", "Date"));

$form->addElement(new Element_Button);



$form->render();