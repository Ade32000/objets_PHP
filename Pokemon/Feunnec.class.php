<?php 



/**
 * 
 */
class Feunnec extends Pokemon
{
	
	public function __construct()
	{
		$this->type = 'Feu';
		$this->nom = 'Feunnec';
		$this->pv = 60;
		$this->attaque1 = 'Griffe';
		$this->attaque2 = 'Charbon Mutant';
		$this->intensite_attaque1 = 10;
		$this->intensite_attaque2 = 20;
		$this->faiblesse = 'Eau';
		$this->retraite = 1;
		$this->carte = '<img src="Feunnec.jpg">';
	}
}






 ?>