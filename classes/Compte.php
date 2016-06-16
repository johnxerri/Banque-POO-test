<?php

/**
* Class Compte
*/
class Compte {

	// propriété d'instance ( = objet)
	private $numero_compte;
	private $client;
	public $solde;
	
	function __construct($client, $montant_depot){

		$this->client = $client;

		// Commission initial d'ouverture de compte de 4%:
		$argent_deposer_com = ($montant_depot*0.04);
		$this->solde = $montant_depot -= $argent_deposer_com;

		echo "<p>Vous disposez maintenant de : {$this->solde} $ moins la commission initial d'ouverture de compte de $argent_deposer_com $</p>";
		echo "<hr />";

	}

	// méthodes d'instance
	// retrait
	// depot
	// transfert

	public function depot($montant) {
		echo "<h3>Depot d'argent</h3>";

		$this->solde += $montant;
		$argent_deposer_com = ($montant*0.02);
		echo "<p>Vous avez deposez : $montant $ moins les frais de depot : $argent_deposer_com $</p>";
		$this->solde = $this->solde -= $argent_deposer_com;

		echo "<p>Vous disposez maintenant de : {$this->solde} $</p>";
		echo "<hr />";
		return $this;
	}

	public function retrait($montant) {
		echo "<h3>Retrait d'argent</h3>";

		if($this->solde - $montant >= 0){
			$this->solde -= $montant;
			$argent_retirer_com = ($montant*0.02);
			$this->solde = $this->solde -= $argent_retirer_com;
			return $this;
		} else {
			return false;
		}

	}

	public function transfert($compte, $montant){
		echo "<h3>Transfert d'argent</h3>";

		echo "<p>Votre compte : {$this->solde} $ => Compte 2 : {$compte->solde} $</p>";

		if($this->solde - $montant >= 0 && $montant > 0){

			$this->solde -= $montant;
			$compte->solde += $montant;
			echo "<p><strong style='color:green;'>Transfert reussit depuis votre compte => $montant $ => Vers compte 2</strong></p>";
			echo "<p>Votre compte : {$this->solde} $ => Compte 2 : {$compte->solde} $</p><hr />";

		} else {
			echo "<p>Vous ne pouvez realiser de transfert. <strong style='color:red;'>Montant : $montant $ > Fond dispo : {$this->solde} $</strong>!!</p><hr />";
		}

	}

}