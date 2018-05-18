<?php 
/* 
Class definition for calculator

@class  : Calculator
*/

class Calculator
{
    
   
	function geMultiplicationBelow1000($num){
		
		

		foreach($num as $res){
			
			if($res > 0 && $res > 0){  
			
				if ($res < 1000 && $res < 1000){ 				
			
					$result= array_product($num);
				}
				return $result;
			}else{
				
				return "Negative Number not allowed";
			}
			
		}
		    
		
        
	}
    
    /*
    define method        
    @method multiply()
    @parameter Integer
    @return array
    */
    
    function multiply($num)
    {
        
        // calculating the sum of array
		
		unset($num[0]);
		unset ($num[1]);
	
        $resultArr = explode("," ,$num[2]);
        $result = $this->geMultiplicationBelow1000($resultArr);
        
		return $result;
        
        
    }
}
$obj = new Calculator();

if (count($argv) > 0) {
	

    echo $obj->multiply($argv);
    
}


?>
