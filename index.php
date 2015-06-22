<?php
 include "class/dbConnect.php";
 $myCo = new dbConnect();
?>

<!doctype html >
<html>
	<head>
		<title></title>
        <link rel="stylesheet" href="Css/index.css" />
	</head>
	<body>
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