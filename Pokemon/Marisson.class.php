<?php 


/**
 * 
 */
class Marisson extends Pokemon
{
	
	public $evol;

	public function __construct($evol)
	{

		$this->evol = $evol;

		if ($evol == 0) 
		{
			$this->type = 'Plante';
			$this->nom = 'Marisson';
			$this->pv = 60;
			$this->attaque1 = "<button class='attack' type='submit' name='attaque1'>Fouet Lianes</button>";
			$this->attaque2 = "<button class='attack' type='submit' name='attaque2'>Canon Graine</button>";
			$this->intensite_attaque1 = 10;
			$this->intensite_attaque2 = 20;
			$this->faiblesse = 'Feu';
			$this->retraite = 1;
			$this->carte = '<button><img src="Marisson.png"></button>'; 
		}
		elseif ($evol==1)
		{
			$this->type = 'Plante';
			$this->nom = 'Boguérisse';
			$this->pv = 90;
			$this->attaque1 = "<button class='attack' type='submit' name='attaque1'>Vampigraine</button>";
			$this->attaque2 = "<button class='attack' type='submit' name='attaque2'>Poing Dard</button>";
			$this->intensite_attaque1 = 20;
			$this->intensite_attaque2 = 50;
			$this->faiblesse = 'Feu';
			$this->retraite = 2;
			$this->carte = '<button><img src="Boguerisse.jpg"></button>';
		}
		elseif ($evol==2) 
		{
			$this->type = 'Plante';
			$this->nom = 'Blindépique';
			$this->pv = 150;
			$this->attaque1 = "<button class='attack' type='submit' name='attaque1'>Poing Dard</button>";
			$this->attaque2 = "<button class='attack' type='submit' name='attaque2'>Attaque Trébuchante'</button>";
			$this->intensite_attaque1 = 50;
			$this->intensite_attaque2 = 80;
			$this->faiblesse = 'Feu';
			$this->retraite = 4;
			$this->carte = '<button><img src="Blindepique.jpeg"></button>';
		}
	}

}



 ?>