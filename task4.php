<?php 

/* 
	Class definition for calculator
	
	@class  : Calculator
*/

class Calculator {
	
	/*
		define method		
		@method add()
		@parameter Integer
		@return array
	*/
	
function add($num){
	
	// calculating the sum of array
	
	unset($num[0]);
	unset ($num[1]);
	
	
	if(count($num)>0){
	
		$resultArr = explode(";",$num[2]);
		
		foreach($resultArr as $res){
			
			 $keywords = preg_split("/[\s,-]+/", $res);
			 
			 
			 
			 
			 print_r($keywords);
		}
		
		


		

		$sum = array_sum($keywords);
	return $sum;	
	}else{
		
		return 0;
	}
	}
}
$obj = new Calculator();

if(count($argv)>0){
	
	echo $obj->add($argv);

}
	


?>
