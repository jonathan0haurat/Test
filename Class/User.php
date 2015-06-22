<?php
	include "class/dbConnect.php";
	class users
	{
		private $_firstname = "test1";

		private $_dbCo = null;

		function __construct()
		{		
			$this->_dbCo = new dbConnect();
		}

		function AddUsers(){

			// $bdd = new PDO('mysql:host=localhost;dbname=base;charset=utf8', 'root', '');

			$req = $this->_dbCo->prepare('INSERT INTO users(firstname) VALUES (:firstname)');

			$req->execute(array(
				'firstname' => $this->_firstname
				));
		}
	}