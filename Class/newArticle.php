<?php
	public class newArticle
	{
		/* On se connecte à la base */
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
			
			//On ajoute les nouvelles données
			
			$req=$pdo->prepare('INSERT INTO articles (Id, Titre, Article, Validate) VALUES (:Id, :Titre, :Article, :Validate)');
				
			$req->execute(array(
				"Id" => null,
				"Titre" => $Titre,
				"Article" => $Article,
				'Validate' => $Validate,
			));
		}
	}