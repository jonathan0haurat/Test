<?php
 // include "../Class/dbConnect.php";
 // include "../Class/User.php";
 include('/Class/User.php');
 // $myCo = new dbConnect();
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
	if (!empty($_GET['firstname']) && !empty($_GET['name']) && !empty($_GET['username'])) {
		$userAdd = new users;
		$userAdd->AddUsers();
		echo '<br/><a href="users.php">back</a>'; 
	}else{

	?>
		<form action="users.php" method="get">

			<legend>Users</legend>

			<label>FirstName<label>
			<input type="text" name="firstname" value="">

			<label>Name<label>
			<input type="text" name="name" value="">

			<label>UserName<label>
			<input type="text" name="username" value="">
			<br/>
			<input type="submit" value="Ajouter un utilisateur">

		</form>
	<?php
	}	
	?>
	</body>
</html>