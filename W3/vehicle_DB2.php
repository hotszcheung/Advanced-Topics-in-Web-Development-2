<html>  
<body>

<form action="vehicle_DB2.php" method="get">
	<select name="model">
		<option value="Route 29">Route 29</option>
		<option value="LPG Coaster">LPG Coaster</option>
		<option value="Evora S">Evora S</option>				
	</select>
	<input type="submit">
</form>

</body>
</html>


<?php
include('vehicle_class.php');
if (isset($_GET["model"])){
	$model = $_GET["model"];
	$conn = new mysqli('localhost', 'root', '', 'vehicle2');

if($conn->connect_error){
	die("Connenction failed: " . $conn->connect_error);
}

if($model == "Evora S"){
	$result = $conn-> query("SELECT
							vehicle.*,
							vehicletype.type,
							manufacturer.manufacturer,
							country.country
							FROM
							country,
							manufacturer,
							vehicletype,
							vehicle
							WHERE
							country.v_id = vehicle.v_id  AND manufacturer.v_id = vehicle.manufacturer AND vehicletype.v_id = vehicle.type  AND model = 'Evora S'");
							
	
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			$motor = new Motorized($row["manufacturer"],$row["country"],$row["type"]
									,$row["model"],$row["launchYear"],$row["price"],$row["image"],$row["engine"]
									,$row["fuel"],$row["topSpeed"],$row["economy"],$row["power"],$row["fuelCapacity"],$row["torque"]);
			echo "Manufacturer: <b>".$motor->manufacturer."</b><br>";
			echo "country: <b>".$motor->country."</b><br>";
			echo "type: <b>".$motor->type."</b><br>";
			echo "model: <b>".$motor->model."</b><br>";
			echo "launchYear: <b>".$motor->launchYear."</b><br>";
			echo "price: <b>".$motor->price."</b><br>";
			echo "engine: <b>".$motor->engine."</b><br>";
			echo "fuel: <b>".$motor->fuel."</b><br>";
			echo "topsSpeed: <b>".$motor->topsSpeed."</b><br>";
			echo "economy: <b>".$motor->economy."</b><br>";
			echo "fuelCapacity: <b>".$motor->fuelCapacity."</b><br>";
			echo "power: <b>".$motor->power."</b><br>";
			echo "torque: <b>".$motor->torque."</b><br>";
			#echo "range: <b>".$motor->range($motor->fuelCapacity, $motor->economy)."</b><br>";
			echo "image: <img src=".$motor->image." width= * hight= *>";
		}
	}
}else if ($model == "Route 29"){
	
	$result = $conn-> query("SELECT
							vehicle.*,
							vehicletype.type,
							manufacturer.manufacturer,
							country.country
							FROM
							country,
							manufacturer,
							vehicletype,
							vehicle
							WHERE
							country.v_id = vehicle.v_id  AND manufacturer.v_id = vehicle.manufacturer AND vehicletype.v_id = vehicle.type  AND model = 'Route 29'");
	
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			$nonmotor = new NonMotorized($row["manufacturer"],$row["country"],$row["type"]
									,$row["model"],$row["launchYear"],$row["price"],$row["image"]);
			echo "Manufacturer: <b>".$nonmotor->manufacturer."</b><br>";
			echo "country: <b>".$nonmotor->country."</b><br>";
			echo "type: <b>".$nonmotor->type."</b><br>";
			echo "model: <b>".$nonmotor->model."</b><br>";
			echo "launchYear: <b>".$nonmotor->launchYear."</b><br>";
			echo "<img src=".$nonmotor->image."></b><br>";
			echo "price: <b>".$nonmotor->price."</b><br>";
			
		
		}
	}
	
}else if ($model == "LPG Coaster"){
	
	$result = $conn-> query("SELECT
							vehicle.*,
							vehicletype.type,
							manufacturer.manufacturer,
							country.country
							FROM
							country,
							manufacturer,
							vehicletype,
							vehicle
							WHERE
							country.v_id = vehicle.v_id  AND manufacturer.v_id = vehicle.manufacturer AND vehicletype.v_id = vehicle.type  AND model = 'LPG Coaster'");
	
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			$motor2 = new Motorized($row["manufacturer"],$row["country"],$row["type"]
									,$row["model"],$row["launchYear"],$row["price"],$row["image"],$row["engine"]
									,$row["fuel"],$row["topSpeed"],$row["economy"],$row["power"],$row["fuelCapacity"],$row["torque"]);
			echo "Manufacturer: <b>".$motor2->manufacturer."</b><br>";
			echo "country: <b>".$motor2->country."</b><br>";
			echo "type: <b>".$motor2->type."</b><br>";
			echo "model: <b>".$motor2->model."</b><br>";
			echo "launchYear: <b>".$motor2->launchYear."</b><br>";
			echo "price: <b>".$motor2->price."</b><br>";
			echo "engine: <b>".$motor2->engine."</b><br>";
			echo "fuel: <b>".$motor2->fuel."</b><br>";
			echo "topsSpeed: <b>".$motor2->topsSpeed."</b><br>";
			echo "economy: <b>".$motor2->economy."</b><br>";
			echo "fuelCapacity: <b>".$motor2->fuelCapacity."</b><br>";
			echo "power: <b>".$motor2->power."</b><br>";
			echo "torque: <b>".$motor2->torque."</b><br>";
			#echo "range: <b>".$motor2->range($motor2->fuelCapacity, $motor->motor2)."</b><br>";
			echo "image: <img width= 450 hight= 450 src=".$motor2->image." >";
		}
	}
}else{
	
}
}
?>