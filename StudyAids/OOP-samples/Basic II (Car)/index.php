<?php

class Car{

	var $price, $speed, $fuel, $mileage, $tax;

	public function __construct($price, $speed, $fuel, $mileage)
	{
		$this->price = $price;
		$this->speed = $speed;
		$this->fuel = $fuel;
		$this->mileage = $mileage;

		$this->tax = ($this->price > 10000) ? "0.15":"0.12";
	}

	public function Display_all()
	{
		echo "<br />Price: " . $this->price;
		echo "<br />Speed: " . $this->speed;
		echo "<br />Fuel: " . $this->fuel;
		echo "<br />Mileage: " . $this->mileage;
		echo "<br />tax: " . $this->tax ."<br />";

	}

}

$car1 = new Car(15000, "35mph", "Full", "25mpg");
$car2 = new Car(10000, "55mph", "Half Full", "35mpg");
$car3 = new Car(6000, "55mph", "Half Full", "35mpg");
$car4 = new Car(20000, "65mph", "Empty", "55mpg");
$car5 = new Car(30000, "85mph", "Half Full", "85mpg");

$car1->Display_all();
$car2->Display_all();
$car3->Display_all();
$car4->Display_all();
$car5->Display_all();

