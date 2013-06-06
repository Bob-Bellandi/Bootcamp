<?php

function average($array)
{
	$total = 0;

	foreach($array as $row)
	{
		echo $row . " ";
	}
}




$sample = array(10, 3, 5, 8, 4, 2, 1, 333); 
$output = average($sample); 
echo $output; //this should print the average value 

?>