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
				$req = $this->_connect->prepare('INSERT INTO articles(Titre, article, auteur) VALUES (:Titre, :article, :auteur)');

				$req->execute(array(
					'Titre' => $_GET['Titre'],
					'article' => $_GET['article'],
					'auteur' => $_GET['auteur'],
					));
				echo "L'article ".$_GET['Titre']." a bien été ajouté";
			} 
				catch (Exception $e) 
				{
					echo die('Erreur :'.$e->getMessage());
				} 
			}
	}