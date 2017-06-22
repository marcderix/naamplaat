<?php

// NAAMPLAAT PROJECT
// Author: Marc Derix
// Version: 0.1

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if($_SERVER['REQUEST_METHOD'] == 'POST') {
	echo 'submitted <br>';

	//voornaam en achternaam, zonder cijfers of leestekens
	$pattern = '/\d*\W+/';
	// needle, replacement, haystack
	$firstname = preg_replace($pattern,'', htmlspecialchars($_POST["firstname"]));
	$lastname = preg_replace($pattern,'', htmlspecialchars($_POST["lastname"]));

	$fullname  = $firstname.$lastname;
	$nameArray = str_split($fullname);

	 print_r($nameArray);

	 foreach ($nameArray as $character) {
		 echo '<br>We hebben een '. $character;
	 }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Naamplaat</title>
	<style media="screen">
	* {
		font-family: sans-serif;
	}
	</style>
</head>
<body>
	<h1>Naamplaat</h1>
	<form class="naamplaat-form" method="post">
		<label>Firstname
			<input type="text" name="firstname" value="">
		</label>
		<label>Lastname
			<input type="text" name="lastname" value="">
		</label>
		<input type="submit" name="make-image" value="Create image">
	</form>
</body>
</html>
