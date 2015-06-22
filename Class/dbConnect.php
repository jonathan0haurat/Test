<?php
	class dbConnect
	{
		/*
		 * Connexion PDO.
		 */
		private $_connect = null;
		
		/*
		 * Mot de passe de la base SQL.
		 */
		private $_pass = "";
		
		/*
		 * Utilisateur de la base SQL.
		 */
		private $_user = "root";
		
		/*
		 * Type de base utilisée.
		 */
		private $_type = "mysql";
		
		/*
		 * Chemin de la base de données.
		 */
		private $_path = "127.0.0.1";
		
		/*
		 * Nom de ma base de données.
		 */
		private $_dbName = "base";
		
		/*
		 * Constructeur
		 */
		function __construct()
		{
			$this->_connect = new PDO($this->_type . ":host=" . $this->_path.";dbname=".$this->_dbName ,$this->_user, $this->_pass);
		}
		
		/* 
		 * Get my articles from database 'articles'.
		 */
		function GetMyArticles(){
			$result = $this->_connect->query("Select * FROM `articles`");

			return $result->fetchAll();
		}
		
		/*
		 * Get my users from database 'users'.
		 */
		function GetMyUsers(){
			$result = $this->_connect->query("Select * FROM `users`");

			return $result->fetchAll();
		}
	}