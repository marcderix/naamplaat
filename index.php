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

	// voeg voornaam en achternaam samen tot volledige naam, maak er een array van.
	$fullname  = $firstname.$lastname;
	$nameArray = str_split($fullname);
	$alphabet = range('A','Z');

	 print_r($nameArray);

	 // loop door de volledige naam array heen
	 foreach ($nameArray as $index => $character) {
		echo '<br>Dit is de ' . $index . 'e letter in de volledige naam <br>';
		// $UpperChar = uppercase van $character
		$UpperChar = ucfirst($character);;
		// isUppercase = is $UpperChar gelijk aan $character?
		$isUpperCase = $UpperChar === $character;
		// indexInAlphabet = zoek in alfabet naar dit karaker
		$indexInAlphabet = array_search($UpperChar, $alphabet);
		echo 'Dit is de ' . $indexInAlphabet . 'e letter in het alfabet <br><br>';
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
