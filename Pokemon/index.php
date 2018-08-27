<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Jeu Pokemon</title>
</head>
<body>



<?php 

ini_set('display_errors', 1);

require 'Pokemon.class.php';
require 'Marisson.class.php';
require 'Grenousse.class.php';
require 'Feunnec.class.php';

echo "Hello";

$Marisson = new Marisson();
$Feunnec = new Feunnec();
$Grenousse = new Grenousse();

$Marisson-> getParams();
$Feunnec-> getParams();
$Grenousse-> getParams();



$tableau = [$Marisson, $Feunnec, $Grenousse];


echo "<h3>Liste des cartes disponibles</h3>";
echo "<div id='tab'>";

foreach ($tableau as $key => $value) 
{
	
	echo "<table><tr><td>". $value->carte. "</td></tr>". 
		"<tr><td>". $value->type. "</td></tr>". 
		"<tr><td>". $value->nom. "</td></tr>". 
		"<tr><td>". $value->pv. "</td></tr>". 
		"<tr><td>". $value->attaque1. "</td></tr>". 
		"<tr><td>". $value->attaque2. "</td></tr>". 
		"<tr><td>". $value->intensite_attaque1. "</td></tr>". 
		"<tr><td>". $value->intensite_attaque2. "</td></tr>". 
		"<tr><td>". $value->faiblesse. "</td></tr>". 
		"<tr><td>". $value->retraite. "</td></tr></table>";
}

echo "</div>";

 ?>


</body>
</html>