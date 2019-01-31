<?php 
class Car {
	public $maker;
	public $model;
	public $year;
	public $vin;
	public $type;
	
	protected function getInfo() 
	{
		return "Maker: " .$this->maker
		.PHP_EOL."Model: " .$this->model
		.PHP_EOL."Year: " .$this->year
		.PHP_EOL."Vin: " .$this->vin
		.PHP_EOL."Type: " .$this->type;
	}
	
	protected function __construct($maker, $model, $year, $vin, $type) {
		$this->maker = $maker;
		$this->model = $model;
		$this->year = $year;
		$this->vin = $vin;
		$this->type = $type;
	}
}

class PassengerCar extends Car {
	public $complectation;

	function __construct($maker, $model, $year, $vin, $complectation) 
	{
		parent::__construct($maker, $model, $year, $vin, "PassengerCar");
		$this->complectation = $complectation;
	}

	public function getInfo() 
	{
		return parent::getInfo() .PHP_EOL."Complectation: " . $this->complectation;
	}
}

class Truck extends Car {
	public $loadCapacity;
	
	function __construct($maker, $model, $year, $vin, $loadCapacity) 
	{
		parent::__construct($maker, $model, $year, $vin, "Truck");
		$this->loadCapacity = $loadCapacity;
	}

	public function getInfo() 
	{
		return parent::getInfo() .PHP_EOL."LoadCapacity: " . $this->loadCapacity;
	}
}

$car1 = new PassengerCar("Audi","A6Allroad",2003,"WAUZZZ8DZSQAZ","Max");
$car2 = new Truck("Volvo","XC90",2008,"WAUZZZ8DZSQAZ",2500);
$car3 = new PassengerCar("Honda","Accord",2005,"HAUZZZ8DZSQAZ","Premium");

$arr = [$car1, $car2, $car3]; 

foreach($arr as $car) {
	echo $car->getInfo(). PHP_EOL. PHP_EOL;
}

?>
