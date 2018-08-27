<?php 


/**
 * 
 */
class Grenousse extends Pokemon
{
	

	public function __construct()
	{
		$this->type = 'Eau';
		$this->nom = 'Grenousse';
		$this->pv = 60;
		$this->attaque1 = 'Ecras\'Face';
		$this->attaque2 = 'Goutte à Goutte';
		$this->intensite_attaque1 = 10;
		$this->intensite_attaque2 = 20;
		$this->faiblesse = 'Plante';
		$this->retraite = 1;
		$this->carte = '<img src="Grenousse.jpg">';
	}
}









 ?>