<?php 
class Car {
	public $maker;
	public $model;
	public $year;
	public $vin;
	public $type;
	
	protected function getInfo() 
	{
		return "Type: ".$this->type;
	}
	
	protected function setType(string $type)
	{
		$this->type = $type;
	}
}

class PassengerCar extends Car {
	public $complectation;

	function __construct() 
	{
		parent::setType("PassengerCar");
	}
	
	public function getInfo() 
	{
		return parent::getInfo() ." Complectation: " . $this->complectation;
	}
}

class Truck extends Car {
	public $loadCapacity;
	
	function __construct() 
	{
		parent::setType("Truck");
	}

	public function getInfo() 
	{
		return parent::getInfo() ." LoadCapacity: " . $this->loadCapacity;
	}
}

$car1 = new PassengerCar();
$car2 = new Truck();
$car3 = new PassengerCar();

$car1->complectation = "full";

$car2->loadCapacity = "9500";
$car3->complectation = "min";

$arr = [$car1, $car2, $car3]; 

foreach($arr as $car) {
	echo $car->getInfo(). PHP_EOL;
}

?>
