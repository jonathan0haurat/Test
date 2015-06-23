<?php

 include('/Class/newArticle.php');

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
	if (!empty($_GET['titre']) AND !empty($_GET['article'])) {
		$newArticle = new article;
		$newArticle->newArticle();
		echo '<br/><a href="articles.php">back</a>'; 
	}else{

	?>
		<form action="articles.php" method="get">

			<legend>Ajouter un article</legend>

			<label>Titre<label>
			<input type="text" name="titre" value="">

			<label>Article<label>
			<input type="text" name="article" value="">
			<!--
			<label>Auteur<label>
			<input type="text" name="auteur" value="">
			-->
			<br/>
			<input type="submit" value="Ajouter un article">

		</form>

		<br/><br/>
		<!--
		<form action="/Test/php/suppr.php" method="get">

			<legend>Remove User</legend>

			<label>Quel article ?<label>
			<input type="text" name="firstname" value="">

			<input type="submit" name="suppression" value="X">

		</form>
		-->
	<?php
	}	
	?>
	</body>
</html>