<?php
include "class/dbConnect.php";
	class newArticle
	{
		public __construct()
		{
			$this->_connect = new PDO($this->_type . ":" . $this->_path,$this->_user, this->_pass);
		}
		
		/* Ajout d'un article */
		public AddArticle(){
			$this->_connect->query("Select * FROM `articles`");
			
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