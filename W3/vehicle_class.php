<?php
class LandVehicle{
	private $manufacturer;
	private $country;
	private $type;
	private $model;
	private $launchYear;
	private	$price;
	private $image;	
	
	public function __construct($manufacturer, $country, $type, $model, $launchYear, $price, $image){
		$this->manufacturer = $manufacturer;
		$this->country = $country;
		$this->type = $type;
		
		$this->model = $model;
		$this->launchYear = $launchYear;
		$this->price = $price;
		$this->image = $image;
	}
	
	public function __get($var){
		return $this->$var;
	}
	
	public function __set($var, $val){
		$this->$var = $val;
	}
	
}
class Motorized extends LandVehicle{
		private $engine, $fuel, $topsSpeed, $economy,$power, $fuelCapacity;
		
	public function __construct($manufacturer, $country, $type, $model, $launchYear, $price, $image,
								$engine,$fuel,$topsSpeed, $economy,$power,$fuelCapacity,$torque){
			
		parent::__construct($manufacturer, $country, $type, $model, $launchYear, $price, $image);
		$this->engine = $engine;
		$this->fuel = $fuel;
		$this->topsSpeed = $topsSpeed;
		$this->economy = $economy;
		$this->power = $power;
		$this->fuelCapacity = $fuelCapacity;
		
		$this->torque = $torque;
	}
	
	public function __get($var){
		if(preg_match('/manufacturer|country|type|model|launchYear|price|image/', $var)){
		return parent::__get($var); 
		}else{
			return $this->$var;
		}
	}
	
	public function __set($var, $val){
		$this->$var = $val;
	}
	
	public function range(){
		return $this->fuelCapacity * $this->economy;
	}
			
}
	

class NonMotorized extends LandVehicle{
	public function __construct($manufacturer, $country, $type, $model, $launchYear, $price,$image){
		parent::__construct($manufacturer, $country, $type, $model, $launchYear, $price,$image);
	}
	
	public function __get($var){
		return parent::__get($var); 
	}
	
	public function __set($var, $val){
		$this->$var = $val;
	}
}


?>