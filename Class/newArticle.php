<?php
	public class newArticle
	{
		/* On se connecte � la base */
		private $_connect = null;
		private $_pass = "";
		private $_user = "root";
		private $_type = "mysql";
		private $_path = "127.0.0.1";
		
		/* Ouverture du constructeur */
		public __construct()
		{
			$const->_connect = new PDO($const->_type . ":" . $const->_path,$const->_user, const->_pass);
		}
		
		/* Ajout d'un article */
		public AddArticle(){
			$const->_connect->query("Select * FROM `articles`");
			
			echo "<form method="post">
				<p>Titre de l'article:</p>
				<input type="titre" name="Titre" />
				<br>
				<p>Article:</p>
				<input type="article" name="Article" />
				<br><br>
				<input type="submit" value="Validate" />
			</form>"
			
			$Titre=$_POST['Titre'];
			$Article=$_POST['Article'];
			$Validate=false;
			
			//On ajoute les nouvelles donn�es
			/*
			
			try
			{
				$pdo = new PDO('mysql:host=localhost;dbname=mybase', 'root', '');
			}
			catch(Exception $e)
			{
				echo 'Echec de la connexion � la base de donn�es';
				exit();
			}
			
			*/
			// Attention, bien v�rifier que la donn�e ID est r�gl�e pour �tre en auto-incr�mentation!!!
			
			$req=$pdo->prepare('INSERT INTO user (Id, Name, FirstName, Mail, Address, Username, Pass, Validate) VALUES (:Id, :Name, :FirstName, :Mail, :Address, :Username, :Pass, :Validate)');
				
			$req->execute(array(
				"Id" => null,
				"Name" => $Name,
				"FirstName" => $FirstName,
				'Validate' => $Validate,
			));
		}
	}