<?php 
/* 
Class definition for calculator

@class  : Calculator
*/

class Calculator
{
    
    function count_negatives(array $array)
    {
		
		
        foreach ($array as $x){
            if ($x < 0 && is_int($x)){                
			
				$result = 0;
				die();
			}else{
				
				$result =1;
				
			}
		}
		return $result;	
		
    }
	
	function getNegativeNumbers(array $arr1){
		
		
		
		$arr= array();
        foreach ($arr1 as $x){
			
            if ($x < 0){ 				
			
			$arr[] = $x;
			}
		}
        return $arr;
	}
    
    /*
    define method        
    @method add()
    @parameter Integer
    @return array
    */
    
    function add($num)
    {
        
		unset($num[0]);
		unset ($num[1]);
        // calculating the sum of array
		
		$resultArr = explode("," ,$num[2]);		
        
        $checknNumbers = $this->count_negatives($resultArr);
        
        if ($checknNumbers > 0) {
            
            $sum = array_sum($num);
            
            return $sum;
            
        } 
		if($checknNumbers == 0){
			
            
			$results = $this->getNegativeNumbers($resultArr);
			
			
            return "Negative numbers not allowed ";
        }
        
        
    }
}
$obj = new Calculator();

if (count($argv) > 0) {
	
	
    //$tempArray = preg_replace("/[^a-zA-Z 0-9]+/", "", $argv);
   
    echo $obj->add($argv);
    
}


?>
