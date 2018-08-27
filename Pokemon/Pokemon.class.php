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

	public function getParams()
	{
		$params = array(
			"nom"=> $this->nom,
			"type"=>  $this->type,
			"pv"=> $this->pv,
			"attaque1"=> $this->attaque1,
			"attaque2"=>  $this->attaque2,
			"intensite_attaque1"=> $this->intensite_attaque1,
			"intensite_attaque2"=> $this->intensite_attaque2,
			"faiblesse"=> $this->faiblesse,
			"retraite"=>  $this->retraite,
			"carte"=> $this->carte
		);
		return $params;
	}


	
	
}

 ?>