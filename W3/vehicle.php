<html>
	
	<form action="vehicle.php" method="get">
	 
	<select name="model">			
		<option value="LPG Coaster">LPG Coaster</option>
		<option value="Evora S">Evora S</option>				
	</select>
	<input type="submit" value="Submit">
	 
	 
	</form>
		
	
</html>

<?php
include('vehicle_class.php');

$model = $_GET["model"];

$motorized1 = new Motorized('Toyota', 'Japan', 'bus', 'LPG Coaster','2007','HK$501,000','Minibus.JPG',
					'Toyata L4 OHV', 'gas', '110 mph', '2.6 mpg', '113 bhp','122 gallons','226 lb ft');
					
$motorized2 = new Motorized('Lotus', 'Great Britain', 'car', 'Evora S','2010','£48550 to £57550','lotus-evora-s.jpg',
					'Toyata V6', 'petrol', '172mph', '27.1 mpg', '350 bhp','12 gallons','295 lb ft');
					
if(isset ($_GET['model'])){
	
	
	if($model == "LPG Coaster"){
		
	echo 'manufacturer:'.$motorized1->manufacturer."<p />";
	echo 'country:'.$motorized1->country."<p />";
	echo 'type:'.$motorized1->type."<p />";
	echo 'model:'.$motorized1->model."<p />";
	echo 'LanchYear:'.$motorized1->launchYear."<p />";
	

	//echo 'image: <img src="'.$motorized1->image.'"></img><p />';
	echo 'image: ' . '<img src="' . $motorized1->image . '" height="650" width="600" />' . '<br><br>';
	echo 'price:'.$motorized1->price."<p />";
	echo 'fuelCapacity: '.$motorized1->fuelCapacity."<p />";
	
	
	echo 'engine:'.$motorized1->engine."<p />";
	echo 'fuel:'.$motorized1->fuel."<p />";
	echo 'topSpeed:'.$motorized1->topsSpeed."<p />";
	echo 'economy:'.$motorized1->economy."<p />";
	echo 'power:'.$motorized1->power."<p />";
	echo 'torque: '.$motorized1->torque."<p />";
	
	}elseif($model == "Evora S"){
			echo 'Manufacturer:'.$motorized2->manufacturer."<p />";
			echo 'country:'.$motorized2->country."<p />";
			echo 'type:'.$motorized2->type."<p />";
			echo 'Model:'.$motorized2->model."<p />";
			echo 'LanchYear:'.$motorized2->launchYear."<p />";
			

			//echo 'image: <img src="'.$motorized2->image.'"></img><p />';
			echo 'image: ' . '<img src="' . $motorized2->image . '" height="400" width="500" />' . '<br><br>';
				
			echo 'price:'.$motorized2->price."<p />";
			echo 'fuelCapacity: '.$motorized2->fuelCapacity."<p />";

			
			echo 'engine:'.$motorized2->engine."<p />";
			echo 'fuel:'.$motorized2->fuel."<p />";
			echo 'topSpeed:'.$motorized2->topsSpeed."<p />";
			echo 'economy:'.$motorized2->economy."<p />";
			echo 'power:'.$motorized2->power."<p />";
			echo 'torque: '.$motorized2->torque."<p />";
	
	
	}else{
		echo '<b>No model type have found!</b>'; 
	}
}



?>

