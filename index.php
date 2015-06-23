<?php
 include "class/dbConnect.php";
 include "class/newArticle.php";
 include "class/commande.php";
 
 $myCo = new dbConnect();
?>

<!doctype html >
<html>
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="Css/index.css" />
        <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	</head>
	<body>
		<p><a href="users.php">Gestion d'utilisateur</a></p>
		<div> Users </div>
		<?php
			/* Ici je veux afficher mes articles*/
			foreach($myCo->GetMyUsers() as $user){
				//afficher article
                echo "<div>" . $user["UserName"]."</div>";
			}
		?>
		<p><a href="articles.php">Gestion des articles</a></p>
		<div> Articles </div>
		<?php
			/* Ici je veux afficher mes articles*/
            foreach($myCo->GetMyArticles() as $article){
				echo "<div>" . $article["Titre"]."</div>"; //afficher article
            }		
		?>
		
		<p><a href="commande.php">Gestion des commandes</a></p>
		<div> Commande </div>
		<?php
			/* Ici je veux afficher mes commandes*/
			foreach($myCo->Getcommand() as $user){
				//afficher commande
                echo "<div>" . $user["commande"]."</div>";
			}
		?>
		
	</body>
</html>