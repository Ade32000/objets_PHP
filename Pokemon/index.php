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

$Marisson = new Marisson(1);
$Feunnec = new Feunnec(1);
$Grenousse = new Grenousse(1);

echo "<h1>POKEMON</h1>";
echo "<h3>Cartes disponibles</h3>";
echo "<div id='tab'>";

$Marisson-> Display();
$Feunnec-> Display();
$Grenousse-> Display();



echo "</div>"


 ?>

 	<script type="text/javascript" src="jquery.min.js"></script>

<script>

	

</script>
 
</body>
</html>