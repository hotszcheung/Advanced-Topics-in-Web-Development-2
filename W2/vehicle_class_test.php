<?php

include('vehicle_class.php');

//$car = new LandVehicle('Lotus', 'Great Britain', 'car','Evora S','2010','£57550');
//echo $car->manufacturer."<p />";
//echo $car->price."<p />";

//$car->price = "£48550";
//echo $car->price."<p />";

$motorized = new Motorized('Lotus', 'Great Britain', 'car', 'Evora S','2010','£57550','C:\xampp\htdocs\W2\LotusEvora.png',
					'Toyata V6', 'petrol', '172mph', '27.1 mpg', '350 bhp','12 gallons');
echo 'Manufacturer:'.$motorized->manufacturer."<p />";
echo 'country:'.$motorized->country."<p />";
echo 'type:'.$motorized->type."<p />";
echo 'Model:'.$motorized->model."<p />";
echo 'LanchYear:'.$motorized->launchYear."<p />";
echo 'price:'.$motorized->price."<p />";

echo 'engine:'.$motorized->engine."<p />";
echo 'fuel:'.$motorized->fuel."<p />";
echo 'topSpeed:'.$motorized->topsSpeed."<p />";
echo 'economy:'.$motorized->economy."<p />";
echo 'power:'.$motorized->power."<p />";

echo 'Range:'.$motorized->range()." miles<p />";
echo 'URL: '.$motorized->image."<p />"

?>