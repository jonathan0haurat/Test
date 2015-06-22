<?php
 include "class/dbConnect.php";
 $myCo = new dbConnect();
?>
<!doctype html >
<html>
	<head>
		<title></title>
	</head>
	<body>
		<div> Articles </div>
		<?php
			/* Ici je veux afficher mes articles*/
			
			foreach($article in $dbConnect->GetMyArticles()){
				//afficher article
			}
		?>
		<div> Users </div>
		
		<?php
			/* Ici je veux afficher mes articles*/
			
			foreach($article in $dbConnect->GetMyUsers()){
				//afficher article
			}
		?>
	</body>
</html>