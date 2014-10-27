<?php

//Formulaire qui sert à afficher les données de l'utilisateur recherché

class Application_Form_Display extends Zend_Form
{

    public function init()
    {
        $this->setName('Display');

	$email = new Zend_Form_Element_Text('email');
	$email->setLabel('Email');
 
	$nom = new Zend_Form_Element_Text('nom');
	$nom->setLabel('Nom');


	$prenom = new Zend_Form_Element_Text('prenom');
	$prenom->setLabel('Prénom');

	$age = new Zend_Form_Element_Text('age');
	$age->setLabel('Âge');

	$insert_date = new Zend_Form_Element_Text('insert_date');
	$insert_date->setLabel('Date de création');


	$this->addElements(array($email, $nom, $prenom, $age ,$insert_date));
 }


}

