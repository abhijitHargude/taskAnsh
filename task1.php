<?php 

/* 
	Class definition for calculator
	
	@class  : Calculator
*/

class Calculator {
	
	/*
		define method		
		@method sum()
		@parameter array
	*/
	
function sum($num){
	
	
	unset($num[0]);
	unset ($num[1]);
	
	
	if(count($num)>0){
	
		$resultArr = explode("," ,$num[2]);		

		$sum = array_sum($resultArr);
	return $sum;	
	}else{
		
		return 0;
	}	
		
	
	}
}
$obj = new Calculator();

if(count($argv)>0){
		
	echo $obj->sum($argv);

}
	


?>
