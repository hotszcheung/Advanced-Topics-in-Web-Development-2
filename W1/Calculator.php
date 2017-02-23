<?php

class Calculator {
	public $x;
	public $y;
	
	
	function  __construct($x,$y){
		$this ->x =$x;
		$this ->y =$y;
		
	} 
	function calculate($operator){
		 Switch ($operator){
			 Case "+":
				$result = $this->x + $this->y ;
				
				break;		
			 Case "-":
				$result = $this->x - $this->y ;
				
				break;
			 Case "*":
				$result = $this->x * $this->y ;
				
				break;
			 Case "/":
				$result = $this->x / $this->y ;				
				break;
				
			default:
			$result = null;
				print 'operator should be symbol';
			break;
		}
		return $result;
	}
	
	
	
}
?>


