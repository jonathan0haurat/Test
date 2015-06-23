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
	if (!empty($_GET['Titre']) AND !empty($_GET['article'])) {
		$newArticle = new article; //on lance une nouvelle instance de la classe article
		$newArticle->AddArticle(); //on appelle la fonction AddArticle de la classe article
		echo '<br/><a href="articles.php">back</a>'; 
	}else{

	?>
		<form action="articles.php" method="get">

			<legend>Ajouter un article</legend>

			<label>Titre<label>
			<input type="text" name="Titre" value="">

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
	
	<?php
	}	
	?>
	</body>
</html>