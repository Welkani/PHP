<?php

class CompteBancaire {
  private $nom;
  private $solde;

  public function __construct($nom, $solde) {
    $this->nom = $nom;
    $this->solde = $solde;
  }

  public function getNom() {
    return $this->nom;
  }

  public function setNom($nom) {
    $this->nom = $nom;
  }

  public function getSolde() {
    return $this->solde;
  }

  public function setSolde($solde) {
    $this->solde = $solde;
  }

  public function crediter($montant) {
    $this->solde += $montant;
  }

  public function debiter($montant) {
    if ($this->solde >= $montant) {
      $this->solde -= $montant;
    }
  }
}

class LivretA extends CompteBancaire {
  private $tauxInteret;

  public function __construct($nom, $solde , $tauxInteret ) {
    parent::__construct($nom, $solde);
    $this->tauxInteret = $tauxInteret;
  }

  public function getTauxInteret() {
    return $this->tauxInteret;
  }

  public function setTauxInteret($tauxInteret) {
    $this->tauxInteret = $tauxInteret;
  }

  public function calculerInteret() {
    $interet = $this->solde * $this->tauxInteret;
    $this->crediter($interet);
  }
}
?>