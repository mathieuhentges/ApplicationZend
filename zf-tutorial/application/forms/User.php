<?php

class Application_Form_User extends Zend_Form
{

    public function init()
    {
    	//formulaire permettant l'ajout des données

    $this->setName('User');

	$email = new Zend_Form_Element_Text('email');
	$email->setLabel('Email')
 	->setRequired(true)
 	->addValidator('EmailAddress',  TRUE  )
 	->addValidator(new Zend_Validate_Db_NoRecordExists(
                array(
                        'field'=>'email',
                        'table'=>'Users'
                        ) )
            )
 	->setAttrib('onchange', '

          if (!(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-z]{2,6}$/.test(email.value))) {
        document.getElementById("email-label").innerHTML="Email invalide";
        document.getElementById("email-label").style.color="rgb(255, 0, 0)";
    } 
    else{document.getElementById("email-label").innerHTML="Email valide";
         document.getElementById("email-label").style.color="rgb(0, 255, 0)";}

 		')
 	->addValidator('NotEmpty');

 
	$nom = new Zend_Form_Element_Text('nom');
	$nom->setLabel('Nom')
 	->setRequired(true)
 	->setAttrib('onblur', '
 		if(nom.value)
		{
        document.getElementById("nom-label").innerHTML="Nom valide";
        document.getElementById("nom-label").style.color="rgb(0, 255, 0)";
    } 
    else{document.getElementById("nom-label").innerHTML="Nom obligatoire";
         document.getElementById("nom-label").style.color="rgb(255, 0, 0)";}

 		')
 	->addValidator('NotEmpty');

	$prenom = new Zend_Form_Element_Text('prenom');
	$prenom->setLabel('Prénom')
 	->setRequired(true)
 	->setAttrib('onblur', '
 		if(prenom.value)
		{
        document.getElementById("prenom-label").innerHTML="Prénom valide";
        document.getElementById("prenom-label").style.color="rgb(0, 255, 0)";
    } 
    else{document.getElementById("prenom-label").innerHTML="Prénom obligatoire";
         document.getElementById("prenom-label").style.color="rgb(255, 0, 0)";}

 		')
 	->addValidator('NotEmpty');

 	$date_naissance = new ZendX_JQuery_Form_Element_DatePicker('date_naissance' );
	$date_naissance->setLabel('Date de naissance (aaaa-mm-jj)')
	->setJQueryParam('dateFormat', 'yy-mm-dd')
	->setJQueryParam('changeYear', 'true')
	->setJqueryParam('changeMonth', 'true')
	->setJqueryParam('yearRange', "1950:2015")
	->setAttrib('onchange', '

          if (!(/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/.test(date_naissance.value))) {
        document.getElementById("date_naissance-label").innerHTML="Date invalide </br> (yyyy-mm-jj)";
        document.getElementById("date_naissance-label").style.color="rgb(255, 0, 0)";
    } 
    else{document.getElementById("date_naissance-label").innerHTML="Date valide";
         document.getElementById("date_naissance-label").style.color="rgb(0, 255, 0)";}

 		')
	->addValidator(new Zend_Validate_Date(
	array(
	'format' => 'yyyy.mm.dd',
	)))
	->setRequired(true);

 
	$submit = new Zend_Form_Element_Submit('submit');
	$submit->setAttrib('id', 'submitbutton');
	$this->addElements(array($email, $nom, $prenom, $date_naissance, $submit));
 

 }
    }




