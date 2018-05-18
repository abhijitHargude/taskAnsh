<?php 
/* 
Class definition for calculator

@class  : Calculator
*/

class Calculator
{
    
    function count_negatives(array $array)
    {
        $i = 0;
        foreach ($array as $x)
            if ($x < 0)
                $i++;
        return $i;
    }
    
    /*
    define method        
    @method sum()
    @parameter Integer
    @return array
    */
    
    function sum($num)
    {
        
        // calculating the sum of array
        
        $checknNumbers = $this->count_negatives($num);
        
        if ($checknNumbers) {
            
            $sum = array_sum($num);
            
            return $sum;
            
        } else {
            
            return "Negative numbers not allowed";
        }
        
        
    }
}
$obj = new Calculator();

if (count($argv) > 0) {
    $tempArray = preg_replace("/[^a-zA-Z 0-9]+/", "", $argv);
    
    echo $obj->sum($tempArray);
    
}


?>
