<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    
    <?php  
    echo "--------Q1-------- <br>";
    function isLeap($year)
    {
      if($year % 4 == 0){
        if ($year % 100 == 0 and $year % 400 == 0) {
          echo "This is a leap year. <br>";
        } elseif ($year % 100 != 0) {
          echo "This is a leap year. <br>";
        } else{
          echo "This is not a leap year. <br>";
        }
      }else{
        echo "This is not a leap year. <br>";
      }
    };
    isLeap(1800);
    echo "--------Q2-------- <br>";
    function isSummer($temp)
    {
      if ($temp < 20) {
        echo "It is winter! <br>";
      }else{
        echo "It is summertime! <br>";
      }
    };
    isSummer(21);
    echo "--------Q3-------- <br>";
    function equalSum($num1, $num2)
    {
      if ($num1 == $num2) {
        echo ($num1 + $num2) * 3;
        echo "<br>";
      }else{
        echo $num1 + $num2;
        echo "<br>";
      }
    };
    equalSum(2,1);
    echo "--------Q4-------- <br>";
    function is30($num1, $num2)
    {
      if($num1+$num2 == 30){
        echo 30;
        echo "<br>";
      }else{
        echo "Flase <br>";
      }
    };
    is30(18,12);
    echo "--------Q5-------- <br>";
    function isNumMultiOf3($num1)
    {
      if($num1 % 3 == 0){
        echo "$num1 is multiple of 3 <br>";
      }else{
        echo "$num1 is NOT multiple of 3 <br>";
      }
    };
    isNumMultiOf3(10);
    echo "--------Q6-------- <br>";
    function isInRange($num1)
    {
      if($num1 >= 20 and $num1 <= 50 ){
        echo "$num1 is in the range of [20-50] <br>";
      }else{
        echo "$num1 is NOT in the range of [20-50] <br>";
      }
    };
    isInRange(20);
    echo "--------Q7-------- <br>";
    function largNum($num1, $num2, $num3)
    {
      if($num1 > $num2){
        if($num1 > $num3){
          echo $num1;
          echo "<br>";
        }elseif($num3 > $num2){
          echo $num3;
          echo "<br>";
        }else{
          echo $num2;
          echo "<br>";
        }
      }else{
        if($num2 > $num3){
          echo $num2;
          echo "<br>";
        }else{
          echo $num3;
          echo "<br>";
        }
      }
    };
    largNum(3,1,2);
    largNum(1,2,5);
    largNum(1,8,2);
    echo "--------Q7-1-------- <br>";
    function largNum2($arr){
     echo max($arr);
      
      echo "<br>";
    };
    largNum2([1,12,50,15,700]);
    echo "--------Q8-------- <br>";
    function elecBill($units)
    {
      if($units <= 50){
        echo 2.5 * $units;
        echo " JD";
        echo "<br>";
      }elseif($units > 50 and $units <= 100){
        
       echo (2.5 * 50) + (($units-50) * 5);
       echo " JD";
       echo "<br>";
      }elseif($units > 100 and $units <= 250){
        echo (2.5 * 50) + (100 * 5) + (($units-150) * 6.2);
        echo " JD";
        echo "<br>";
      }else{
        echo (2.5 * 50) + (100 * 5) + (100 * 6.2) + (($units-250) * 7.5);
        echo " JD";
        echo "<br>";
      }
    }
    elecBill(50);
    elecBill(70);
    elecBill(230);
    elecBill(270);
    echo "--------Q9-------- <br>";
    function calc($num1, $op, $num2)
    {
      switch ($op) {
        case '+':
          $answer = $num1 + $num2;
          break;
        case '*':
          $answer = $num1 * $num2;
          break;
        case '/':
          $answer = $num1 / $num2;
          break;
        case '-':
          $answer = $num1 - $num2;
          break;
      }
      echo "$answer <br>";
    };
    calc(1, "/", 2);
    echo "--------Q10-------- <br>";
    function isEligibleToVote($age)
    {
      if ($age >= 18) {
        echo "is eligible to vote <br>";
      }else{
        echo "is NOT eligible to vote <br>";
      }
    };
    isEligibleToVote(17);
    echo "--------Q11-------- <br>";
    function whatsTheNum($num)
    {
      if ($num < 0) {
       echo "Negative <br>";
      }elseif($num > 0){
        echo "Positive <br>";
      }elseif($num == 0){
        echo "zero <br>";
        
      }
    };
    whatsTheNum(1);
    whatsTheNum(0);
    whatsTheNum(-1);
    echo "--------Q11-------- <br>";
    function gradeCheck($arr)
    {
      $answer = array_sum($arr) / count($arr);
      if($answer < 60){
        echo "F <br>";
      }elseif($answer > 60 and $answer < 70){
        echo "D <br>";

      }elseif ($answer > 70 and $answer < 80) {
        echo "C <br>";
      }elseif ($answer > 80 and $answer < 90) {
        echo "B <br>";
      }elseif ($answer > 90 and $answer < 100) {
        echo "A <br>";
      }

    };
        gradeCheck([60,86,95,63,55,74,79,62,50]);
        gradeCheck([60,86,80,60,55,54,39,52,50]);
        gradeCheck([60,96,90,90,95,94,99,92,50]);
        gradeCheck([90,96,90,90,95,94,99,92,90]);
    ?>
  </body>
</html>
