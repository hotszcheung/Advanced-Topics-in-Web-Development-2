<?php 
/* =================================================== 
PHP Calculator example using "sticky" form (Version 1) 
====================================================== 
Author : P Chatterjee (adopted from an original example written by C J Wallace) 
Purpose: To multiply 2 numbers passed from a HTML form and display the result. 

input: 
  x, y : numbers 
  calc : submit button 

Date: 11 Sep 2012 
*/ 

// grab the form values from $_POST hash 
extract($_GET); 

// first compute the output, but only if data has been input 
if(isset($calc)) { // $calc exists as a variable 
  $prod = calculate($x, $y, $operator); 
 
  //calculate($x, $y ,$operator);
  
} else { // set defaults 
  $x=0; 
  $y=0; 
  $prod=0; 
  $operator=0;
  
  //$a =0;
  //$b =0;
  //$c =0;
} 
function calculate($x, $y, $operator) { 
 Switch ($operator){
	 Case "+":
		$result = $x + $y ;
		return $result;
		break;		
	 Case "-":
		$result = $x - $y ;
		return $result;
		break;
	 Case "*":
		$result = $x * $y ;
		return $result;
		break;
	 Case "/":
		$result = $x / $y ;
		return $result;
		break;
		
	default:
	return 0;
 }
} 

?> 
<!DOCTYPE html> 
<html> 
<head> 
<title>PHP Calculator (Version 3)</title> 
</head> 
<body> 
<h3>PHP Calculator (Version 3)</h3> 
<p>Multiply two numbers and output the result</p> 

<form method="get" action="<?php print $_SERVER['PHP_SELF']; ?>"> 
x = <input type="text" name="x" size="5" value="<?php print $x; ?>"/> 
operator = <input type="text" name="operator" size="5" value="<?php print $operator; ?>"/>
y = <input type="text" name="y" size="5" value="<?php print $y; ?>"/> 
<input type="submit" name="calc" value="Calculate"/> 
</form> 

<!-- print the result --> 
<?php 
if(isset($calc)) { 
print "<p>x $operator y = $prod </p>"; 

}
?> 
</body> 
</html>