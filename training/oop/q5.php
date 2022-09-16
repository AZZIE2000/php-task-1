<?php
// Q5: Write a PHP Calculator class that will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request. For example :
// $mycalc = new MyCalculator( 12, 6);
// echo $mycalc- > add(); // Displays 18
// echo $mycalc- > multiply(); // Displays 72



class Calculator{
    private $num1;
    private $num2;
     function __construct($num1,$num2){
        $this->num1 = $num1;
        $this->num2 = $num2;
     }

    function add()
    {
        return $this->num1 + $this->num2;;
    }
    function subtract()
    {
        return $this->num1 - $this->num2;;
    }
    function multiply()
    {
        return $this->num1 * $this->num2;;
    }
    function divide()
    {
        return $this->num1 / $this->num2;;
    }
}

$case1 = new Calculator(5,2);
echo $case1->add() . "<br>";
echo $case1->subtract() . "<br>";
echo $case1->multiply() . "<br>";
echo $case1->divide() . "<br>";
// echo get_current_user();
function sa3a()
{
    $time = [];
  
      
       
       $time +=  gettimeofday();
   
    print_r($time);
}
print_r(time());

// sa3a();
// print_r(get_declared_classes());




