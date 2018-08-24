<?php 

/**
 * 
 */
class Boisson
{
	public $designation;
	public $prix;
	public $valeur_nutritive;
	public $ingredients = [];

	public function __construct($designation, $prix, $valeur_nutritive, $ingredients)
	{
		$this->designation = $designation;
		$this->prix = $prix;
		$this->valeur_nutritive = $valeur_nutritive;
		$this->ingredients = $ingredients;
	}

}












 ?>