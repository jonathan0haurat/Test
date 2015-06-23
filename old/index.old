<?php
 include "class/dbConnect.php";
 include "class/newArticle.php";
 $myCo = new dbConnect();
?>

<!doctype html >
<html>
	<head>
		<title></title>
        <link rel="stylesheet" href="Css/index.css" />
        <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	</head>
	<body>
		<p><a href="users.php">Gestion d'utilisateur</a></p>
		<div> Articles </div>
		<?php
			/* Ici je veux afficher mes articles*/
            foreach($myCo->GetMyArticles() as $article){
                //afficher article
                echo "<div class='article'>";
                echo "<div class='titleArticle'>" . $article["title"]."</div>";
                echo "<div class='contentArticle'>" . $article["content"]."</div>";
                echo "</div>";
            }
			/* Et ici, le lien pour créer un nouvel article */
			
		?>
		<div> Users </div>
		
		<?php
			/* Ici je veux afficher mes articles*/
			foreach($myCo->GetMyUsers() as $user){
				//afficher article
                echo "<div>" . $user["mail"]."</div>";
			}
		?>
	</body>
</html>