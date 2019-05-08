<?php
namespace CodeCourse;

class Calculation{
	public $capital;
	public $interestrate;
	public $duration;

	public function __construct($capital, $interestrate, $duration){
		$this->capital = $capital;
		$this->interestrate = $interestrate;
		$this->duration = $duration;

	}
	
	public function totalMoney(){
		return ($this->capital*($this->interestrate/100)*$this->duration)+$this->capital;
	}

	public function paymentPerMonth(){
		return $this->capital*($this->interestrate/100)+($this->capital/$this->duration);
	}
	public function totalInterest(){
		return $this->capital*($this->interestrate/100)*$this->duration;
	}
	
}
		