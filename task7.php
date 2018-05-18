<?php 
/* 
Class definition for calculator

@class  : Calculator
*/

class Calculator
{
    
   
	function getadditionBelow1000(array $arr1){
		
		
		
		$arr= array();
        foreach ($arr1 as $x){
			
            if ($x < 1000){ 				
			
			$arr[] = $x;
			}
		}
        return array_sum($arr);
	}
    
    /*
    define method        
    @method add()
    @parameter Integer
    @return array
    */
    
    function add($num)
    {
        
        // calculating the sum of array
        
		unset($num[0]);
		unset ($num[1]);
	
        $resultArr = explode("," ,$num[2]);
 
        $sumOfNum = $this->getadditionBelow1000($resultArr);
        
		return $sumOfNum;
        
        
    }
}
$obj = new Calculator();

if (count($argv) > 0) {
	
	
    
    echo $obj->add($argv);
    
}


?>
