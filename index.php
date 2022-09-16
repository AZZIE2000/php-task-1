<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        body {
            font-family: Courier, monospace;
        }
    </style>
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
    isLeap(2000);
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
    echo "--------Q12-------- <br>";
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
        echo "--------Q13-------- <br>";
        $colors = array('white', 'green', 'red');
        echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[2] carpet, the $colors[1] lawn, the $colors[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon <br>";

        echo "--------Q14-------- <br>";
        echo " <ul><li>$colors[1]</li><li>$colors[2]</li><li>$colors[0]</li></ul> <br>";
       
        echo "--------Q15-------- <br>";
        $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

        function citiesPrint($arr){
            foreach($arr as $item => $val){
              echo "The capital of $item is $val <br>";
            }
        };
        citiesPrint($cities);
        echo "--------Q16-------- <br>";

        $color = array (4 => 'white', 6 => 'green', 11=> 'red');
        function arrDis($arr){
         echo $arr[4] . "<br>";
         echo reset($arr) . "<br>";
        };
      arrDis($color);
      echo "--------Q17-------- <br>";
      function addToArr($ele, $i){
        $arrOfNums = [1,2,3,4,5,6,7,8,9];
        array_splice($arrOfNums, $i, 0, $ele);
        return $arrOfNums;
      };
     print_r(addToArr("$", 3)) ;
     echo "<br>";
     echo "--------Q18-------- <br>";
     $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
     function sortArr($arr)
     {
       asort($arr);
      foreach($arr as $k => $v){
        echo "$k = $v <br>";
      }
     };
     sortArr($fruits);
     echo "--------Q19-------- <br>";
     $temps = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
     function avTemp($arr){
      $average = array_sum($arr) / count($arr);
       sort($arr);
      $newArr = array_unique($arr);
      sort($newArr);
      echo "Average Temperature is: $average <br>";
      echo "List of seven lowest temperatures: $newArr[0], $newArr[1], $newArr[2], $newArr[3], $newArr[4] <br> "; 
      rsort($newArr);
      echo "List of seven highest temperatures: $newArr[0], $newArr[1], $newArr[2], $newArr[3], $newArr[4] <br> "; 
     }
     avTemp($temps);
     echo "--------Q20-------- <br>";
     $array1 = array("color" => "red", 2, 4);
     $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
     print_r(array_merge($array1,$array2));
     echo  "<br>";
     echo "--------Q21-------- <br>";
     $colors1 = array("red","blue", "white","yellow");
     $flipArr = array_flip($colors1);
     $capArr = array_change_key_case($flipArr,CASE_UPPER);
     print_r($capArr);
     echo  "<br>";
     echo "--------Q22-------- <br>";
     $lowArr = array_change_key_case($flipArr,CASE_LOWER);
     print_r($lowArr);
     echo  "<br>";
     echo "--------Q23-------- <br>";
     function numsDevBy4()
     {
       echo "all the numbers between 200 and 250 that are divisible by 4 : ";
       for($i=200; $i<=250; $i++){
         if($i % 4 == 0){
           echo $i .", ";
          }
        }
        echo  "<br>";
      };
      numsDevBy4();
      echo "--------Q24-------- <br>";
      $words =  array("abcd","abc","es","hjjj","g","wer");
      function in_array_words_len($arr)
      {
        $higher=0;
        $lower = 0;
        $crr=0;
        foreach($arr as $item){
          $crr = strlen($item);
          if($crr > $higher){
            
            $higher = $crr;
          }elseif($lower == 0){
            $lower = $crr;
          }elseif($crr < $lower){
            $lower = $crr;
          }
        }
        echo "The shortest array length is $lower. The longest array length is $higher. <br>";
        
    
      }
      in_array_words_len($words);
      echo "--------Q25-------- <br>";
      function rand_10_nums($num1, $num2)
      {
        $ran_arr = [];
        for($i = 1; $i<=10; $i++){
          $gg = ($num2 / $num1 ) /$i;
          array_push($ran_arr,$gg);
          
        }
        
         shuffle($ran_arr);
        foreach($ran_arr as $item){
        echo $item . " ";
        echo "<br>";
       }
      }
      rand_10_nums(1, 1.111111111111111111111111111111111111111);
      echo "--------Q26-------- <br>";
      $q26Arr = array( 0, 15, 3, 12, 6);
      function in_array_int_len($arr)
      {
        $lower = 0;
        $crr = 0;
        foreach($arr as $item){
          $crr = $item;
          if($crr != 0 and $lower == 0){
            
            $lower = $crr;
          }elseif($crr != 0 and $lower != 0 and $crr < $lower){
            $lower = $crr;
          }
        }
        echo "The lowest number is : $lower <br>";
      }
      in_array_int_len($q26Arr);
      echo "---Loops-----Q27-------- <br>";
      function show_10(){
        for ($i=1; $i <= 10; $i++) { 
          if($i == 10){
            echo "$i";
          }else{
            echo "$i - ";
          }
        }
        echo "<br>";
      }
      show_10();
      echo "--------Q28-------- <br>";
      function addAllNums($num1, $num2)
      {
        $prev = 0;
        for($i = $num1; $i <=$num2; $i++){
          $prev = $prev + $i;
        }
        echo $prev;
        echo "<br>";
      }
      addAllNums(0, 30);
      echo "--------Q29--i failed to solve it------ <br>";
      function ABCDE_pattern()
      {
        $abc = ["A","B","C","D","E"];
        for ($i = 0; $i < 5; $i++) {
          for ($y = 4; $y > $i; $y--) {
              echo $abc[0] . "  ";
          }
          for ($x = 0; $x <= $i; $x++) {
              echo $abc[$i] . "  ";
          }
          echo "<br>";
      }
      }
      ABCDE_pattern();
      echo "--------Q30---i failed to solve it----- <br>";
      function pattern123()
      {
        $nums = [1,2,3,4,5];
        for ($i = 0; $i < 5; $i++) {
          for ($y = 4; $y > $i; $y--) {
              echo $nums[0] . "  ";
          }
          for ($x = 0; $x <= $i; $x++) {
              echo $nums[$i] . "  ";
          }
          echo "<br>";
      }
      }
      pattern123();
      echo "--------Q31--- i failed to solve it----- <br>";
      function pattern0to5()
      {
        $nums = [1,2,3,4,5];
        for ($i=0; $i < 5; $i++) { 
          for ($x=0; $x < $i; $x++) { 
            echo "0 ";
          }
          echo $nums[$i] . " ";
          for ($y=4; $y > $i; $y--) { 
            
            echo 0 . " ";
          }
          echo "<br>";
        }
      }
      pattern0to5();
      echo "--------Q32-------- <br>";
      function actorial_of_number($num)
      {
       $answer = 1;
       for ($i=1; $i <= $num; $i++) { 
        $answer = $answer * $i;
       }
       echo $answer . "<br>";
      }
      actorial_of_number(5);
      echo "--------Q33-------- <br>";
      // Fn = Fn-1 + Fn-2
      // 0, 1, 1, 2, 3, 5, 8, 13, 21
      function fibo($num)
      {
        
        $n1 = 0;
        $n2 = 1;
        // $answer = 0;
        echo $n1 ." / ". $n2 ." / ";
        for ($i=1; $i <= $num-2; $i++) { 
          $answer = $n1 + $n2;
          echo $answer ." / ";
          $n1 = $n2;
          $n2 = $answer;

        }
        echo "<br>";
      }
      fibo(10);
      echo "--------Q34-------- <br>";

      function Count_c($str)
      {
        $counter = 0;
        for ($i=0; $i < strlen($str); $i++) { 
          if($str[$i] == "c" || $str[$i] == "C" ){
            $counter++;
          }
        }
        echo $counter. "<br>";
      }
      Count_c("Orange Coding Academy");
      echo "--------Q35-------- <br>";
      function tableQ35()
      {
        echo "<table style=' border-spacing:0px'>";
        for ($i=1; $i <=6 ; $i++) { 
          echo "<tr>";
          for ($x=1; $x <=5 ; $x++) { 
            echo "<td style='padding:3px ;border:1px solid black'>" .$i. '*' .$x .'=' . $i*$x ."</td>";
          }
          echo "</tr>";
        }
        echo "</table><br>";
      }
      tableQ35();
      echo "--------Q35-------- <br>";
      function FizzBuzz($num)
      {
        for ($i=1; $i <= $num; $i++) { 
          if($i%3 == 0 && $i%5 == 0){
            echo "(FizzBuzz) ";
          }elseif($i%5 == 0){
            echo "Buzz ";
          }elseif($i%3 == 0){
            echo "Fizz ";
          }else{
            echo "$i ";
          }
        }
        echo "<br>";
      }
      FizzBuzz(50);
      echo "--------Q35-------- <br>";
      function Floyd_triangle($num)
      {
        $numx = 1;
        for ($i=0; $i <= $num; $i++) { 
          for ($x=1; $x <= $i; $x++) { 
            echo "$numx ";
            $numx++;
          }
          echo "<br>";
        }
        echo "<br>";
      }
      Floyd_triangle(5);
      echo "--------Q35-------- <br>";
      function diamond()
      {
        $space = "&nbsp";
        $abc = ["A","B","C","D","E"];
        for ($i=0; $i < 5 ; $i++) { 

          for ($x=3; $x >= $i; $x--){
            echo $space;
          }
          for ($x=0; $x <= $i; $x++){
            echo $abc[$x] . " ";
          }
          echo "<br>";
        }
        for ($y=3; $y >= 0 ; $y--) { 

          for ($x=3; $x >= $y; $x--){
            echo $space;
          }
          for ($x=0; $x <= $y; $x++){
            echo $abc[$x] . " ";
          }
          echo "<br>";
        }




      }
      diamond();
      echo "-----Functions---Q36-------- <br>";
      function primeNum($num)
      { 
        if ($num <= 1) {
          echo "$num is not a prime number <br>";
      } elseif ($num == 2) {
          echo "$num is a prime number <br>";
      } else {
          $prime = 0;
          for ($i = 2; $i < $num; $i++) {
              if ($num % $i == 0) {
                  $prime++;
              }
          }
          if ($prime == 0) {
              echo "$num is a prime number <br>";
          } else {
              echo "$num is not a prime number <br>";
          }
      }
      }
      primeNum(2);
      primeNum(3);
      primeNum(6);
      primeNum(7);
      primeNum(199);
      echo "--------Q37-------- <br>";
      function reverse_str($str)
      {
        for ($i=strlen($str)-1; $i >= 0; $i--) { 
          echo $str[$i];
        }
        echo "<br>";
      }
      reverse_str("comfortable");
      echo "--------Q38-------- <br>";
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
             echo "Your String is Ok";
         }else{
             echo "Your String is NOT Ok";
     
         }
         echo "<br>";
        
      }
      isLowerAscii("asdasdsv");
      echo "--------Q39-------- <br>";
      $number1 = 12;
      $number2 = 10;
      echo "X = $number1 <br>";
      echo "Y = $number2 <br>";
      function swap(&$num1,&$num2)
      {
        $numx = $num1;
        $numy = $num2;
        $num1 = $numy;
        $num2 = $numx;

      }
      swap($number1,$number2);
      echo "X = $number1 <br>";
      echo "Y = $number2 <br>";
      echo "--------Q40-------- <br>";
      // $nnn = 456;
      // echo $nnn[0];
      function armstrong($num)
      {
       $len =  strlen(strval($num));
       $pre = 0;
       for ($i=0; $i < $len; $i++) { 
         $pre = $pre + (intval(strval($num)[$i]) ** 3);
       }
       if($pre == $num){
         echo "$num is Armstrong Number";
        }else{
          echo "$num is NOT Armstrong Number";
       }
       echo "<br>";
      }
      armstrong(153);
      echo "--------Q41-------- <br>";
      function isPalindrome($str)
      {
        $newStr = str_replace(" ", "" , $str);
        $smallStr = strtolower($newStr);
        $end = strlen($newStr);
        $is = 0;
        for ($i=0; $i < strlen($smallStr); $i++) { 
          if ($smallStr[$i] != $smallStr[$end-1]) {
            $is ++;
          }
          $end--;
        }
        if($is == 0){
          echo "Yes it is a palindrome";
        }else{
          echo "No it is NOT a palindrome";
        }
        echo "<br>";
      }
      isPalindrome("Eva, can I see bees in a cave?");
      isPalindrome("eva can i sEe bees iN A cave");
      echo "--------Q42-------- <br>";
      function duplicates()
      {
        $array1 = array(1,1,1,1,1,2, 4, 7, 4,4,2,4,2,4,4, 8, 4);
        $array2 = [0];
        foreach($array1 as $item){
          if(array_search($item , $array2) == false){
            array_push($array2 , $item);
          }
        }
        // if we removed the shift ****
        array_shift($array2);
        foreach($array2 as $i){
          echo "$i ";
        }
       
      }
      duplicates();
      
    ?>
  </body>
</html>
