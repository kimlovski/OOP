<?php
	require_once("obKostka.php");
	require_once("obHrac.php");

	class Game {
		private $pocetHracu;
		private $pocetKol;
		private $players;
		private $velikostKostky;
		private $pocetKostek;

		public function __construct($names, $pocetKol, $velikostKostky, $pocetKostek){
			$this->setPocetKol($pocetKol);
			$this->setVelikostKostky($velikostKostky);
			$this->setPocetKostek($pocetKostek);
			$players = [];
			foreach($names as $name) {
				$players[] = new Hrac($name); 
			}
			$this->setPlayers($players);
		}

		public function setPocetHracu($pocetHracu) {
			$this->pocetHracu = $pocetHracu;
		}

		public function getPocetHracu(){
			return $this->pocetHracu;
		}

		public function setPocetKol($pocetKol) {
			$this->pocetKol = $pocetKol;
		}

		public function getPocetKol(){
			return $this->pocetKol;
		}

		public function setPlayers($players) {
			$this->players = $players;
		}

		public function getPlayers(){
			return $this->players;
		}

		public function setVelikostKostky($velikostKostky) {
			$this->velikostKostky = $velikostKostky;
		}

		public function getVelikostKostky(){
			return $this->velikostKostky;
		}

		public function setPocetKostek($pocetKostek) {
			$this->pocetKostek = $pocetKostek;
		}

		public function getPocetKostek(){
			return $this->pocetKostek;
		}

		public function startGame(){
			$kostky = [];
			$pocetKol = $this->getPocetKol();
			$players = $this->getPlayers();
			$velikostKostky = $this->getVelikostKostky();
			$pocetKostek= $this->getPocetKostek();

			for ($i=1; $i<=$pocetKostek; $i++){
				$kostky[] = new Kostka($velikostKostky);
			}

			foreach ($players as $player) {
				for($i=0; $i<=$pocetKostek-1; $i++){
					$kostky[$i]->hodKostkou();
					echo $kostky[$i]->getCislo()."<br>";
				}
			}

		}
		public function vyhodnotHru(){

		}

		
	}
?>