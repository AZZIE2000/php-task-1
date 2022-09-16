<?php
// Q4: Write a PHP script to extract text (within square brackets ) from a string. 
// Sample strings: 'The quick brown [fox].'
// Expected Output: 'fox'

function whereIsTheFox($str)
{
    $start = 0;
    $end = 0;
    for($i = 0; $i < strlen($str); $i++){
        if($str[$i] == "["){
            $start = $i+1;
            
        }elseif($str[$i] == "]"){
            $end = $i;
        }
    }
    
    
    for ($i=$start; $i < $end ; $i++) { 
        echo $str[$i];
        
    }

    
}
whereIsTheFox("The quick brown [fox].");