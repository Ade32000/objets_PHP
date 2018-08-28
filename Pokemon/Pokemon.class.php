<?php 

/**
 * 
 */
class Pokemon
{
	
	public $type;
	public $nom;
	public $pv;
	public $attaque1;
	public $attaque2;
	public $intensite_attaque1;
	public $intensite_attaque2;
	public $faiblesse;
	public $retraite;
	public $carte;

	// public function getParams()
	// {
	// 	$params = array(
	// 		"nom"=> $this->nom,
	// 		"type"=>  $this->type,
	// 		"pv"=> $this->pv,
	// 		"attaque1"=> $this->attaque1,
	// 		"attaque2"=>  $this->attaque2,
	// 		"intensite_attaque1"=> $this->intensite_attaque1,
	// 		"intensite_attaque2"=> $this->intensite_attaque2,
	// 		"faiblesse"=> $this->faiblesse,
	// 		"retraite"=>  $this->retraite,
	// 		"carte"=> $this->carte
	// 	);
	// 	return $params;
	// }

	public function Display()
	{
		echo "<form action='index.php' method='POST'><table class='display'><tr><td>". $this->carte. "</td></tr>".
		// "<tr><td><b>Type : </b>". $this->type. "</td></tr>". 
		// "<tr><td><b>Nom : </b>". $this->nom. "</td></tr>". 
		// "<tr><td><b>PV : </b>". $this->pv. "</td></tr>". 
		"<tr><td>". $this->attaque1. "</td></tr>". 
		"<tr><td>". $this->attaque2. "</td></tr>". 
		/*"<tr><td><b>Intensité attaque 1 : </b>". $this->intensite_attaque1. "</td></tr>". 
		"<tr><td><b>Intensité attaque 2 : </b>". $this->intensite_attaque2. "</td></tr>". 
		"<tr><td><b>Faiblesse : </b>". $this->faiblesse. "</td></tr>". 
		"<tr><td><b>Retraite : </b>". $this->retraite. "</td></tr>*/"</table></form>"; 

	}

	// public function Attaque($pk1, $pk2)
	// {
	// 	$this->attaque1 = 1;
	// 	$this->attaque2 = 2;


	// 	if($pk1 == )
	// }


	
	
}

 ?>