<?php
	class commande
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

		function Addcommande(){
			try 
			{
				$req = $this->_connect->prepare('INSERT INTO articles(Marque, Produit, prix) VALUES (:Marque, :produit, :prix)');

				$req->execute(array(
					'Marque' => $_GET['marque'],
					'Produit' => $_GET['Produit'],
					'Prix' => $_GET['Prix'],
					));
				echo "Lamarque ".$_GET['produit']." a bien été ajouté";
			} 
				catch (Exception $e) 
				{
					echo die('Erreur :'.$e->getMessage());
				} 
			
		}
	}
?>