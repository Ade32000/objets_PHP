<?php 


/**
 * 
 */
class Marisson extends Pokemon
{
	

	public function __construct()
	{
		$this->type = 'Plante';
		$this->nom = 'Marisson';
		$this->pv = 60;
		$this->attaque1 = 'Fouet Lianes';
		$this->attaque2 = 'Canon Graine';
		$this->intensite_attaque1 = 10;
		$this->intensite_attaque2 = 20;
		$this->faiblesse = 'Feu';
		$this->retraite = 1;
		$this->carte = '<img src="Marisson.png">'; 


	}


}









 ?>