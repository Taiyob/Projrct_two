<?php
	include 'Car.php';
	//include 'Audi.php';
	


	$ob_one = new Car;
	echo "From Mother Class<br>";
	echo $ob_one->EngineStatus.'<br>';
	echo $ob_one->BodyPart.'<br>';

	$ob_two = new Audi;
	echo "From Child Class<br>";
	echo $ob_two->color.'<br>';
	echo $ob_two->Seats.'<br>';
	echo $ob_two->EngineStatus.'<br>';

?>