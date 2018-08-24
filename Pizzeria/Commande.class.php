<?php 


/**
 * 
 */
class Commande
{
	public $numero;

	public function __construct($numero)
	{
		$this->numero = $numero;
	}


	public function Commande_complete()
	{
		echo 'Voici le récapitulatif de votre commande numéro : ' . $this->$numero . ' <br /> - ' . Pizza() .'<br /> - ' . Boisson() . '<br /> - ' . Dessert();
	}
	
}







 ?>