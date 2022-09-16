<?php
// echo substr_count("hello world","l");







// Write a PHP function that checks whether a string is all lowercase


// solution 1
function isLowerCase($str)
{
    if (ctype_upper($str)) {
        echo "true <br>";
    } else {
        echo "false <br>";
    }
}
  isLowerCase("hello worFld") . "<br>";





echo "---------------- <br>";

// solution 2
 function isLower($str)
 {
    if(preg_match('/[A-Z]/', $str)){
        echo "false <br>";
     } else{
    echo "true <br>";
 }}
 isLower("hello world") ."<br>";
 
 

 echo "---------------- <br>";



// solution 3
 function isLowerAscii($str)
 {
    $answer = 0;
    for($si=0; $si<strlen($str); $si++){
        for($i=97; $i<122; $i++){
            if($str[$si] == chr($i)){
                $answer++;
                
            }
        }
    } 
    if ($answer == strlen($str)) {
        echo " ALL LowerCase";
    }else{
        echo "NOT ALL LowerCase";

    }
   
   
 }
 isLowerAscii("asdasdasfaFsfasfsdvsdvdsvsdvsdvsvsv");





