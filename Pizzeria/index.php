<?php 

require 'Pizza.class.php';
require 'Boisson.class.php';
require 'Dessert.class.php';
require 'Client.class.php';
require 'Commande.class.php';
echo "hello";

$p1 = new Pizza('4 fromages', 8 , 150, ['chèvre','gruyère','mozarella','bleu']);
$p2 = new Pizza('Classique' , 6 , 100, ['jambon','gruyère','tomate','olives']);
$p3 = new Pizza('Poulet', 7, 200, ['poulet','gruyère','tomate','oignons']);

$liste_pizzas = [$p1,$p2,$p3];
var_dump($liste_pizzas);

echo '<h3>Liste des pizzas : <br />';
echo '<table><thead><th>Désignation</th><th>Ingrédients</th><th>Prix</th><th>Valeur nutritive</th></thead>';

foreach ($liste_pizzas as  $key => $value) 
{
	
echo '<tr><td>' . $value->designation . '</td><td>' ;

	for ($i=0; $i < count($value->ingredients); $i++) 
	{ 
		echo $value->ingredients[$i].' ';	
	}
	
 echo '</td><td>' . $value->prix . '</td><td>' . $value->valeur_nutritive . '</td></tr>';

}

echo '</table>'

 ?>
