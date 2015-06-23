<?php
 include('/class/User.php');
 include "/class/dbConnect.php";
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
	<?php
	if (!empty($_GET['username'])) {
		$userAdd = new users;
		$userAdd->AddUsers();
		echo "<p class=\"text\">L'utilisateur ".$_GET['firstname']." a bien été ajouté</p>";
		echo "<a href=\"users.php\" class=\"btn\">back</a>"; 
	}else{

	?>	
		<form action="users.php" method="get" class="basic-grey">

			<h1>Ajout d'utilisateur</h1>
			<label>Prénom<label>
			<input type="text" name="firstname" value="">

			<label>Nom<label>
			<input type="text" name="name" value="">

			<label>Pseudo (obligatoire)<label>
			<input type="text" name="username" value="">
			<br/>
			<input type="submit" class="button" value="Ajouter un utilisateur">

		</form>
		<br/><br/><br/><br/>
		<form action="/Test/php/suppr.php" method="get">

			<h1>Effacer un utilisateur</h1>

			<label>Quel utilisateur supprimé ?<label>
			<input type="text" name="username" value="Pseudo?">

			<input type="submit" class="button" name="suppression" value="X">

		</form>
		<div> Liste des utilisateurs par pseudo :  </div>
		<?php
			/* Ici je veux afficher mes articles*/
			foreach($myCo->GetMyUsers() as $user){
				//afficher article
                echo "<div>" . $user["UserName"]."</div>";
			}
		?>
		<br/><a href="index.php" class="button">Retour à l'index</a>
	<?php
	}	
	?>
	</body>
</html>