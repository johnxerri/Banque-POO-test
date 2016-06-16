<?php
class Banque {
	// propriété d'instance ( = objet)
	protected $compte;
	protected $nbDePlaces;

	// propriété de classe
	public static $langue;

	function __construct($nb_roues, $nb_places) { //constructeur
		$this->nbDeRoues = $nb_roues;
		$this->nbDePlaces = $nb_places;
	}

	protected function nombreDeRoues() {
		echo "<p>Nombre de roues : " . $this->nbDeRoues . "</p>";
	}

	protected function nombreDePlaces() {
		echo "<p>Nombre de places : " . $this->nbDePlaces . "</p>";
	}

	public static function afficheLangue(){
		echo '<strong style="color:red">Langue : ' . self::$langue . '</strong>';
	}

}