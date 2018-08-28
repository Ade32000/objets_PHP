<?php 


/**
 * 
 */
class Grenousse extends Pokemon
{
	public $evol;

	public function __construct($evol)
	{
	
		$this->evol = $evol;

		if ($evol == 0) 
		{
			$this->type = 'Eau';
			$this->nom = 'Grenousse';
			$this->pv = 60;
			$this->attaque1 = "<button class='attack' type='submit' name='attaque1'>Ecras'Face</button>";
			$this->attaque2 = "<button class='attack' type='submit' name='attaque2'>Goutte à Goutte</button>";
			$this->intensite_attaque1 = 10;
			$this->intensite_attaque2 = 20;
			$this->faiblesse = 'Plante';
			$this->retraite = 1;
			$this->carte = '<button><img src="Grenousse.jpg"></button>';
		}
		elseif ($evol == 1) 
		{
			$this->type = 'Eau';
			$this->nom = 'Croâporal';
			$this->pv = 80;
			$this->attaque1 = "<button class='attack' type='submit' name='attaque1'>Goutte à Goutte</button>";
			$this->attaque2 = "<button class='attack' type='submit' name='attaque2'>Aqua-Vague</button>";
			$this->intensite_attaque1 = 20;
			$this->intensite_attaque2 = 40;
			$this->faiblesse = 'Plante';
			$this->retraite = 1;
			$this->carte = '<button><img src="Croaporal.jpg"></button>';
		}
		elseif ($evol == 2) 
		{
			$this->type = 'Eau';
			$this->nom = 'Amphinobi';
			$this->pv = 130;
			$this->attaque1 = "<button class='attack' type='submit name='attaque1'>Ombre Suture</button>";
			$this->attaque2 = "<button class='attack' type='submit' name='attaque2'>Tranch'Lune</button>";
			$this->intensite_attaque1 = 40;
			$this->intensite_attaque2 = 60;
			$this->faiblesse = 'Plante';
			$this->retraite = 0;
			$this->carte = '<button><img src="Amphinobi.jpg"></button>';
		}
		
	}

}




 ?>