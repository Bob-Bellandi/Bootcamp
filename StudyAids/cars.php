<?php

/*
Create a class called Car.

In the constructor, allow the user to specify the following attributes: price, speed, fuel, and mileage.

If the price is greater than 10,000, set the tax to be 15%; otherwise set the tax to be 12%.

Create five different instances of the class Car.

In the class have a method called Display_all() that returns all the information about the car as a string.

In your constructor, call this Display_all method() to display information about the car when a new car is created.
*/
class Car
{
	var $tax_rate, $tax, $price_plus_tax;

	public function __construct($price, $speed, $fuel, $mileage)
	//Make the construct function public so it can be used by children of the class Car.
	{
		$this->price = $price;
		$this->speed = $speed;
		$this->fuel = $fuel;
		$this->mileage = $mileage;
		if($this->price > 10000)
		{
			$this->tax_rate = 0.15;

		}
		else
		{
			$this->tax_rate = 0.12;
		}
		$this->tax = $this->tax_rate * $this->price;
		$this->price_plus_tax = $this->price + $this->tax;
	} // end __construct
	public function display_all() //(Though it is public by default)
	{
		echo "<p>Price: $" . $this->price . "<br>";
		echo "Tax rate: " . $this->tax_rate * 100 . "%<br>";
		echo "Tax: $" . $this->tax . "<br>";
		echo "Total price (includes tax): $" . $this->price_plus_tax . "<br>";
		echo "Mileage: " . $this->mileage . "<br>";
		echo "Fuel level: " . $this->fuel . "</p>";
	}
}


$car1 = new Car(2000, "35 mph", "full", "15 mpg");
$car1->display_all();  //This is how an instantition of a class calls a public method that is in the constructor.

$car2 = new Car(2000, "5 mph", "not full", "105 mpg");
$car2->display_all(); 
$car3 = new Car(18000, "15 mph", "kind of full", "55 mpg");
$car3->display_all(); 
$car4 = new Car(12001, "25 mph", "full", "25 mpg");
$car4->display_all(); 
$car5 = new Car(2000, "35 mph", "nearly empty", "15 mpg");
$car5->display_all(); 

?>