<?php
include('../Class/User.php');
$userDel = new users;
$userDel->RemoveUsers();
header('Location: /Test/users.php');
?>


