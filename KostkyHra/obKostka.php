<?php
class Kostka {
	private $cislo;
	private $pocetSten;

	public function __construct($pocetSten){
		$this->setPocetSten($pocetSten);
	}

	public function getPocetSten()  {
	return $this->pocetSten;               
	}

	public function setPocetSten($pocetSten) {
		$this->pocetSten = $pocetSten;				 
	}

	public function getCislo()  {
		return $this->cislo;                // tohle chápu jako "v TOMTO objektu, vrať proměnou cislo"
	}

	public function setCislo($cislo) {
		$this->cislo = $cislo;				// tohle nechápu. 
	}

	public function hodKostkou() {
	$this->setCislo(rand(1,$this->getPocetSten()));
	}

}
?>