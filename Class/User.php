<?php

	class users
	{
		// Connexion à la base de donnée
		private $_connect = null;
		private $_pass = "";
		private $_user = "root";
		private $_type = "mysql";
		private $_path = "127.0.0.1";
		private $_dbName = "base";

		// Constructeur
		function __construct()
		{		
			$this->_connect = new PDO($this->_type . ":host=" . $this->_path.";dbname=".$this->_dbName ,$this->_user, $this->_pass);
		}

		// Method pour ajouter des utilisateurs
		function AddUsers(){
			try 
			{
				$req = $this->_connect->prepare('INSERT INTO users(firstname,name,username) VALUES (:firstname,:name,:username)');

				$req->execute(array(
					'firstname' => $_GET['firstname'],
					'name' => $_GET['name'],
					'username' => $_GET['username']
					));
			} 
				catch (Exception $e) 
				{
					echo die('Erreur :'.$e->getMessage());
				} 
			}

		// Method pour supprimer des utilisateurs
		function RemoveUsers(){
			$req = $this->_connect->prepare('DELETE FROM users WHERE firstname = ?');
			$req->execute(array($_GET['firstname']));
		}
	}