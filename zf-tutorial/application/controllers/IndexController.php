<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        //load JQuery
        $this->view->addHelperPath('ZendX/JQuery/View/Helper', 'ZendX_JQuery_View_Helper');

    }

    public function indexAction()
    {
        //on récupère le formulaire
 	    $form = new Application_Form_Search();
 		$form->submit->setLabel('Rechercher');
 		$this->view->form = $form;

 		if ($this->getRequest()->isPost()) {
 		$formData = $this->getRequest()->getPost();
 		if ($form->isValid($formData)) {
 			$email = $form->getValue('email');

 			$Users = new Application_Model_DbTable_Users();
 			$array = $Users->getUser($email);
            
            if($array ==0 ){
                //pas dans la BDD, redirection vers la page d'ajout 
                $this->_helper->redirector('add');
            }
            else{
                //on transmet les données récuperées
                $this->_helper->redirector('display', 'Index', null, $array);
            }

 			}
 		else {
 			$form->populate($formData);
 		}
 		}
 	}

    public function displayAction()
    {
        //on récupère les données transmises 
        $email = $this->_request->getParam("Email");
        $nom = $this->_request->getParam("Nom");
        $prenom = $this ->_request->getParam("Prenom");
        $date_naissance = $this->_request->getParam("date_naissance");
        $insert_date = $this->_request->getParam("insert_date");
        $age = floor( (time() - strtotime($date_naissance)) / 3600 / 24 / 365);

        $data = array(
            'email' => $email,
            'nom' => $nom,
            'prenom' => $prenom,
            'age' => $age,
            'insert_date' => $insert_date,
        );
       
       // on les transmet à la vu
        $form = new Application_Form_Display();
        $this->view->form = $form;
        $form->populate($data);
       

    }

    public function addAction()
    { 

	$form = new Application_Form_User();
 	$form->submit->setLabel('Création ');
 	$this->view->form = $form;
 	
 	if ($this->getRequest()->isPost()) {
 		$formData = $this->getRequest()->getPost();
        // on vérifie si les données sont valides
 		if ($form->isValid($formData)) {
 			$email = $form->getValue('email');
 			$nom = $form->getValue('nom');
 			$prenom = $form->getValue('prenom');
 			$date_naissance = $form->getValue('date_naissance');
 			
 			$Users = new Application_Model_DbTable_Users();
 			$Users->addUser($email, $nom, $prenom, $date_naissance, date('o-m-d'));
 
 			$this->_helper->redirector('index');
 	} else {

 		$form->populate($formData);
 		}
 	}
 }

}









