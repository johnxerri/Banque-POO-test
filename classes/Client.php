<?php

/**
* Class Client
*/
class Client {

	// propriété d'instance ( = objet)
	private $numero_client;
	protected $civilite;
	protected $nom;
	protected $prenom;
	protected $argent_dispo;
	
	function __construct($civilite, $nom, $prenom) {
		$this->numero_client = uniqid();
		$this->civilite = $civilite;
		$this->nom = $nom;
		$this->prenom = $prenom;

		echo "<h3>Nouveau Client</h3>";
		echo "<p>Votre numéro de client : {$this->numero_client}</p>";
		if($this->civilite == 'm'){
			echo "<p style='color:blue;'>Bienvenue Mr {$this->nom} {$this->prenom} !</p>";
		} else {
			echo "<p style='color:pink;'>Bienvenue Mme {$this->nom} {$this->prenom} !</p>";
		}

	}

	// Posibiliter de modifier le nom
	public function changerLeNom($new_name) {

		echo "<h3>Modification de nom</h3>";

		echo "<p>De : {$this->nom} - ";
		$this->nom = $new_name;
		echo "A : {$this->nom} </p>";

		if($this->civilite == 'm'){
			echo "<p style='color:blue;'>Vous etes desormais Mr {$this->nom} {$this->prenom} !</p>";
		} else {
			echo "<p style='color:pink;'>Vous etes desormais Mme {$this->nom} {$this->prenom} !</p>";
		}
		echo "<hr />";

	}

}