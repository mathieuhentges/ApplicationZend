<?php
//Connection avec la bdd

class Application_Model_DbTable_Users extends Zend_Db_Table_Abstract
{

    protected $_name = 'Users';


    public function getUser($email)
	{
		// récuparation des données grâce à l'adresse email

		$row = $this->fetchRow("email = '$email'");
		if (!$row) {
			echo 'a';
			return 0;
		}
		return $row->toArray();
			
		
	}
	
	public function addUser($email, $nom, $prenom, $date_naissance, $insert_date)
		{


			$add = $_SERVER['REMOTE_ADDR'];

			//insertion en base 

			$data = array(
			'email' => $email,
			'nom' => $nom,
			'prenom' => $prenom,
			'date_naissance' => $date_naissance,
			'insert_date' => $insert_date,
			'ip' => $add,
		);
	$this->insert($data);
	}


}

