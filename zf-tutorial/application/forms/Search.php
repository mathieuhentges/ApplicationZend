<?php


// Formulaire de la page d'accueil permetant de rediriger sur les autres pages 

class Application_Form_Search extends Zend_Form
{

    public function init()
    {
	$this->setName('Search');

	$email = new Zend_Form_Element_Text('email');
	$email->setLabel('Email')
 	->setRequired(true)
 	->addValidator('NotEmpty');

 	$submit = new Zend_Form_Element_Submit('submit');
	$submit->setAttrib('id', 'submitbutton');
	$this->addElements(array($email, $submit));

    }


}
?>
