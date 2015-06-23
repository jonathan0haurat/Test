<?php

	class article
	{
		private $_connect = null;
		private $_pass = "";
		private $_user = "root";
		private $_type = "mysql";
		private $_path = "127.0.0.1";
		private $_dbName = "base";

		function __construct()
		{		
			$this->_connect = new PDO($this->_type . ":host=" . $this->_path.";dbname=".$this->_dbName ,$this->_user, $this->_pass);
		}

		function AddArticle(){
			try 
			{
				$req = $this->_connect->prepare('INSERT INTO article(titre,article,validate) VALUES (:titre,:article,:validate)');

				$req->execute(array(
					'titre' => $_GET['titre'],
					'article' => $_GET['article'],
					'validate' => $_GET['validate']
					));
				echo "L'article ".$_GET['titre']." a bien été ajouté";
			} 
				catch (Exception $e) 
				{
					echo die('Erreur :'.$e->getMessage());
				} 
			}
	}