<?php

@date_default_timezone_set("GMT+8");

extract($_REQUEST);

$mysqli = new mysqli("localhost", "root", "287730849", "currencies");

Switch ($method) {
    //INSERT NEW DATA
    Case 'GET':

        $insert = $mysqli->query("INSERT INTO currencies(code, curr, loc, rate) VALUES ('$code','$curr','$loc', '$rate') ");
        $chekc = $mysqli->query("SELECT * FROM currencies WHERE code ='$code'");
        if ($insert) {


            $xml = '<?xml version="1.0" encoding="UTF-8"?>
		<post>
		<at>' . date("d F Y H:i") . '</at>
		<code>' . $code . '</code>
		<curr>' . $curr . '</curr>
		<loc>' . $loc . '</loc>
		<rate>' . $rate . '</rate>
		</post>';

            header("Content-type: text/xml");
            echo $xml;
        } else {
            echo'The curr data already existed!';
            
        }

        break;

    //SELECT DATA 
    Case 'POST':
        //$update = $mysqli->query("UPDATE currencies SET");
        $result_from = $mysqli->query("SELECT * FROM currencies WHERE code='$from'");
        $result_to = $mysqli->query("SELECT * FROM currencies WHERE code='$to'");

        $row_from = $result_from->fetch_object();
        $row_to = $result_to->fetch_object();

        $rate = $row_to->rate / $row_from->rate;

        $xml = '<?xml version="1.0" encoding="UTF-8"?>
		<conv>
			<at>' . date("d F Y H:i") . '</at>
			<rate>' . $rate . '</rate>
			<from>
				<code>' . $from . '</code>
				<curr>' . $row_from->curr . '</curr>
				<loc>' . $row_from->loc . '</loc>
				<amnt>' . $amnt . '</amnt>
			</from>
			<to>
				<code>' . $to . '</code>
				<curr>' . $row_to->curr . '</curr>
				<loc>' . $row_to->loc . '
				</loc>
				<amnt>' . $rate * $amnt . '</amnt>
			</to>
		</conv>';

        header("Content-type: text/xml");
        echo $xml;

        break;

    //UPDATE DATA 
    Case 'PUT':
        $update = $mysqli->query("UPDATE currencies "
                . "SET curr= '$curr' , loc = '$loc' , rate = '$rate' WHERE code ='$code'  ");
      
        if ($update === true) {
            $xml = '<?xml version="1.0" encoding="UTF-8"?>
		<put>
		<at>' . date("d F Y H:i") . '</at>
		<code>' . $code . '</code>
		<curr>' . $curr . '</curr>
		<loc>' . $loc . '</loc>
		<rate>' . $rate . '</rate>
		</put>';

            header("Content-type: text/xml");
            echo $xml;
            
            break;
        } else {
            echo "The curr data does not existed";
        }
    Case 'DELETE':
        $delete = $mysqli->query("DELETE FROM currencies WHERE code ='$code' ");
       if ($delete === true) {
      //  if ($delete) {
           $xml = '<?xml version="1.0" encoding="UTF-8"?>
		<delete>
		<at>' . date("d F Y H:i") . '</at>
		<code>' . $code . '</code>
	
		</delete>';

            header("Content-type: text/xml");
            echo $xml;
            
        } else {
                 echo 'The curr data does not existed!';
        }
        break;

    default:
        $xml = '
	<conv>
		<error code="4000">Failed to append record</error> 
	</conv>';
        header("Content-type: text/xml");

        echo $xml;
}
?>