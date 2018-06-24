<?php
class Hrac {
	private $score;
	private $name;

	public function __construct($name) {
		$this->setName($name);
	}

	public function getScore() {
		return $this->score;
	}

	public function setScore($score) {
			$this->score = $score;				 
		}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;				 
	}

	public function zvysSkore(){
		$this->setScore($this->getScore++);
	}

	public function vynulujSkore() {
		$this->setScore(0);
	}

	}
?>