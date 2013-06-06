<?php

//Create a class called Bikes. Add attributes. Create contstruct.

class Bike
{
	var $price, $max_speed,	$miles;
	var $miles_reset = 178; //Public properties of Bike.


	//The class Bike has a construct and three public functions:
	function __construct($price,$max_speed) 
	{ 									 //By default, this is a public function.
		$this->price = $price;           // User specifies price & max 
		$this->max_speed = $max_speed;   // max speed and miles. Miles is
		$this->miles = 0;				 // zero at each instanciation. 
	} //end __construct
	function display_info()
	{
		echo "<p>Price is " . $this->price . "<br>";
		echo "Max speed for this bike is " . $this->max_speed . "<br>";
		echo "Bike has  " . $this->miles . " miles ridden.<br>";
	} //end function display_info()
	function drive()
	{
		$this->miles = $this->miles + 10;
		echo "So far, " . $this->miles . " have been ridden.<br>";
	} //end function drive()
	function reverse()
	{
		$this->miles = $this->miles - 5;
		if($this->miles <= 0)
		{
			echo "This bike's miles-ridden has been set to " . $this->miles_reset . " miles. Otherwise, it would have clocked a negative number of miles (" . $this->miles . ") -- an impossibility!<br>";
			$this->miles = $this->miles_reset;
		}
		if($this->miles > 0)
		{
			echo "Since we've been going backwards, " . $this->miles . " have now been clocked.</p>";	
		}
	} //end function reverse()
} //end class Bike

$bike1 = new Bike(1300, 35);
$bike2 = new Bike(450, "25 mpg");
$bike3 = new Bike(175, 15); 

//Have the first instance of Bike drive three times, reverse once, and display.
$bike1->drive();
$bike1->drive();
$bike1->drive();
$bike1->reverse();
$bike1->display_info();

//Have the second instance drive twice, reverse twice, and display.
$bike2->drive();
$bike2->drive();
$bike2->reverse();
$bike2->reverse();
$bike2->display_info();

//Have the third instance reverse three times and display.
$bike3->reverse();
$bike3->reverse();
$bike3->reverse();
$bike3->display_info();

?>