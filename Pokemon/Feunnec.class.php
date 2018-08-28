<?php 

/**
 * 
 */
class Feunnec extends Pokemon
{
	
	public $evol;

	public function __construct($evol)
	{
		$this->evol = $evol;

		if($evol == 0)
		{
			$this->type = 'Feu';
			$this->nom = 'Feunnec';
			$this->pv = 60;
			$this->attaque1 = "<button class='attack' type='submit' name='attaque1'>Griffe</button>";
			$this->attaque2 = "<button class='attack' type='submit' name='attaque1'>Charbon Mutant</button>";
			$this->intensite_attaque1 = 10;
			$this->intensite_attaque2 = 20;
			$this->faiblesse = 'Eau';
			$this->retraite = 1;
			$this->carte = '<button><img src="Feunnec.jpg"></button>';
		}
		elseif ($evol == 1) 
		{
			$this->type = 'Feu';
			$this->nom = 'Roussil';
			$this->pv = 80;
			$this->attaque1 = "<button class='attack' type='submit' name='attaque1'>Souffle-Feu</button>";
			$this->attaque2 = "<button class='attack' type='submit' name='attaque2'>Queue de Flammes</button>";
			$this->intensite_attaque1 = 20;
			$this->intensite_attaque2 = 60;
			$this->faiblesse = 'Eau';
			$this->retraite = 1;
			$this->carte = '<button><img src="Roussil.jpeg"></button>';
		}
		elseif ($evol == 2) 
		{
			$this->type = 'Feu';
			$this->nom = 'Goupelin';
			$this->pv = 140;
			$this->attaque1 = "<button class='attack' type='submit' name='attaque1'>Feu Follet</button>";
			$this->attaque2 = "<button class='attack' type='submit' name='attaque2'>Déflagration</button>";
			$this->intensite_attaque1 = 30;
			$this->intensite_attaque2 = 120;
			$this->faiblesse = 'Eau';
			$this->retraite = 2;
			$this->carte = '<button><img src="Goupelin.jpg"></button>';
		}
	}

}


 ?>