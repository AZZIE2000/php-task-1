<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <p>GET form</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
      <label for="email">Email:</label>
      <input type="email" name="email" />
      <label for="email">Password:</label>
      <input type="password" name="Password" />
      <input type="submit" />
    </form>
    <br>
    <p>POST form</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <label for="email">Email:</label>
      <input type="email" name="email" />
      <label for="email">Password:</label>
      <input type="password" name="Password" />
      <input type="submit" />
    </form>
    <?php

$checkGET = $_SERVER["REQUEST_METHOD"] == "GET";
$checkPOST = $_SERVER["REQUEST_METHOD"] == "POST";
$mail = $_GET["email"] ;
$pass = $_GET["Password"];
$mail1 = $_POST["email"] ;
$pass1 = $_POST["Password"];
if(($mail and $pass) or ($mail1 and $pass1)){

  if ($checkGET){
    echo "this is a (GET) method: <br> <br>";
    echo "Email: " . $mail . "<br>";
    echo "Password: " . $pass . "<br>";
      }else{
  
        echo "this is a (POST) method: <br> <br>";
        echo "Email: " . $mail1 . "<br>";
        echo "Password: " . $pass1 . "<br>";
  }

  
};
echo "<br>";





?>
    <hr>
    <p>Calculator:</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <label for="email">Enter your equation:</label>
      <input type="text" name="equation" />
      <input type="submit" /><br>
      
     
      <br>
      
    </form>
    <?php 
      
      $eq = $_POST["equation"] ;
      if($eq){
        echo "Result: ";
        echo "<br>";
        // echo eval("1+3");
        echo "<br>";
        echo eval("echo $eq;");

      }else{
        echo "";
      }

    
    
    ?>

   
  </body>
</html>
