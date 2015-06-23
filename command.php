<?php

 include('/Class/commande.php');

?>
<!doctype html >
<html>
	<head>
		<title></title>
        <link rel="stylesheet" href="Css/index.css" />
        <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	</head>
	<body>
	<?php
	if (!empty($_GET['Titre']) AND !empty($_GET['command'])) {
		$newcommand = new command; //on lance une nouvelle instance de la classe command
		$newArticle->AddArticle(); //on appelle la fonction AddArticle de la classe command
		echo '<br/><a href="command.php">back</a>'; 
	}else{

	?>
		<form action="commande.php" method="get">

			<legend>Ajouter une commande</legend>

			<label>Marque<label>
			<input type="text" name="Marque" value="">

			<label>Produit<label>
			<input type="text" name="Produit" value="">

			<label>Prix<label>
			<input type="text" name="Prix" value="">

			<br/>
			<input type="submit" value="Ajouter une commande">

		</form>

		<br/><br/>
	
	<?php
	}	
	?>
	</body>
</html>