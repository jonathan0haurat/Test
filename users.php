<?php
 include('/class/User.php');
?>
<!doctype html >
<html>
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="Css/index.css" />
        <!-- live reload -->
        <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	</head>
	<body>
	<?php
	// Test si les champs de formulaire sont remplis
	if (!empty($_GET['firstname']) && !empty($_GET['name']) && !empty($_GET['username'])) {
	// Appel l'objet users
		$userAdd = new users;
		$userAdd->AddUsers();
		echo "<p class=\"text\">L'utilisateur ".$_GET['firstname']." a bien été ajouté</p>";
		echo '<a href="users.php" class="btn">back</a>'; 
	}else{

	?>
	<!-- Formulaire d'ajout d'utilisateurs -->
		<form action="users.php" method="get" class="basic-grey">

			<h1>Ajout d'utilisateur</h1>

			<label>Prénom<label>
			<input type="text" name="firstname" value="">

			<label>Nom<label>
			<input type="text" name="name" value="">

			<label>Pseudo<label>
			<input type="text" name="username" value="">
			<br/>
			<input type="submit" class="button" value="Ajouter un utilisateur">

		</form><br/><br/><br/><br/>

		<!-- Formulaire de suppression d'utilisateurs -->
		<form action="/Test/php/suppr.php" method="get">

			<h1>Effacer un utilisateur</h1>

			<label>Quel utilisateur supprimé ?<label>
			<input type="text" name="firstname" value="Prénom?">

			<input type="submit" class="button" name="suppression" value="X">

		</form>
	<?php
	}	
	?>
	</body>
</html>